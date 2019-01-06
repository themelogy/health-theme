<section class="slider-reviews slider-reviews_2-col bg_7 bg_transparent">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="ui-title-block text-center">{!! trans('themes::theme.home reviews title') !!}</h2>
                <div class="ui-subtitle-block text-center">{!! trans('themes::theme.home reviews sub title') !!}</div>
                <i class="decor-brand"></i></div>
            <div class="col-xs-12">
                <ul class="bxslider"
                    data-max-slides="2"
                    data-min-slides="1"
                    data-width-slides="570"
                    data-margin-slides="30"
                    data-auto-slides="false"
                    data-move-slides="1"
                    data-infinite-slides="false"
                    data-controls="false">
                    @foreach(app(\Modules\Faq\Repositories\QuestionRepository::class)->lastest(12) as $question)
                    <li class="slide">
						@if($file = $question->files()->first())
						<img class="avatar" src="{{ \Imagy::getImage($file->filename, 'reviewImage', ['width' => 116, 'height' => 116, 'mode' => 'fit', 'quality' => 80]) }}" height="130" width="130" alt="Avatar">
						@endif
                        <div class="quote">
                            <blockquote>
                                {{ $question->answer }}
                            </blockquote>
                            <span class="name">{{ $question->fullname }}</span> <span class="categories">{{ $question->position }}</span></div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end reviews -->