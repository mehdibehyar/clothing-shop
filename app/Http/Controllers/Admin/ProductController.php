<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Color;
use App\Models\Permission;
use App\Models\Product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{
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

        $products=$products->paginate(20);
        return view('admin.products.all',compact('products'));
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
            'colors'=>'array'
        ]);

        $product=auth()->user()->products()->create($data);
        $product->categories()->sync($data['categories']);

        $this->attachAttributes($data['attributes'], $product);

        $this->attachColor($data, $product);
        return redirect(route('admin.products.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
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
            'colors'=>'array'
        ]);
        $product->update($data);
        $product->categories()->sync($data['categories']);
        $product->attributes()->detach();
        $this->attachAttributes($data['attributes'], $product);
        $product->colors()->detach();
        $this->attachColor($data, $product);

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
    public function attachColor(array $data, $product): void
    {
        if (isset($data['colors'])) {
            $colors = collect($data['colors']);
            $colors->each(function ($item) use ($product) {
                if (is_null($item['color'] || is_null($item['label']))) return;
                $color = Color::firstOrCreate(
                    ['color' => $item['color']],
                    ['label' => $item['label']]
                );
                $product->colors()->attach($color->id);

            });
        }
    }
}
