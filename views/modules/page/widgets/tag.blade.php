<div class="row">
    <div class="col-md-12">
        <div class="widget widget-cloud clearfix">
            <h3 class="widget-title">{{ trans('tag::tags.tags') }}</h3>
            <div class="block_content">
                <div class="tagcloud">
                    <ul class="wp-tag-cloud unstyled">
                        @foreach($tags as $tag)
                            <li><a href="{{ route('page.tag', [$tag->slug]) }}">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
