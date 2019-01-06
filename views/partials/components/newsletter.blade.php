<section class="subscribe bg bg_8 bg_transparent color_white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="subscribe__inner clearfix">
                    <div class="pull-left">
                        <h2 class="subscribe__title">{{ trans('themes::theme.newsletter title') }}</h2>
                        <p class="subscribe__text">{{ trans('themes::theme.newsletter sub title') }}</p>
                    </div>
                    <div class="pull-right" id="newsletter">
                        {!! Form::open(['v-on:submit'=>'subscribe', 'method'=>'post', 'class'=>'form-inline']) !!}
                            <div class="form-group">
                                <input placeholder="{{ trans('themes::theme.newsletter.email') }}" type="text" name="email" v-bind:class="errors.email ? 'has-error' : ''" class="form-control input-text required email" v-model="email">
                                <span v-if="errors.email" class="help-block has-error">@{{ errors.email[0] }}</span>
                                <span v-if="errors.EMAIL" class="help-block has-error">@{{ errors.EMAIL[0] }}</span>
                                <button class="btn bg-color_primary">GÖNDER</button>
                            </div>
                        {!! Form::close() !!}
                        <p class="subscribe__note">{{ trans('themes::theme.newsletter privacy') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end subscribe -->

@push('js-inline')
    <script src="{!! Module::asset('contact:js/vue/vue.min.js') !!}"></script>
    <script src="{!! Module::asset('contact:js/vue/axios.min.js') !!}"></script>
    <script>
        @if(App::environment()=='local')
            Vue.config.devtools = true;
        @endif
            window.axios.defaults.headers.common['X-CSRF-TOKEN']     = '{{ csrf_token() }}';
        window.axios.defaults.headers.common['Cache-Control']        = 'no-cache';
        new Vue({
            el: '#newsletter',
            data: {
                route: '{{ route('api.newsletter.subscribe') }}',
                email: '',
                errors: {}
            },
            methods: {
                subscribe: function(e) {
                    e.preventDefault();
                    axios.post(this.route, this.$data)
                        .then(response => {
                            if(response.data.status === true) {
                                alert(response.data.message);
                            }
                        })
                        .catch(error => {
                            this.errors = error.response.data;
                            if(error.response.data.status === false) {
                                alert(response.data.message);
                            }
                        });
                }
            }
        });
    </script>
@endpush
@push('css_inline')
    <style>
        .has-error {
            border-color: red !important;
            color: red !important;
        }
        .has-error::placeholder {
            color: red !important;
        }
    </style>
@endpush
