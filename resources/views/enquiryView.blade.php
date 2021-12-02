<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Customer Feedbacks</title>
</head>
<body>
    <div class="container">
    <div class="jumbotron">
    <h1>Feedbacks</h1>
    <hr>
    <form action="">
    <table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email Address</th>
    <th>Phone Number</th>
    <th>Feedback</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($customer as $row)
    <tr style="background:white;">
    <td>{{$row->id}}</td>
    <td>{{$row->name}}</td>
    <td>{{$row->email}}</td>
    <td>{{$row->phone_number}}</td>
    <td>{{$row->message}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </form>
    </div>
    <form action="/returntohomepage" method="post">
{{ csrf_field() }}

<input type="submit" class="btn btn-dark" value="Home Page"/>

</form>
    </div>
</body>
</html>