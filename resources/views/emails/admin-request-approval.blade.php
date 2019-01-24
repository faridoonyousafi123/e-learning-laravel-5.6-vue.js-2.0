@component('mail::message')
# Dear {{$user->name}}

Your Request for Administrator Privilage has been approved.


Thanks,<br>
 <img src="https://i.ibb.co/6RNHh8m/logo-black.png" width="150px" height="150px"> 
{{-- # {{ config('app.name') }} --}}

@endcomponent
