<h2 class="ui-title-block ui-title-block_small">{!! trans('themes::theme.media title')  !!}</h2>
<p class="ui-text">{!! trans('themes::theme.media sub title') !!}</p>
<div class="link_on-youtube" style="margin-bottom: 0;">
    <a class="inline" href="#data{{ $media->id }}"><span class="btn bg-color_second"><i class="icon icon-camcorder"></i></span></a>
    <div style="display:none; padding: 0;">
        <div class="embed-responsive" id="data{{ $media->id }}" style="padding: 0;">{!! $media->present()->code !!}</div>
    </div>
    <img src="{{ $media->present()->firstImage(600,325,'fit',80) }}" alt="{{ $media->title }}"/>
</div>

@push('js-inline')
    <link rel="stylesheet" href="{!! Module::asset('video:js/fancybox/jquery.fancybox.min.css') !!}">
    <script src="{!! Module::asset('video:js/fancybox/jquery.fancybox.min.js') !!}"></script>
    <script>
        $("a.inline").fancybox({
            width: 600,
            height: 350
        });
    </script>
@endpush
