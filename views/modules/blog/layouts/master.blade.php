@extends('layouts.master')

@section('content')

    @if(isset($breadcrumbs))
        @component('partials.parts.breadcrumbs', ['breadcrumbs'=>$breadcrumbs])
        @if(isset($title))
            {{ $title }}
        @else
            {{ trans('blog::blog.title') }}
        @endif
        @endcomponent
    @endif

    <!-- blog section start -->
    <section class="blog-section section-padding p-top-bot-50">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="posts-content default-blog">
                        {!! $slot !!}
                    </div><!-- /.posts-content -->
                </div><!-- /.col-md-8 -->

                <div class="col-md-4">
                    @include('blog::partials.sidebar')
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- blog section end -->
@endsection