@component('news::layouts.master', ['breadcrumbs'=>'news.category'])

    @slot('title')
        {{ $category->name }}
    @endslot

    @foreach($posts as $post)
        @include('news::partials._post')
    @endforeach

    {!! $posts->render('news::pagination.default') !!}

@endcomponent