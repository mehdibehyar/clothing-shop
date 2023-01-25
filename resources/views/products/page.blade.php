@foreach($products as $product)
    <div class="col-6 col-lg-3 py-4">
        <div class="card cd1r1 shadow">
            <!-- img in card1 -->
            <a href="{{route('single_product',$product->id)}}">
                <img
                    class="card-img-top
                                                        img-fluid
                                                        cdimgtop rounded-top"
                    src="{{!$product->images()->count()==0?url($product->images->image):''}}"
                    alt="Card image
                                                        cap">
            </a>
            <div
                class="card-body
                                                        cbody
                                                        ">
                <div
                    class="d-flex
                                                            justify-content-end
                                                            mb-2"><a
                        href="#"
                        class="badge
                                                                text-bg-success
                                                                mt-0
                                                                text-decoration-none">ویژه</a></div>
                <h5
                    class="card-title
                                                            text-muted
                                                            text-center">{{$product->title}}</h5>
                <p
                    class="card-text
                                                            span1
                                                            text-danger
                                                            text-center
                                                            pt-2">{{$product->price}}تومان</p>
                <!--==== div with non style for hover ====-->
                <div class="nonestyle">
                    @foreach($product->attributes as $att)
                        <p class="card-text">
                            {{$att->name}} : {{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}
                        </p>
                    @endforeach
                    <p class="card-text">

                    </p>
                    <div
                        class="d-flex
                                                                ">
                        <div
                            class="flex-grow-1"><i
                                class="ps-5
                                                                        bi
                                                                        bi-heart
                                                                        icononimg
                                                                        iconlike{{$loop->index}}"
                                onclick="addToInterest(event,'{{$product->id}}','{{$loop->index}}')"></i>
                            <i style="display: none" class="bi bi-check2 iconselect{{$loop->index}}"></i>
                        </div>
                        <div class="flex-grow-1">
                            <a href="{{route('single_product',$product->id)}}">
                                <i class="ps-5 bi bi-cart3 icononimg" id="addbas6">

                                </i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
