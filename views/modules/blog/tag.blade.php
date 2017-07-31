@component('blog::layouts.master', ['breadcrumbs'=>'blog.tag'])

    @slot('title')
        {{ trans('blog::tag.title.tag') . ' : ' .$tag->name }}
    @endslot

    @foreach($posts as $post)
        @include('blog::partials._post')
    @endforeach

    {!! $posts->render('blog::pagination.default') !!}

@endcomponent