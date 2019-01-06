@php
    $pages         = $page->children()->orderBy('position')->paginate(@$page->settings->list_per_page ?? 6);
    $grid_size     = @$page->settings->list_grid ?? 3;
    $chunk_size    = ceil(12/$grid_size);
    $column_size   = is_float(12/$grid_size) ? $grid_size : $grid_size;
    $column_div    = ceil(12 % $grid_size);
@endphp


@if(@$page->settings->show_content)
    <div class="row">
        <div class="col-md-12">
            @include('page::types.image')
        </div>
    </div>
@endif

@if($pages->count()>0)
    <hr/>
    @foreach($pages->chunk($chunk_size) as $chunk)
        <div class="row row-height">
            @foreach($chunk as $child)
                <div class="col-sm-4">
                    <div class="services__item">
                        @if($image = $child->present()->firstImage(370, 370, 'fit', 100))
                            <div class="service__figure">
                                <div class="hover__figure"><img src="{{ $image }}" alt="{{ $child->title }}"></div>
                                @isset($child->settings->icon)
                                    <span class="icon-round icon-round_small helper"><i class="{{ $child->settings->icon }}"></i></span>
                                @endisset
                            </div>
                        @endif
                        <h2 class="ui-title-inner">{{ $child->title }}</h2>
                        <div class="ui-text">{{ strip_tags(Str::words($child->body, 30)) }}</div>
                        <a class="btn btn_small" href="{{ $child->url }}">{{ trans('global.buttons.read more') }}</a>
                    </div>
                </div>
            @endforeach
            @unset($child)
        </div>
    @endforeach
    @unset($chunk)
@endif
