@component('mail::message')
  # Name: {{ $name }}
 # Email: {{ $email }}<br>
 Subject: {{ $sub }} <br><br>
 Message:<br> {{ $mess }}
  

  
{{-- @component('mail::button', '$url')
Visit Our Website
@endcomponent --}}
  
Thanks,

{{ config('app.name') }}
@endcomponent
