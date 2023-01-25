<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{


    public function __construct()
    {
        $this->middleware('can:show_advertises')->only(['index']);
        $this->middleware('can:create_advertise')->only(['create','store']);
        $this->middleware('can:edit_advertise')->only(['edit','update']);
        $this->middleware('can:delete_advertise')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertises=Advertise::query();
        if ($search=\request('search')){
            $advertises->orWhere('title','LIKE',"%{$search}%");
        }


        $advertises=$advertises->paginate(10);
        return view('admin.advertises.all',compact('advertises'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'products'=>'array|required'
        ]);
        $advertise=auth()->user()->advertises()->create($request->all());

        //create products for advertise
        $products=collect($request->products);
        $products->each(function ($item)use($advertise){
            $advertise->products()->attach($item);
        });

        return redirect(route('admin.advertises.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertise $advertise)
    {

        return view('admin.advertises.edit',compact('advertise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertise $advertise)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'products'=>'array|required'
        ]);
        $advertise->update($request->all());

        //update products for advertise
        $products=collect($request->products);
        $products->each(function ($item)use($advertise){
            $advertise->products()->attach($item);
        });

        return redirect(route('admin.advertises.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertise $advertise)
    {
        $advertise->delete();
        return redirect(route('admin.advertises.index'));
    }

}
