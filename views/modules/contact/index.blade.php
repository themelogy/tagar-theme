@extends('layouts.master')

@section('content')

    @component('partials.parts.breadcrumbs', ['breadcrumbs'=>'contact'])
    {{ trans('themes::contact.title') }}
    @endcomponent

    <!-- contact-form-section -->
    <section class="section-padding p-top-bot-50">

        <div class="container">

            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">{{ trans('themes::contact.contact us') }}</h2>
                <p class="section-sub">İpotek işinde güvenli ofis ve hızlı iletişim önemli</p>
            </div>

            <div class="row">
                <div class="col-md-8">
                    @include('contact::form')
                </div><!-- /.col-md-8 -->

                <div class="col-md-4 contact-info">

                    <address>
                        <i class="material-icons brand-color">&#xE55F;</i>
                        <div class="address">
                            {{ setting('theme::company-name') }}
                            <p>{!! setting('theme::address') !!}</p>
                        </div>

                        <i class="material-icons brand-color">&#xE61C;</i>
                        <div class="phone">
                            <p>T: {{ setting('theme::phone') }}<br>
                                F: {{ setting('theme::fax') }}</p>
                        </div>

                        <i class="material-icons brand-color">&#xE0E1;</i>
                        <div class="mail">
                            <p><a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a><br>
                                <a href="#">www.tagar.us</a></p>
                        </div>
                    </address>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div>
    </section>
    <!-- contact-form-section End -->


    <!-- map-section -->
    <div class="height-350">
        @gmap('300px', '16', 'img/ico/favicon.png')
    </div>
    <!-- /.map-section -->
@endsection