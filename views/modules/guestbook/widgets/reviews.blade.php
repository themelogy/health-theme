<section class="slider-reviews slider-reviews_2-col bg_7 bg_transparent">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="ui-title-block text-center">{!! trans('themes::theme.home reviews title') !!}</h2>
                <div class="ui-subtitle-block text-center">{!! trans('themes::theme.home reviews sub title') !!}</div>
                <div class="text-center"><a href="{{ route('guestbook.comment.form') }}">Yorum bırakmak istermisiniz?</a></div>
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
                    @foreach($comments as $comment)
                        <li class="slide">
                            @if($image = $comment->present()->firstImage(116,116,'fit',80))
                                <img class="avatar" src="{{ $image }}" height="130" width="130" alt="Avatar">
                            @endif
                            <div class="quote">
                                <blockquote>
                                    {{ strip_tags(Str::words($comment->message, 40)) }}
                                </blockquote>
                                <span class="name">{{ $comment->fullname }}</span></div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end reviews -->
