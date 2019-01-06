<section>
    <h3 class="widget-title color_second">{{ trans('themes::theme.treatment hours') }}</h3>
    <table class="table-hours table-hours_blog">
        <tbody>
        <tr>
            <td><strong>{{ Carbon::now()->startOfWeek()->formatLocalized('%A') }} - {{ Carbon::now()->startOfWeek()->addDay(4)->formatLocalized('%A') }}</strong></td>
            <td class="text-right">08:00 - 18:00</td>
        </tr>
        <tr>
            <td><strong>{{ Carbon::now()->startOfWeek()->addDay(5)->formatLocalized('%A') }}</strong></td>
            <td class="text-right">09:00 - 17:00</td>
        </tr>
        </tbody>
    </table>
</section>
