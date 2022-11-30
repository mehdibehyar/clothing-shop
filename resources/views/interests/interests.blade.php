@component('layouts.content')
    @slot('title')
        Cart
    @endslot

    @slot('script')
        <script>



        </script>
    @endslot





    @include('sweetalert::alert')
    @include('layouts.endSidebar')
@endcomponent
