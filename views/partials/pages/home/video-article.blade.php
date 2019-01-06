<div class="section-large">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="ui-title-block ui-title-block_small">{!! trans('themes::theme.helpful articles') !!}</h2>
                <div class="panel-group accordion" id="accordion">
                    @if($posts = BlogCategory::findBySlug('faydali-bilgiler'))
                        <?php $i = 1; ?>
                        @foreach($posts->posts as $post)
                            <div class="panel @if($i==1) panel-default @endif">
                                <div class="panel-heading"><a class="btn-collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $i }}"><i class="icon fa"></i></a>
                                    <h3 class="panel-title">{{ $post->title }}</h3>
                                </div>
                                <div id="collapse-{{ $i }}" class="panel-collapse collapse @if($i==1) in @endif">
                                    <div class="panel-body">
                                        @if($file = $post->files()->first())
                                            <img src="{{ \Imagy::getImage($file->filename, 'helpful_article', ['width' => 120, 'height' => 120, 'mode' => 'fit', 'quality' => 80]) }}" height="120" width="120" alt="Foto">
                                        @endif
                                        <p class="ui-text">{{ strip_tags(\Illuminate\Support\Str::words($post->content, 25)) }}</p>
                                        <a href="{{ $post->url }}" class="link">{{ trans('global.buttons.read more') }}</a></div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="ui-title-block ui-title-block_small">{!! trans('themes::theme.media title')  !!}</h2>
                <p class="ui-text">{!! trans('themes::theme.media sub title') !!}</p>
                @if($video = Faq::latest(1)->first())
                <a class="link_on-youtube" href="{{ $video->media }}" rel="prettyPhoto" title="{{ $video->title }}">
                    <span class="btn bg-color_second">
                        <i class="icon icon-camcorder"></i>VİDEO GÖSTERİMİ
                    </span>
                    @if($file = $video->files()->first())
                    <img src="{{ \Imagy::getImage($file->filename, 'homeVideo', ['width' => 570, 'height' => 360, 'mode' => 'fit', 'quality' => 80]) }}" alt="{{ $video->title }}">
                    @endif
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- end section -->