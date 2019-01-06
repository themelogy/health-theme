<main class="main-content">
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="separator_20"></div>
                <div class="col-xs-12">
                    <h2 class="ui-title-block text-center">{!! trans('themes::theme.welcome') !!}</h2>
                    <div class="ui-subtitle-block">{{ trans('themes::theme.welcome sub title') }}</div>
                </div>
            </div>
            <i class="decor-brand"></i>
            <div class="row">
                @if($pages = Page::findBySlug('tedaviler'))
                @foreach($pages->children()->orderBy('position', 'ASC')->get()->take(6) as $child)
                <div class="col-sm-4">
                    <div class="services__item">
                        @if($file = $child->files()->where('zone', 'pageImage')->first())
                        <div class="service__figure">
                            <div class="hover__figure"><img src="{{ \Imagy::getImage($file->filename, 'home_treatment', ['width' => 370, 'height' => 300, 'mode' => 'fit', 'quality' => 80]) }}" height="300" width="370" alt="{{ $child->title }}"></div>
                            <span class="icon-round icon-round_small helper"><i class="{{ $child->settings->icon ?? null }}"></i></span>
                        </div>
                        @endif
                        <h3 class="ui-title-inner">{{ $child->title }}</h3>
                        <div class="ui-text">{{ strip_tags(\Illuminate\Support\Str::words($child->body, 30)) }}</div>
                        <a class="btn btn_small" href="{{ $child->url }}">{{ trans('global.buttons.read more') }}</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end services -->

</main>