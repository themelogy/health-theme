@extends('layouts.master')

@section('content')
    <div class="ui-title-page bg_title_detoks bg_transparent">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>{{ trans('mediapress::mediapress.title.mediapress') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="border_btm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    {!! Breadcrumbs::renderIfExists('mediapress.index') !!}
                </div>
            </div>
        </div>
    </div>
    <main class="main-content">
        <section class="section" style="padding: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row row-height">
                            @foreach($medias as $media)
                                <div class="col-sm-3">
                                    <div class="services__item">
                                        <a class="example-image-link" href="{{ $media->present()->firstImage(null,780,'resize',80) }}" data-lightbox="example-set" data-title="{{ $media->title }}"><img class="example-image" src="{{ $media->present()->firstImage(null,400,'resize',80) }}" alt="{{ $media->title }}"/></a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-12">
                                <div class="text-center">
                                    {!! $medias->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    {!! Theme::script('js/lightbox.min.js') !!}
@endpush

@push('styles')
    {!! Theme::style('css/lightbox.min.css') !!}
@endpush
