@component('news::layouts.master', ['breadcrumbs'=>'news.author'])

    @slot('title')
        {{ trans('themes::news.author posts', ['author'=>$author->fullname]) }}
    @endslot

    @foreach($posts as $post)
        @include('news::partials._post')
    @endforeach

    {!! $posts->render('news::pagination.default') !!}

@endcomponent