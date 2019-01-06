<div class="col-md-6">
    <article class="post wow bounceInUp" data-wow-delay=".5s">
        <div class="entry-main">
            <ul class="info-post">
                <li class="date color_primary">{{ $post->created_at->formatLocalized('%d') }}</li>
                <li class="month">{{ strtoupper($post->created_at->formatLocalized('%b')) }}</li>
            </ul>
            @if($file = $post->files()->first())
                <div class="hover__figure"><img src="{{ \Imagy::getImage($file->filename, 'blogIndex', ['width' => 250, 'height' => 250, 'mode' => 'fit', 'quality' => 100]) }}" height="320" width="770" alt="Foto"></div>
            @endif
            <div class="entry-autor"> <img src="{{ Theme::url('media/80x80/Bugra_Buyrukcu_80x80.jpg') }}" height="82" width="80" alt="Autor"> </div>
            <h2 class="entry-title">{{ $post->title }}</h2>
            <ul class="entry-meta unstyled clearfix">
                <li>
                    <a href="#" rel="nofollow"><i class="icon color_second icon-user"></i>{{ $post->author->fullname }}</a>
                </li>
                <li>
                    <a href="{{ $post->category->url }}"><i class="icon color_second icon-folder"></i>{{ $post->category->name }}</a>
                </li>
            </ul>
            <div class="entry-content ui-text">
                {!! strip_tags(Str::words($post->content, 50)) !!}
            </div>
            <footer class='entry-footer'>
                <a class="btn bg-color_primary" href="{{ $post->url }}">{{ trans('global.buttons.read more') }}</a>
            </footer>
        </div><!-- end entry-main -->
    </article><!-- end post -->

    <i class="decor-brand"></i>
</div>
