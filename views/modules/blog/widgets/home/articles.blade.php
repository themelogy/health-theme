<h2 class="ui-title-block ui-title-block_small">{!! trans('themes::theme.helpful articles') !!}</h2>
<div class="panel-group accordion" id="accordion">
    @foreach($posts as $post)
        <div class="panel @if($loop->first) panel-default @endif">
            <div class="panel-heading"><a class="btn-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $loop->iteration }}"><i class="icon fa"></i></a>
                <h3 class="panel-title">{{ $post->title }}</h3>
            </div>
            <div id="collapse-{{ $loop->iteration }}" class="panel-collapse collapse @if($loop->first) in @endif">
                <div class="panel-body">
                    @if($image = $post->present()->firstImage(120,120,'fit',80))
                        <img src="{{ $image }}" alt="{{ $post->title }}">
                    @endif
                    <p class="ui-text">{{ strip_tags(Str::words($post->content, 25)) }}</p>
                    <a href="{{ $post->url }}" class="link">{{ trans('global.buttons.read more') }}</a></div>
            </div>
        </div>
    @endforeach
</div>
