@component('mail::message')


# Password

Below is your password:

### Your Password:  
**{{ $password }}**
@component('mail::button', ['url' => asset('user-login')])
Login to Your Account
@endcomponent


If you did not request this password reset, please contact our support team immediately.

Thank you,  
**The {{ config('app.name') }} Team**

@endcomponent
