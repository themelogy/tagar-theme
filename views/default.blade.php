@extends('layouts.master')

@section('content')

    @component('partials.parts.breadcrumbs', ['breadcrumbs'=>'page'])
    {{ $page->title }}
    @endcomponent

    <!-- heading section start -->
    <section class="ptb-90 page-content">
        <div class="container">

            @if(!empty(@$page->extension()->sub_title))
            <h2>{{ $page->extension()->sub_title }}</h2>
            <hr class="mb-40">
            @endif

            <div class="row">
                <div class="col-md-12">
                    @if($page->hasImage())
                        <div class="pull-right m-lft-20 m-bot-20">
                            <img class="img-thumbnail" src="{{ $page->present()->firstImage(400, null, 'fit', 80) }}" alt="{{ $page->title }}"/>
                        </div>
                    @endif
                    {!! $page->body !!}
                </div>
            </div><!-- /.row -->


        </div><!-- /.container -->
    </section>
@stop
