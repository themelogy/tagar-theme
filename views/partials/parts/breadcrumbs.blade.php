<!--page title start-->
<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $slot }}</h2>
                @if(isset($breadcrumbs))
                {!! Breadcrumbs::renderIfExists($breadcrumbs) !!}
                @endif
            </div>
        </div>
    </div>
</section>
<!--page title end-->