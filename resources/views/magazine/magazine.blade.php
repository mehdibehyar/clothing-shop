@component('products.layouts.content')

    <main class="">
        <div class="row">
            <div class=" col-12 col-lg-10 p-3 "><h3>{{$post->title}}</h3></div>

        </div>

        <div class="row">
            <div class="col-12 col-lg-10
                                    justify-content-lg-start
                                    justify-content-center
                                    align-content-lg-center">





                @foreach($post->discriptions as $description)
                    <h5 class="fw-bolder pt-4">{{$description->title}}</h5>
                    <p>
                        {{$description->description}}
                    </p>
                    <div class="row py-4">
                        <div class="col-4"></div>
                        <div class="col-10 col-lg-4">
                            <img src="{{$description->image}}"
                                 alt="img" class="imgpage" width="100%">
                        </div>
                        <div class="col-4"></div>
                    </div>
                @endforeach

                        <div class=" py-5 d-flex flex-row justify-content-between border-bottom">

                        </div>

                        <div class="owl-carousel owl-theme">
                            <div class="item"></div>
                            <div class="item"></div>
                        </div>
                    </div>
                    <div class="col-2 d-none d-lg-block"></div>
                </div>
                <!--=============> close paragraphs
                <===================-->


            </div>

        </div>
    </main>

@endcomponent
