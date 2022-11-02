<?php

namespace Modules\Discount\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Modules\Discount\Entities\Discount;

class DiscountController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:show_discounts')->only(['index']);
        $this->middleware('can:create_discount')->only(['create','store']);
        $this->middleware('can:edit_discount')->only(['edit','update']);
        $this->middleware('can:delete_discount')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $discounts=Discount::query();
        if ($search=\request('search')){
            $discounts->orWhere('code','LIKE',"%{$search}%")->orWhere('id',$search);
        }

        $discounts=$discounts->paginate(20);
        return view('discount::admin.all',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('discount::admin.create');

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {

        $data=$request->validate([
            'code'=>'required|unique:discounts,code',
            'percent'=>'required|integer|between:1,99',
            'users'=>'nullable|array|exists:users,id',
            'products'=>'nullable|array|exists:products,id',
            'categories'=>'nullable|array|exists:categories,id',
            'expiration_time'=>'required'
        ]);

        $discount=Discount::create($data);
        if (!is_null($request->products)){
            $discount->products()->attach($data['products']);
        }
        if (!is_null($request->categories)){
            $discount->categories()->attach($data['categories']);
        }
        if (!is_null($request->users)){
            $discount->users()->attach($data['users']);
        }

        return redirect(route('admin.discounts.index'));
    }



    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Discount $discount)
    {
        return view('discount::admin.edit',compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Discount $discount)
    {
        $data=$request->validate([
            'code'=>['required',Rule::unique('discounts','code')->ignore($discount->id)],
            'percent'=>'required|integer|between:1,99',
            'users'=>'nullable|array|exists:users,id',
            'products'=>'nullable|array|exists:products,id',
            'categories'=>'nullable|array|exists:categories,id',
            'expiration_time'=>'required'
        ]);
        //for update data discounts table
        $discount->update($data);

        isset($data['products'])?
            $discount->products()->sync($data['products']):
            $discount->products()->detach();

        isset($data['categories'])?
            $discount->categories()->sync($data['categories']):
            $discount->categories()->detach();

        isset($data['users'])?
            $discount->users()->sync($data['users']):
            $discount->users()->detach();


        return redirect(route('admin.discounts.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Discount $discount)
    {
        $discount->delete();

        return redirect(route('admin.discounts.index'));
    }
}
