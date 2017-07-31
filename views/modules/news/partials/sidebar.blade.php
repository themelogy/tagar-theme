<div class="tt-sidebar-wrapper" role="complementary">

    <div class="widget widget_categories">
        <h3 class="widget-title">{{ trans('blog::category.title.category') }}</h3>
        <ul>
            @foreach(NewsCategory::all() as $category)
                <li><a href="{{ $category->url }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div><!-- /.widget_categories -->

    <div class="widget widget_tt_popular_post">
        <div class="tt-popular-post border-bottom-tab">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true">{{ trans('news::post.title.recent posts') }}</a>
                </li>
                <li class="">
                    <a href="#tt-popular-post-tab2" data-toggle="tab" aria-expanded="false">{{ trans('news::post.title.popular posts') }}</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- latest post tab -->
                <div id="tt-popular-post-tab1" class="tab-pane fade active in">

                    @foreach(News::latest(5) as $latest)
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="{{ $latest->present()->firstImage(75,75,'fit',80) }}" alt="{{ $latest->title }}">
                            </a>

                            <div class="media-body">
                                <h4><a href="{{ $latest->url }}">{{ $latest->title }}</a></h4>
                            </div> <!-- /.media-body -->
                        </div>
                    @endforeach

                </div>

                <!-- popular post tab-->
                <div id="tt-popular-post-tab2" class="tab-pane fade">

                    @foreach(News::popular(5) as $popular)
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="{{ $popular->present()->firstImage(75,75,'fit',80) }}" alt="{{ $popular->title }}">
                            </a>

                            <div class="media-body">
                                <h4><a href="{{ $popular->url }}">{{ $popular->title }}</a></h4>
                            </div> <!-- /.media-body -->
                        </div>
                    @endforeach

                </div>
            </div><!-- /.tab-content -->
        </div><!-- /.tt-popular-post -->
    </div><!-- /.widget_tt_popular_post -->

</div><!-- /.tt-sidebar-wrapper -->