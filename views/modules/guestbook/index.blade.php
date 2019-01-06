@extends('layouts.master')

@section('content')
    @component('partials.components.title', [
'breadcrumb' => 'guestbook.index'
])
        <h1>{{ trans('themes::guestbook.title') }}</h1>
    @endcomponent
    <main class="main-content">
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header grey">
                        {{ trans('themes::guestbook.leave comment') }}
                    </h2>
                    <p>
                        {{ trans('themes::guestbook.leave comment description') }}
                    </p>
                    <p>
                        <a href="{{ route('guestbook.comment.form') }}" class="btn bg-color_second color_white">{{ trans('themes::guestbook.leave a comment') }}</a>
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="ls ms section_padding_top_30 section_padding_bottom_50">
        <div class="container">
            <div class="masonry">
                @foreach($reviews as $review)
                <div class="item" style="display: inline-flex !important;">
                    <blockquote style="font-size: 12px; line-height: 14px;">
                        {{ $review->message }}
                        <div class="media">
                            <div class="media-body grey">
                                <h5 class="media-heading">{{ $review->fullname }}</h5>
                            </div>
                        </div>
                    </blockquote>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    {!! $reviews->render() !!}
                </div>
            </div>
        </div>
    </section>
    </main>
@endsection

@push('css_inline')
<style>
    .masonry { /* Masonry container */
        column-count: 4;
        column-gap: 1em;
    }

    .item { /* Masonry bricks or child elements */
        background-color: #eee;
        display: inline-block;
        margin: 0 0 1em;
        width: 100%;
        padding: 15px;
    }
</style>
@endpush
