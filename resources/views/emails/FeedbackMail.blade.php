@component('mail::message')<br>
<b>Name</b> {{$data['name']}}<br>
<b>Email</b> {{$data['email']}}<br>
<b>Phone</b> {{$data['phone_number']}}<br>
<b>Message</b> {{$data['message']}}<br>


@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply to {{$data['name']}}
@endcomponent


@endcomponent
