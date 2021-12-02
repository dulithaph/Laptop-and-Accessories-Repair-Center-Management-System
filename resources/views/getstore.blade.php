@extends('layouts.myapp')

@section('content')

<div class="col-md-12 sm-12 mt-3 ">
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                

                   <div><hr> <p><h6><b>Search Orders Easy,Go To   </b><a class="btn btn-secondary btn-sm" href="{{route('getdata')}}">More option</a></h6></p><hr>
                   </div>

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">number</th>
                            <th scope="col">email</th>
                            <th scope="col">item</th>
                            <th scope="col">itemCode</th>
                            <th scope="col">status</th>
                            <th scope="col">Date</th>
                            <th scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                         
                            @foreach ($stores as $store)
                            <tr>
                                <td>{{$store->csname}}</td>
                                <td>{{$store->contactNo}}</td>
                                <td>{{$store->email}}</td>
                                <td>{{$store->item}}</td>
                                <td>{{$store->itemCode}}</td>
                                <td>{{$store->status}}</td>
                                <td>{{$store->created_at}}</td>
                                <td> <a href="click_edit/{{$store->id}}"  class="btn btn-success">Edit</a></td>
                            </tr>
                            @endforeach
                            
                          
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection