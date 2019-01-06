<div class="form-wrapper" id="contact_form">
    <div class="alert alert-success" role="alert" v-show="success">
        @{{ successMessage }}
    </div>

    {!! Form::open(['v-on:submit'=>'submitForm', 'class' => 'ui-form', 'method'=>'post', 'v-show'=>'!success']) !!}
    {!! Form::hidden('from', Request::path()) !!}
    <div class="row">
        <div class="col-sm-6 col-12">
            <input type="text" name="first_name" class="form-control" placeholder="{{ trans('contact::contacts.form.first_name') }}" v-model="input.first_name" :class="{ 'is-invalid' : hasError('first_name') }" />
            <div v-for="error in errors.first_name" class="invalid-feedback">@{{ error }}</div>
        </div>
        <div class="col-sm-6 col-12">
            <input type="text" name="last_name" class="form-control" placeholder="{{ trans('contact::contacts.form.last_name') }}" v-model="input.last_name" :class="{ 'is-invalid' : hasError('last_name') }"/>
            <div v-for="error in errors.last_name" class="invalid-feedback">@{{ error }}</div>
        </div>
        <div class="col-sm-6 col-12">
            <input type="text" name="phone" class="form-control" placeholder="{{ trans('contact::contacts.form.phone') }}" v-model="input.phone" :class="{ 'is-invalid' : hasError('phone') }"/>
            <div v-for="error in errors.phone" class="invalid-feedback">@{{ error }}</div>
        </div>
        <div class="col-sm-6 col-12">
            <input type="text" name="email" class="form-control" placeholder="{{ trans('contact::contacts.form.email') }}" v-model="input.email" :class="{ 'is-invalid' : hasError('email') }"/>
            <div v-for="error in errors.email" class="invalid-feedback">@{{ error }}</div>
        </div>
        <div class="col-md-12">
            <textarea name="enquiry" class="form-control" placeholder="{{ trans('contact::contacts.form.enquiry') }}" rows="3" v-model="input.enquiry" :class="{ 'is-invalid' : hasError('enquiry') }"></textarea>
            <div v-for="error in errors.enquiry" class="invalid-feedback">@{{ error }}</div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-6">
            {!! Captcha::image('captcha_contact') !!}
            <div class="invalid-feedback" style="display: block !important;" v-if="hasError('captcha_contact')">@{{ getError('captcha_contact') }}</div>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn bg-color_second color_white pull-right" style="margin-top: 10px;">{{ trans('global.buttons.send') }}</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@push('scripts')
    <script src="{!! Module::asset('contact:js/vue/vue.min.js') !!}"></script>
    <script src="{!! Module::asset('contact:js/vue/axios.min.js') !!}"></script>
    <script src="{!! Module::asset('contact:js/vue/loadingoverlay.min.js') !!}"></script>
@endpush

@push('js-inline')
    <script>
        window.axios.defaults.headers.common['X-CSRF-TOKEN']     = '{{ csrf_token() }}';
        window.axios.defaults.headers.common['Cache-Control']    = 'no-cache';
        new Vue({
            el: '#contact_form',
            data: {
                input: {
                    first_name: '',
                    last_name: '',
                    phone: '',
                    email:'',
                    enquiry: '',
                    captcha_contact: ''
                },
                errors: {},
                success: false,
                successMessage: ''
            },
            methods: {
                submitForm: function (e) {
                    e.preventDefault();
                    this.success = false;
                    this.input.captcha_contact = grecaptcha.getResponse(captcha_contact);
                    this.ajaxStart(true);
                    axios.post('{{ route('api.contact.send') }}', this.$data.input)
                        .then(response => {
                            this.successMessage = response.data.message;
                            this.success = true;
                            this.resetForm();
                            this.ajaxStart(false);
                        })
                        .catch(error => {
                            this.errors = error.response.data;
                            this.success = false;
                            this.ajaxStart(false);
                            grecaptcha.reset(captcha_contact);
                        });
                },
                getError: function (field) {
                    if(this.errors[field]) {
                        return this.errors[field][0];
                    }
                },
                hasError: function (field) {
                    if(this.errors[field]) {
                        return true;
                    }
                    return false;
                },
                resetForm: function () {
                    var self = this;
                    Object.keys(this.$data.input).forEach(function(key, index){
                        self.$data.input[key] = '';
                    });
                },
                ajaxStart: function (loading) {
                    if (loading) {
                        $('form', this.$el).LoadingOverlay("show",{
                            zIndex: 9999
                        });
                    } else {
                        $('form', this.$el).LoadingOverlay("hide",{
                            zIndex: 9999
                        });
                    }
                }
            }
        });
    </script>
    <style>
        .is-invalid {
            border-bottom: 1px solid darkred !important;
        }
        .form-wrapper {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 20px;
        }
        .form-wrapper input, .form-wrapper textarea {
            background-color: #ffffff;
            color: darkgray !important;
        }
    </style>
    {!! Captcha::setLang(LaravelLocalization::getCurrentLocale())->scriptWithCallback(['appointment', 'captcha_contact']) !!}
@endpush
