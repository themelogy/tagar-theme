<footer class="footer footer-one">
    <div class="primary-footer theme-bg lighten-1 p-top-bot-50">
        <div class="container">

            <a href="#top" class="page-scroll btn-floating btn-large theme-reverse-bg back-top waves-effect waves-light" data-section="#top">
                <i class="material-icons">&#xE316;</i>
            </a>


            <div class="row">
                <div class="col-md-3 widget clearfix">
                    <h2 class="white-text m-bot-10"><img class="height-50" src="{{ Theme::url('img/logo-white.svg') }}" alt="{{ setting('theme::company-name') }}"></h2>
                    <address class="lighten-1 m-top-bot-15 txt-white">
                        {!! setting('theme::address') !!}<br/>
                        <abbr title="Phone">P:</abbr> {{ setting('theme::phone') }}<br/>
                        <abbr title="Fax">F:</abbr> {{ setting('theme::fax') }}
                    </address>

                    <ul class="social-link tt-animate ltr ">
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
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 widget">
                    @php $menu = app(\Modules\Menu\Repositories\MenuRepository::class)->findBySlug('corporate') @endphp
                    @if(isset($menu))
                        <h2 class="white-text">{{ $menu->title }}</h2>
                        {!! Menu::render('corporate', \Modules\Theme\Presenters\Tagar\FooterMenuLinksPresenter::class) !!}
                    @endif
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 widget">
                    @php $menu = app(\Modules\Menu\Repositories\MenuRepository::class)->findBySlug('services') @endphp
                    @if(isset($menu))
                        <h2 class="white-text">{{ $menu->title }}</h2>
                        {!! Menu::render('services', \Modules\Theme\Presenters\Tagar\FooterMenuLinksPresenter::class) !!}
                    @endif
                </div><!-- /.col-md-3 -->


                <div class="col-md-3 widget">
                    @php $menu = app(\Modules\Menu\Repositories\MenuRepository::class)->findBySlug('links') @endphp
                    @if(isset($menu))
                        <h2 class="white-text">{{ $menu->title }}</h2>
                        {!! Menu::render('links', \Modules\Theme\Presenters\Tagar\FooterMenuLinksPresenter::class) !!}
                    @endif
                </div><!-- /.col-md-3 -->
            </div>

        </div><!-- /.container -->
    </div><!-- /.primary-footer -->

    <div class="secondary-footer theme-dark-bg lighten-1">
        <div class="container">
            <span class="copy-text">{!! trans('themes::theme.copyrights', ['name'=>setting('theme::company-name'), 'url'=>url(locale()), 'date'=>Carbon::now()->format('Y'), 'powered'=>'Qbicom Digital']) !!}</span>
        </div><!-- /.container -->
    </div>
</footer>