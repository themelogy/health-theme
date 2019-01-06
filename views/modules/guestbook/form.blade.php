@extends('layouts.master')

@section('content')

    @component('partials.components.title', [
'breadcrumb' => 'guestbook.form'
])
        <h1>{{ trans('themes::guestbook.form') }}</h1>
    @endcomponent

    <main class="main-content">
        <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    {!! Form::open(['@submit.prevent'=>'submitForm', 'route' => 'guestbook.comment.add', 'files'=>true, 'method'=>'post', 'id'=>'guestbook']) !!}
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group" :class="{ 'has-error' : formErrors.first_name }">
                                {!! Form::text('first_name', old('first_name'), ['class'=>'form-control', 'placeholder' => trans('guestbook::comments.form.first_name'), 'v-model'=>'formInputs.first_name', 'v-if'=>'!formInputs.first_nmae']) !!}
                                <span v-for="error in formErrors.first_name" class="help-block validMessage">@{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group" :class="{ 'has-error' : formErrors.last_name }">
                                {!! Form::text('last_name', old('last_name'), ['class'=>'form-control', 'placeholder' => trans('guestbook::comments.form.last_name'), 'v-model'=>'formInputs.last_name']) !!}
                                <span v-for="error in formErrors.last_name" class="help-block validMessage">@{{ error }}</span>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group" :class="{ 'has-error' : formErrors.phone }">
                                {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder' => trans('guestbook::comments.form.phone'), 'v-model'=>'formInputs.phone']) !!}
                                <span v-for="error in formErrors.phone" class="help-block validMessage">@{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group" :class="{ 'has-error' : formErrors.email }">
                                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder' => trans('guestbook::comments.form.email'),'v-model'=>'formInputs.email']) !!}
                                <span v-for="error in formErrors.email" class="help-block validMessage">@{{ error }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" :class="{ 'has-error' : formErrors.subject }">
                                {!! Form::text('subject', old('subject'), ['class'=>'form-control', 'placeholder' => trans('guestbook::comments.form.subject'),'v-model'=>'formInputs.subject']) !!}
                                <span v-for="error in formErrors.subject" class="help-block validMessage">@{{ error }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" :class="{ 'has-error' : formErrors.message }">
                                {!! Form::textarea('message',old('message'),['placeholder' => trans('guestbook::comments.form.message'), 'v-model'=>'formInputs.message', 'class'=>'form-control']) !!}
                                <span v-for="error in formErrors.message" class="help-block validMessage">@{{ error }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <div class="form-group" :class="{ 'has-error' : formErrors.captcha_guestbook }">
                                {!! Captcha::image('captcha_guestbook', ['v-model'=>'formInputs.captcha_guestbook']) !!}
                                <span v-for="error in formErrors.captcha_guestbook" class="help-block validMessage">@{{ error }}</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="fileinput fileinput-new pull-right" data-provides="fileinput" :class="{ 'has-error' : formErrors.attachment }">
                                <span class="btn btn-default btn-file"><span>{{ trans('guestbook::comments.form.attachment') }}</span>
                                    <input type="file" name="attachment" v-on:change="onFileChange"/>
                                </span>
                                <span class="fileinput-filename"></span><span class="fileinput-new">{{ trans('guestbook::comments.messages.file not selected') }}</span>
                                <span v-for="error in formErrors.attachment" class="help-block validMessage">@{{ error }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            {!! Form::submit(trans('global.buttons.send'), ['class'=>'btn bg-color_second color_white']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
    </main>
@endsection

@push('js-inline')
<script src="{{ Module::asset('guestbook:js/vue.min.js') }}"></script>
<script src="{{ Module::asset('guestbook:js/vue-resource.min.js') }}"></script>
<link rel="stylesheet" href="{!! Module::asset('guestbook:vendor/pnotify/pnotify.css') !!}">
<script src="{{ Module::asset('guestbook:vendor/pnotify/pnotify.js') }}"></script>
<link rel="stylesheet" href="{!! Module::asset('guestbook:vendor/jasny-bootstrap/css/jasny-bootstrap.min.css') !!}">
<script src="{!! Module::asset('guestbook:vendor/jasny-bootstrap/js/jasny-bootstrap.min.js') !!}"></script>
<script src="{!! Module::asset('guestbook:vendor/jquery-loadingoverlay/loadingoverlay.min.js') !!}"></script>
<script src="{!! Module::asset('guestbook:vendor/jquery-loadingoverlay/loadingoverlay_progress.min.js') !!}"></script>
<script src="{!! Module::asset('guestbook:js/guestbook.js') !!}"></script>
{!! Captcha::setLang(locale())->scriptWithCallback(['captcha_guestbook', 'captcha_ask', 'captcha_contact']) !!}
@endpush
