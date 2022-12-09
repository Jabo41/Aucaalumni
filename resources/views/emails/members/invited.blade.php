@component('mail::message')
# Hello

{{$user->name}} invites you to join AUCA alumni community , click to the link below to join.

@component('mail::button', ['url' => $url])
Click Here
@endcomponent
In case you are having trouble clicking the link you can copy and paste this link in the browser. {{ $url }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
