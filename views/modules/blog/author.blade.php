@component('blog::layouts.master', ['breadcrumbs'=>'blog.author'])

    @slot('title')
        {{ trans('themes::blog.author posts', ['author'=>$author->fullname]) }}
    @endslot

    @foreach($posts as $post)
        @include('blog::partials._post')
    @endforeach

    {!! $posts->render('blog::pagination.default') !!}

@endcomponent