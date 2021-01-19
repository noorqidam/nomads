@component('mail::message')
# Activation Email

Hi {{$user->name}}

Berikut Kode OTP Anda <b>{{ $user->token_activation}}</b><br>
Silahkan Masukan kode OTP tersebut untuk verifikasi
akun anda.


Thanks,<br>
Official Nomads
@endcomponent
