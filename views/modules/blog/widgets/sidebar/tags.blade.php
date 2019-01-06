<div class="widget widget-cloud clearfix">
    <h3 class="widget-title color_second">{{ trans('tag::tags.tags') }}</h3>
    <div class="block_content">
        <div class="tagcloud">
            <ul class="wp-tag-cloud unstyled">
                @foreach($tags as $tag)
                <li><a href="{{ $tag->url }}">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div><!-- end widget-cloud -->
