@if($slide = Slide::findBySlug('anasayfa'))
<div id="iview" class="main-slider">
    @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
    <div data-iview:image="{{ \Imagy::getImage($slider->files()->first()->filename, 'anasayfa_slider', ['width' => 1600, 'height' => 700, 'mode' => 'fit', 'quality' => 80]) }}" data-iview:transition="block-drop-random" >
        <div class="container">
            <div class="iview-caption bg-no-caption" data-x="{{ $slider->text_x_position }}" data-y="{{ $slider->text_y_position }}" data-transition="expandLeft">
                <div class="custom-caption">
					@if(!empty($slider->title))
                    <p class="slide-title bg-color_second">{{ $slider->title }}</p>
					@endif

                    {!! $slider->content !!}
                    @if($slider->link->url)
                    <a target="{{ $slider->link->target }}" href="{{ $slider->link->url }}" class="btn bg-color_primary">{{ trans('themes::theme.more information') }} <span class="btn-plus">+</span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
<!-- end iview -->
@endif