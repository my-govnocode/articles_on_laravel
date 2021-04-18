@include('layouts.header')
<div class="row">
    <div class="col-md-8 blog-main">
        @yield('contents')
    </div>

    @section('sidebar')
    <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
            @include('layouts.sidebar')
        </div>
    </aside><!-- /.blog-sidebar -->
    @show
</div>

@include('layouts.footer')