<article class="post-wrapper">
    <div class="thumb-wrapper">
        <img src="{{ $post->present()->firstImage(720,300,'fit',80) }}" class="img-responsive" alt="{{ $post->title }}">
        <div class="entry-header">
            <span class="posted-in">
                <a href="{{ $post->category->url }}">{{ $post->category->name }}</a>
            </span>
            <h2 class="entry-title"><a href="{{ $post->url }}">{{ $post->title }}</a></h2>
        </div><!-- .entry-header -->
        <div class="author-thumb waves-effect waves-light">
            <a href="{{ route('blog.author', [$post->author->slug]) }}"><img src="{{ Theme::url('img/blog/author.jpg') }}" alt=""></a>
        </div>
        <span class="post-comments-number">
            <!--<i class="fa fa-comments"></i><a href="#">25</a>-->
        </span>
    </div><!-- .post-thumb -->
    <div class="entry-content">
        @if(Request::route()->getName() == 'blog.slug')
            {{ $post->intro }}
        @else
            {{ $post->body }}
        @endif
    </div><!-- .entry-content -->
</article>