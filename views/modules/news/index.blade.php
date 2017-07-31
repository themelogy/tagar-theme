@component('news::layouts.master', ['breadcrumbs'=>'news'])

    @foreach($posts as $post)
        @include('news::partials._post')
    @endforeach

    {!! $posts->render('news::pagination.default') !!}

@endcomponent