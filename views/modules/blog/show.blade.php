@extends('layouts.master')

@section('content')
    @component('partials.components.title', [
    'breadcrumb' => 'blog.show'
    ])
        <h1>{{ $post->title }}</h1>
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <main class="main-content">

                    <article class="post wow bounceInUp" data-wow-delay=".5s">
                        <div class="entry-main">

                            <ul class="info-post">
                                <li class="date color_primary">{{ $post->created_at->formatLocalized('%d') }}</li>
                                <li class="month">{{ mb_strtoupper($post->created_at->formatLocalized('%B')) }}</li>
                            </ul>

                            @if($image = $post->present()->firstImage(800,null,'resize',80))
                                <div class="hover__figure"><img src="{{ $image }}" alt="{{ $post->title }}"></div>
                            @endif

                            <div class="entry-autor"> <img src="{{ Theme::url('media/80x80/Bugra_Buyrukcu_80x80.jpg') }}" height="82" width="80" alt="{{ setting('theme::company-name') }} Foto"> </div>

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
                                {!! $post->content !!}
                            </div>

                        </div>
                    </article>

                </main>
            </div>


            <div class="col-md-3">
                @include('blog::partials.sidebar')
            </div>
        </div>
    </div>
@endsection
