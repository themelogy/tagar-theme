@component('news::layouts.master', ['breadcrumbs'=>'news.tag'])

    @slot('title')
        {{ trans('news::tag.title.tag') . ' : ' .$tag->name }}
    @endslot

    @foreach($posts as $post)
        @include('news::partials._post')
    @endforeach

    {!! $posts->render('news::pagination.default') !!}

@endcomponent