@component('mail::message')
# Hello

You are invited to join AUCA alumni members platform, you click the link below to join us.

@component('mail::button', ['url' => $url])
Join Us
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
