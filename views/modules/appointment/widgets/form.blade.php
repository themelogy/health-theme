<div class="modal fade appointment-book-modal-sm" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route' => ['api.appointment.create'], 'method' => 'post', 'class'=>'appointment-form']) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">{{ trans('appointment::appointments.form.title') }}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="datepicker" type="text" class="form-control pull-right" id="datepicker" value="{{ Carbon::now()->format('Y-m-d') }}" />
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input name="timepicker" id="timepicker" type="text" class="form-control input-small">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class='form-group{{ $errors->has("first_name") ? ' has-error' : '' }}'>
                            {!! Form::label("first_name", trans('appointment::appointments.form.first_name')) !!}
                            {!! Form::text("first_name", old("first_name"), ['class' => 'form-control', 'placeholder' => trans('appointment::appointments.form.first_name')]) !!}
                            {!! $errors->first("first_name", '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class='form-group{{ $errors->has("last_name") ? ' has-error' : '' }}'>
                            {!! Form::label("last_name", trans('appointment::appointments.form.last_name')) !!}
                            {!! Form::text("last_name", old("first_name"), ['class' => 'form-control', 'placeholder' => trans('appointment::appointments.form.last_name')]) !!}
                            {!! $errors->first("last_name", '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class='form-group{{ $errors->has("email") ? ' has-error' : '' }}'>
                            {!! Form::label("email", trans('appointment::appointments.form.email')) !!}
                            {!! Form::text("email", old("first_name"), ['class' => 'form-control', 'placeholder' => trans('appointment::appointments.form.email')]) !!}
                            {!! $errors->first("email", '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class='form-group{{ $errors->has("phone") ? ' has-error' : '' }}'>
                            {!! Form::label("phone", trans('appointment::appointments.form.phone')) !!}
                            {!! Form::text("phone", old("phone"), ['class' => 'form-control', 'placeholder' => trans('appointment::appointments.form.phone')]) !!}
                            {!! $errors->first("phone", '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::label("message", trans('appointment::appointments.form.message')) !!}
                        {!! Form::textarea("message", old("message"), ['class' => 'form-control', 'placeholder' => trans('appointment::appointments.form.message')]) !!}
                        {!! $errors->first("message", '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @if ($errors->has('g-recaptcha-response')) has-error @endif">
                            {!! Captcha::display('appointment') !!}
                            <span class="help-block g-recaptcha-error" style="color:red;">{!! $errors->first('g-recaptcha-response') !!}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-red" data-dismiss="modal">{{ trans('appointment::appointments.form.cancel') }}</button>
                <button type="submit" class="btn bg-color_second color_white">{{ trans('appointment::appointments.form.save') }}</button>
            </div>
            {!! Form::close() !!}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade appointment-success-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">{{ trans('appointment::appointments.form.title') }}</h4>
            </div>
            <div class="modal-body">
                {{ trans('appointment::appointments.messages.success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-red" data-dismiss="modal">{{ trans('appointment::appointments.form.close') }}</button>
            </div>
        </div>
    </div>
</div>


@push('scripts')
{!! Theme::style('css/bootstrap-datepicker.css') !!}
{!! Theme::style('css/bootstrap-timepicker.css') !!}
{!! Theme::script('js/bootstrap-datepicker.js') !!}
{!! Theme::script('js/bootstrap-datepicker.tr.js') !!}
{!! Theme::script('js/bootstrap-timepicker.js') !!}
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
{!! Captcha::scriptWithCallback(['appointment','contact']) !!}
<script>

        var appointmentServer = (function(){

            var postUrl = '{{ route('api.appointment.create') }}';

            $(document).ajaxError(function(event, xhr) {
                console.log(xhr);
            });

            var saveAppointment = function(appointment) {
                return $.ajax(postUrl, {
                    type : "POST",
                    data : appointment,
                    cache: false
                });
            };

            return {
                saveAppointment : saveAppointment
            };

        }());

        (function () {

            $('.appointment-book-btn').on('click', function () {
                $('.appointment-book-modal-sm').modal('show');
                $('.appointment-form input').parent().removeClass('has-error');
                var date = new Date();
                date.setDate(date.getDate()-1);

                //Date picker
                $('#datepicker').datepicker({
                    startDate: date,
                    format: "yyyy-mm-dd",
                    daysOfWeekDisabled: "7",
                    autoclose: true,
                    language: "{{ locale() }}"
                });

                //Timepicker
                $("#timepicker").timepicker({
                    showMeridian: false
                });

                $("#timepicker").on("focus", function() {
                    return $(this).timepicker("showWidget");
                });

				grecaptcha.reset();
            });

            $('.appointment-form').submit(function(e) {
                e.preventDefault();
                appointmentServer.saveAppointment($(this).serialize()).done(function (response) {
                    if(response.success == true) {
                        $('.appointment-form').trigger('reset');
                        $('.appointment-book-modal-sm').modal('hide');
                        $('.appointment-success-modal-sm').modal('show');
                    }
                }).error(function(xhr, status, response){
                    var error = jQuery.parseJSON(xhr.responseText);
                    $.each(error.messages, function(key, value){
                        if(key=='g-recaptcha-response') {
                            $('.g-recaptcha-error').html(value);
                        } else {
                            $('.appointment-form input[name='+key+']').parent().addClass('has-error');
                        }
                    });
                });
            });

        })(jQuery);
</script>
@endpush


@push('styles')
<style>
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: #000000;
    }
    .form-control {
        border: 1px solid #ececec;
    }
</style>
@endpush
