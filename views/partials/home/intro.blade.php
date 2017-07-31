<section class="section-padding p-top-bot-50">
    <div class="container">
        @if($page = Page::findBySlug('hakkimizda'))
        <h1 class="text-bold text-capitalize mb-30 font-size-30">{{ $page->extension()->sub_title }}</h1>
        <div class="row">
            <div class="col-md-7">
                {!! $page->body !!}
            </div><!-- /.col-md-7 -->

            <div class="col-md-5 mt-sm-50">
                <div class="gallery-thumb">
                    <ul class="slides">
                        @foreach($page->present()->images(600,400,'fit',80) as $image)
                        <li data-thumb="{{ $image }}">
                            <img src="{{ $image }}" alt="image">
                        </li>
                        @endforeach
                    </ul>
                </div><!-- /.gallery-thumb -->
            </div><!-- /.col-md-5 -->

        </div><!-- /.row -->
        @endif
    </div><!-- /.container -->
</section>