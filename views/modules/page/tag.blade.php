@extends('layouts.master')

@section('content')
    @component('partials.components.title', [
    'breadcrumb' => 'page.tag'
    ])
        <h1>{{ trans('themes::tags.tag', ['tag'=>$tag->name]) }}</h1>
    @endcomponent

    <main class="main-content">
        <section class="section wow fadeInUp" data-wow-delay="1.5s" style="padding: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($pages as $page)
                            <div class="col-sm-4">
                                <div class="services__item wow bounceInRight" data-wow-delay="1s">
                                    @if($image = $page->present()->firstImage(370,370,'fit',80))
                                        <div class="service__figure">
                                            <div class="hover__figure"><img src="{{ $image }}" height="300" width="370" alt="{{ $page->title }}"></div>
                                            <span class="icon-round icon-round_small helper"><i class="{{ $page->settings->icon ?? '' }}"></i></span>
                                        </div>
                                    @endif
                                    <h3 class="ui-title-inner">{{ $page->title }}</h3>
                                    <div class="ui-text">{{ strip_tags(\Illuminate\Support\Str::words($page->body, 30)) }}</div>
                                    <a class="btn btn_small" href="{{ $page->url }}">{{ trans('global.buttons.read more') }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- end main-content -->

@endsection
