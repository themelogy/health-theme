@extends('layouts.master')

@section('content')
    <div class="ui-title-page bg_title_medya bg_transparent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>{!! trans('faq::faqs.title.faqs') !!}</h1>
                    <div class="ui-subtitle-page">{!! trans('themes::theme.videos sub title') !!}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- end ui-title-page -->

    <div class="border_btm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    {!! Breadcrumbs::render('faq') !!}
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb -->


    <!-- end main-content -->
    <div class="section-large">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-6 wow bounceInLeft" data-wow-delay="1s">
                    <h3 class="ui-title-block ui-title-block_small" style="font-size:16px; font-weight:bold;"><span>{{ $post->title }}</span></h3>
                    <p class="ui-text">{!! strip_tags($post->content) !!}</p>
                    <a class="link_on-youtube" href="{{ $post->media }}" rel="prettyPhoto" title="{{ $post->category->title }}">
                        <span class="btn bg-color_second"> <i class="icon icon-camcorder"></i>VİDEO GÖSTERİMİ</span>
                        @if($file = $post->files()->first())
                        <img src="{{ \Imagy::getImage($file->filename, 'homeVideo', ['width' => 570, 'height' => 360, 'mode' => 'fit', 'quality' => 100]) }}" alt="{{ $post->title }}">
                        @endif
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        {!! $posts->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection