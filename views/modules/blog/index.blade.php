@component('blog::layouts.master', ['breadcrumbs'=>'blog'])

    @foreach($posts as $post)
        @include('blog::partials._post')
    @endforeach

    {!! $posts->render('blog::pagination.default') !!}

@endcomponent