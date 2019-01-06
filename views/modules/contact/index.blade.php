@extends('layouts.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="content-map">
                        @include('contact::map')
                    </div>
                    <i class="decor-brand"></i>
                    <ul class="list-contacts unstyled wow bounceInUp" data-wow-delay=".5s">
                        <li>
                            <i class="icon icon-pointer"></i>
                            {!! setting('theme::address') !!}
                        </li>
                        <li>
                            <i class="icon icon-call-in"></i>
                            <a href="tel:{{ setting('theme::phone') }}" rel="nofollow">{{ setting('theme::phone') }}</a><br>
                            <a href="tel:{{ setting('theme::phone2') }}" rel="nofollow">{{ setting('theme::phone2') }}</a><br/>
                            <a href="tel:{{ setting('theme::mobile') }}" rel="nofollow">{{ setting('theme::mobile') }}</a>
                        </li>
                        <li>
                            <i class="icon icon-envelope-open"></i>
                            <a href="mailto:{{ setting('theme::email') }}" rel="nofollow">{{ setting('theme::email') }}</a> <br>
                            <a href="mailto:bugra.buyrukcu@gmail.com" rel="nofollow">bugra.buyrukcu@gmail.com</a>

                        </li>
                    </ul>
                </div>
            </div><!-- end row -->

            <div class="row wow bounceInUp" data-wow-delay=".5s">
                <div class="col-xs-12">
                    <h2 class="ui-title-block text-center"> <strong>Mesaj</strong> Gönderin</h2>
                    <div class="ui-subtitle-block text-center">Formu doldurarak bize ulaşabilirsiniz</div>
                </div>
            </div><!-- end row -->

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @include('contact::api-form')
                </div>
            </div>

        </div><!-- end container -->
    </section><!-- end section -->


@stop
