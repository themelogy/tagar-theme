<!-- Top bar -->
<div class="top-bar dark-bg lighten-2 visible-md visible-lg">
    <div class="container">
        <div class="row">
            <!-- Social Icon -->
            <div class="col-md-4">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                    @if(setting('theme::facebook'))
                        <li><a target="_blank" href="{{ setting('theme::facebook') }}"><i class="fa fa-facebook"></i></a></li>
                    @endif
                    @if(setting('theme::twitter'))
                        <li><a target="_blank" href="{{ setting('theme::twitter') }}"><i class="fa fa-twitter"></i></a></li>
                    @endif
                    @if(setting('theme::tumblr'))
                        <li><a target="_blank" href="{{ setting('theme::tumblr') }}"><i class="fa fa-tumblr"></i></a></li>
                    @endif
                    @if(setting('theme::linkedin'))
                        <li><a target="_blank" href="{{ setting('theme::linkedin') }}"><i class="fa fa-linkedin"></i></a></li>
                    @endif
                    @if(setting('theme::dribble'))
                        <li><a target="_blank" href="{{ setting('theme::dribble') }}"><i class="fa fa-dribbble"></i></a></li>
                    @endif
                    @if(setting('theme::instagram'))
                        <li><a target="_blank" href="{{ setting('theme::instagram') }}"><i class="fa fa-instagram"></i></a></li>
                    @endif
                </ul>
            </div>

            <div class="col-md-8 text-right">
                <ul class="topbar-cta no-margin">
                    <li class="mr-20">
                        <a><i class="material-icons mr-10">&#xE0B9;</i>{!! Html::email(setting('theme::email')) !!}</a>
                    </li>
                    <li>
                        <a><i class="material-icons mr-10">&#xE0CD;</i> {{ setting('theme::phone') }}</a>
                    </li>
                    <li>
                        <div class="dropdown m-lft-10 language" style="z-index:9999">
                            <a class="dropdown-toggle p-bot-0 m-bot-0" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" title="Dil Seçiniz">
                                <span class="flag-icon flag-icon-{{ LaravelLocalization::getCurrentLocale() == "en" ? "us" : LaravelLocalization::getCurrentLocale() }}"></span> {{ LaravelLocalization::getCurrentLocaleNative() }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu margin-0 padding-0">
                                @foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
                                    <li @if($locale==LaravelLocalization::getCurrentLocale()) class="active" @endif style="display: block;">
                                        @php
                                            switch (Request::route()->getName()) {
                                                case 'page' && isset($page):
                                                $url = $page->present()->url($locale);
                                                break;
                                                case 'news.slug' && isset($post):
                                                case 'blog.slug' && isset($post):
                                                $url = $post->present()->url($locale);
                                                break;
                                                case 'news.category' && isset($category):
                                                case 'blog.category' && isset($category):
                                                case 'store.category.slug' && isset($category):
                                                $url = $category->present()->url($locale);
                                                break;
                                                case 'store.product.slug' && isset($product):
                                                $url = $product->present()->url($locale);
                                                break;
                                                case 'employee.view' && isset($employee):
                                                $url = $employee->present()->url($locale);
                                                break;
                                                default:
                                                $url = null;
                                                break;
                                            }
                                            $localizedUrl = LaravelLocalization::getLocalizedURL($locale, $url);
                                        @endphp

                                        <a rel="alternate" hreflang="{!! $locale !!}" href="{{ $localizedUrl }}"><span class="flag-icon flag-icon-{{ $locale == "en" ? "us" : $locale }}"></span> {!! $supportedLocale['native'] !!}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.top-bar -->


<!--header start-->
<header id="header" class="tt-nav nav-border-bottom">

    <div class="header-sticky light-header ">

        <div class="container">

            @if(isset($search))
            <div class="search-wrapper">
                <div class="search-trigger pull-right">
                    <div class='search-btn'></div>
                    <i class="material-icons">&#xE8B6;</i>
                </div>

                <!-- Modal Search Form -->
                <i class="search-close material-icons">&#xE5CD;</i>
                <div class="search-form-wrapper">
                    <form action="#" class="white-form">
                        <div class="input-field">
                            <input type="text" name="search" id="search">
                            <label for="search" class="">Ara...</label>
                        </div>
                        <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>

                    </form>
                </div>
            </div><!-- /.search-wrapper -->
            @endif

            <div id="materialize-menu" class="menuzord">

                <!--logo start-->
                <a href="{{ url(locale()) }}" class="logo-brand">
                    <img src="{{ Theme::url('img/logo.svg') }}" alt="{{ setting('theme::company-name') }}" >
                </a>
                <!--logo end-->

                {!! Menu::render('header', Modules\Theme\Presenters\Tagar\HeaderMenuPresenter::class) !!}

            </div>
        </div>
    </div>
</header>
<!--header end-->