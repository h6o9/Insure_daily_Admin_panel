@component('mail::message')


# Reset Your Password

We received a request to reset your password for your account. If you made this request, click the button below to reset your password.  

@component('mail::button', ['url' => $detail['url'], 'color' => 'primary'])
Reset Password
@endcomponent

If you did not request a password reset, please ignore this email or contact support if you have concerns.

Thank you,  
**The {{ config('app.name') }} Team**

@endcomponent
