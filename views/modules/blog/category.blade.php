@component('blog::layouts.master', ['breadcrumbs'=>'blog.category'])

    @slot('title')
        {{ $category->name }}
    @endslot

    @foreach($posts as $post)
        @include('blog::partials._post')
    @endforeach

    {!! $posts->render('blog::pagination.default') !!}

@endcomponent