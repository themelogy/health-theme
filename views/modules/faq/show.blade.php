@extends('layouts.master')

@section('content')
    <div class="ui-title-page bg_title_medya bg_transparent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>{!! trans('themes::theme.videos title') !!}</h1>
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
                    {!! Breadcrumbs::render('faq.slug', $faq) !!}
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb -->


    <!-- end main-content -->
    <div class="section-large">
        <div class="container">
            <div class="row">

                <div class="col-md-6 wow bounceInLeft" data-wow-delay="1s">
                    <h2 class="ui-title-block ui-title-block_small"><span>{{ $faq->title }}</span></h2>
                    <p class="ui-text">{!! strip_tags($faq->content) !!}</p>
                    <a class="link_on-youtube" href="{{ $faq->media }}" rel="prettyPhoto" title="{{ $faq->category->title }}">
                        <span class="btn bg-color_second"> <i class="icon icon-camcorder"></i>VİDEO GÖSTERİMİ</span>
                        @if($file = $faq->files()->first())
                        <img src="{{ \Imagy::getImage($file->filename, 'homeVideo', ['width' => 570, 'height' => 360, 'mode' => 'fit', 'quality' => 100]) }}" alt="{{ $faq->title }}">
                        @endif
                    </a>
                </div>

            </div>

        </div>
    </div>
@endsection