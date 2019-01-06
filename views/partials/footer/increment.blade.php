<div class="banner bg bg_3 bg_transparent wow zoomIn" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="list-progress">
                    {!! app(\App\Patient::class)->checkIncrement() !!}
                    @if($patient = app(\App\Patient::class)->first())
                    <li><span class="icon-round icon-round_small bg-color_second helper"><i class="icon fa fa-user-md"></i></span>
                        <div class="info"><span class="chart" data-percent="{!! $patient->patient !!}"> <span class="percent"></span> </span> <span class="label-chart">{{ trans('themes::theme.patient care') }}</span></div>
                    </li>
                    <li><span class="icon-round icon-round_small bg-color_second helper"><i class="icon fa fa-reddit-square"></i></span>
                        <div class="info"><span class="chart" data-percent="{!! $patient->tube_baby !!}"> <span class="percent"></span> </span> <span class="label-chart">{{ trans('themes::theme.tube baby') }}</span></div>
                    </li>
                    <li><span class="icon-round icon-round_small bg-color_second helper"><i class="icon fa fa-akupunktur"></i></span>
                        <div class="info"><span class="chart" data-percent="{!! $patient->acupuncture !!}"> <span class="percent"></span> </span> <span class="label-chart">{{ trans('themes::theme.acupuncture care') }}</span></div>
                    </li>
                    <li><span class="icon-round icon-round_small bg-color_second helper"><i class="icon fa fa-tachometer"></i></span>
                        <div class="info"><span class="chart" data-percent="{!! $patient->slimming !!}"> <span class="percent"></span> </span> <span class="label-chart">{{ trans('themes::theme.slimming support') }}</span></div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end banner -->