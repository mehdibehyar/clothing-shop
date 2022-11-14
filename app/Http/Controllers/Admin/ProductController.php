<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Attribute;
use App\Models\Color;
use App\Models\Permission;
use App\Models\Product;
use App\Models\Size;
use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:show_products')->only(['index']);
        $this->middleware('can:create_product')->only(['create','store']);
        $this->middleware('can:edit_product')->only(['edit','update']);
        $this->middleware('can:delete_product')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products=Product::query();
        if ($search=\request('search')){
            $products->orWhere('title','LIKE',"%{$search}%")->orWhere('id',$search);
        }

        $products=$products->paginate(1);
        return view('admin.products.all',compact('products'))->render();
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()){
            $products=Product::query()->paginate(1);
            return view('admin.products.page',compact('products'))->render();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=$request->validate([
            'title'=>'required|max:255',
            'description'=>'required|min:20',
            'price'=>'required|integer',
            'inventory'=>'required|integer',
            'categories'=>'array|required',
            'attributes'=>'array|required',
            'cs.*.label'=>'required',
            'cs.*.color'=>'required',
            'cs.*.size'=>'required',
            'cs.*.number'=>'required','integer',
            'cs'=>'array',
        ]);


        $product=auth()->user()->products()->create($data);
        $product->categories()->sync($data['categories']);

        $this->attachAttributes($data['attributes'], $product);

        $this->attachSize_color($data,$product);
        return redirect(route('admin.products.index'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data=$request->validate([
            'title'=>'required|max:255',
            'description'=>'required|min:20',
            'price'=>'required|integer',
            'inventory'=>'required|integer',
            'categories'=>'array|required',
            'attributes'=>'array|required',
            'cs.*.label'=>'required',
            'cs.*.color'=>'required',
            'cs.*.size'=>'required',
            'cs.*.number'=>'required|integer',
            'cs'=>'array'
        ]);
        $product->update($data);
        $product->categories()->sync($data['categories']);
        $product->attributes()->detach();
        $this->attachAttributes($data['attributes'], $product);
        $product->colors()->delete();
        $product->sizes()->delete();
        $this->attachSize_color($data, $product);

        return redirect(route('admin.products.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('admin.products.index'));
    }

    /**
     * @param $attributes1
     * @param $product
     * @return void
     */
    protected function attachAttributes($attributes1, $product): void
    {
        $attributes = collect($attributes1);
        $attributes->each(function ($item) use ($product) {
            if (is_null($item['name']) || is_null($item['value'])) return;
            $attr = Attribute::firstOrCreate([
                'name' => $item['name']
            ]);
            $att_value = $attr->values()->firstOrCreate(
                ['value' => $item['value']],
            );

            $product->attributes()->attach($attr->id, ['attribute_value_id' => $att_value->id]);
        });
    }

    /**
     * @param array $data
     * @param $product
     * @return void
     */


    public function attachSize_color(array $data, Product $product)
    {
        if (isset($data['cs'])) {
            $date = collect($data['cs']);
            $date->each(function ($item) use ($product) {
                if (is_null($item['size']) || is_null($item['color']) || is_null($item['label'])) return;
                $size = Size::firstOrCreate(
                    ['size' => $item['size']]
                );

                $color = Color::firstOrCreate(
                    ['label' => $item['label']],
                    ['color' => $item['color']]
                );
                $product->colors()->attach($color->id);

                $product->sizes()->attach($size->id);

                $product->statistics()->create(['size_id'=>$size->id,'color_id'=>$color->id,'number'=>$item['number']]);

            });
        }
    }
}
