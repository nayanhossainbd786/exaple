@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                <a href="{{url('/contact')}}" class="btn btn-info mb-3"> Add New Contact</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last  Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <th scope="row">{{$contact->id}}</th>
                                <td>{{$contact->firstName}}</td>
                                <td>{{$contact->lastName}}</td>
                                <td>{{$contact->email}}</td>
                                <td> <a class="btn btn-info" href="{{url('contact/edit/'.$contact->id)}}">Edit </a> |
                                <a class="btn btn-danger" href="{{url('contact/delete/'.$contact->id)}}" onclick="alert('Are you sure ?')">Delete</a>|
                                <a class="btn btn-success" href="{{url('contact/view/'.$contact->id)}}"> View</a>
                                </td>
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
