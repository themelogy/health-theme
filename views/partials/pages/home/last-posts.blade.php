<section class="slider_team bg_transparent bg_9">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="ui-title-block">{!! trans('themes::theme.news title') !!}</h2>
                <!--<div class="ui-subtitle-block">{{ trans('themes::theme.news sub title') }}</div>-->
                <ul class="bxslider"
                    data-max-slides="4"
                    data-min-slides="1"
                    data-width-slides="270"
                    data-margin-slides="30"
                    data-auto-slides="true"
                    data-move-slides="1"
                    data-infinite-slides="true"
                    data-pager="true"
                    data-controls="false">
                    @foreach(Blog::latest(20) as $post)
                    @if($file = $post->files()->first())
                    <li class="slide"><img src="{{ \Imagy::getImage($file->filename, 'home_post', ['width' => 250, 'height' => 250, 'mode' => 'fit', 'quality' => 80]) }}" height="250" width="250" alt="Foto" /> <span class="name">{{ $post->title }}</span> <span class="category">{{ strip_tags(\Illuminate\Support\Str::words($post->content, 10)) }}<br>
              <br>
              </span> <a href="{{ $post->url }}" class="btn btn_small">{{ trans('global.buttons.read more') }}</a>
                        <ul class="social-links">
                            <li><a target="_blank" href="https://www.facebook.com/bugra.buyrukcu?fref=ts"><i class="social_icons social_facebook_square"></i></a></li>
                            <li class="li-last"><a target="_blank" href="https://www.instagram.com/dr_bugraadilbuyrukcu/"><i class="social_icons social_instagram_square"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCTZwxNJ0rMNvPRmpjIZFpcw"><i class="social_icons social_youtube_square"></i></a></li>
                            <li class=""><a target="_blank" href="https://twitter.com/drbugrabuyrukcu"><i class="social_icons social_twitter_square"></i></a></li>
                            <li><a target="_blank" href="https://tr.linkedin.com/in/bugra-adil-buyrukcu-22913156/"><i class="social_icons social_linkedin_square"></i></a></li>
                            <li><a target="_blank" href="https://plus.google.com/107640813037042334057"><i class="social_icons social_googleplus_square"></i></a></li>
                        </ul>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end slider_team -->