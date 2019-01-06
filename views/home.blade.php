@extends('layouts.master')

@section('content')

    @include('partials/pages/home/slider')

    @pageFindByOptions('settings->show_page_home', 'services')

    @include('partials/pages/home/appointment')

    @blogLatestPosts(8, 'home.latest')

    {{--@instagramPosts('bugrabuyrukcu', 3600, 12)--}}

    @include('partials/pages/home/banner-contact')

    {{--@include('partials/pages/home/video-article')--}}

    @include('partials/pages/home/newsletter')

    {{--@include('partials/pages/home/reviews')--}}

@endsection

