@extends('layout.main')

@section('content')

<div class="container">
<br><br>
<h2>Your feedback was successfully send.</h2>
<br><br>
<form action="/returntohomepage" method="post">
{{ csrf_field() }}
&nbsp; &nbsp;&nbsp; &nbsp;
<input type="submit" class="btn btn-dark" value="Back to home"/> &nbsp; &nbsp;&nbsp; &nbsp;
<a href="/myfeedbacks" class="btn btn-dark">Check my feedbacks</a>
</form>
</div>

@endsection