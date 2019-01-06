<div class="widget widget-post">
    <h3 class="widget-title color_second">{{ trans('blog::post.title.recent posts') }}</h3>
    <div class="block_content">
        @foreach($posts as $post)
        <section class="widget-post__item clearfix">
			@if($image = $post->present()->firstImage(80,80,'fit',80))
            <div class="entry-thumbnail"> <a class="img" href="{{ $post->url }}"> <img src="{{ $image }}" alt="{{ $post->title }}"></a></div>
			@endif
            <div class="entry-main">
                <h4 class="entry-header"><a href="{{ $post->url }}">{{ $post->title }}</a></h4>
                <div class="entry-meta">
                    <div class="meta"><time pubdate datetime="{{ $post->created_at->formatLocalized('%Y-%m-%d') }}"><i class="icon icon-calendar color_primary"></i>{{ $post->created_at->formatLocalized('%d %B %Y') }}</time></div>
                </div>
            </div>
        </section>
        @endforeach
    </div>
