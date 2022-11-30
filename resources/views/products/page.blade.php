@foreach($products as $product)
    <div class="col-6 col-lg-3">
        <div class="card cd1r1">
            <!-- img in card2 -->
            <a href="{{route('single_product',$product->id)}}">
                <img class="card-img-top img-fluid cdimgtop" src="{{url($product->images->image)}}" alt="Card image cap">
                <div class="card-body cbody">
                    <div class="d-flex justify-content-end mb-2">
                        <a href="#" class="badge text-bg-success mt-0 text-decoration-none">ویژه</a>
                    </div>
                    <h5 class="card-title text-muted text-center">{{$product->title}}</h5>
                    <p class="card-text span1 text-danger text-center pt-2">{{$product->price}}تومان</p>
                    <!--==== div with non style for hover ====-->
                    <div class="nonestyle ">
                        @foreach($product->attributes as $att)
                            <p class="card-text">{{$att->name}} : {{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}</p>
                        @endforeach
                        <div class="d-flex">
                            <a href="" onclick="addToInterest(event,'{{$product->id}}')">
                                <div class="flex-grow-1">
                                    <i class="ps-5 bi bi-heart icononimg iconlike4"  onclick="clicktolike(this)"></i>
                                </div>
                            </a>
                            <a href="{{route('single_product',$product->id)}}">
                                <div class="flex-grow-1">
                                    <i class="ps-5 bi bi-cart3 icononimg" id="addbas6"></i>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endforeach
