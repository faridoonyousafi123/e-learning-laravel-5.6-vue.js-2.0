@component('mail::message')
# This Mail is sent in purpose of confirming your email in our system.

Please confirm your email to access the application.

@component('mail::button', ['url' => route('confirm-email'). '?token=' .$user->confirm_token])
Confirm Your Email
@endcomponent

Thanks,<br>
# {{ config('app.name') }}
@endcomponent
