@component('mail::message')

# Hi {{ $name }},
{{-- # {{ $senderMessage }} --}}
  
  
Receive  your email. I will try quicly answer.
  
@component('mail::button', ['url' => $mailData['url']])
Visit Our Website
@endcomponent
  
Thanks,

{{ config('app.name') }}
@endcomponent
