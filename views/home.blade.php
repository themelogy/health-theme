@extends('layouts.master')

@section('content')

    @themeSlide('anasayfa','slide')

    @pageFindByOptions('settings->show_page_home', 'services')

    @include('appointment::widgets.home.appointment')

    @blogLatestPosts(8, 'home.latest')

    {{--@instagramPosts('bugrabuyrukcu', 3600, 12)--}}

    @include('contact::widgets.home.call')

    @include('partials/pages/home/video-article')

    @include('partials.components.newsletter')

    @guestbookLatest(6, 'reviews')

@endsection

