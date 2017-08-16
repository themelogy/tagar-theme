<h2 class="white-text">{{ trans('themes::blog.titles.recent posts') }}</h2>
<ul class="footer-list">
    @foreach(Blog::latest(5) as $post)
        <li><a href="#">{{ $post->title }}</a> </li>
    @endforeach
</ul>