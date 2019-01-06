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
                @foreach($pages as $page)
                @if($image = $page->present()->firstImage(370,300,'fit',80))
                <div class="col-sm-4">
                    <div class="services__item">
                        <div class="service__figure">
                            <div class="hover__figure"><img src="{{ $image }}" height="300" width="370" alt="{{ $page->title }}"></div>
                            <span class="icon-round icon-round_small helper"><i class="{{ $page->settings->icon ?? null }}"></i></span>
                        </div>
                        <h3 class="ui-title-inner">{{ $page->title }}</h3>
                        <div class="ui-text">{{ strip_tags(Str::words($page->body, 30)) }}</div>
                        <a class="btn btn_small" href="{{ $page->url }}">{{ trans('global.buttons.read more') }}</a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</main>
