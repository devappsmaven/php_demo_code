@component('mail::message')
# Hi {{$data['firstname']}},

Your Update Password Requet is Acccepted.
Your New Password is : 
# {{$data['new_password']}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
