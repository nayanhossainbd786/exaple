@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{url('/home')}}" class="btn btn-danger  mb-3"> Backt</a>
                    <a href="{{url('/contact')}}" class="btn btn-info mb-3"> Add New Contact</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="row">{{$view->id}}</th>
                               
                               
                                
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                               <td>First Name</td>
                                <td>{{$view->firstName}}</td>
                            </tr>

                            <tr>
                               <td>Last Name</td>
                                <td>{{$view->lastName}}</td>
                            </tr>

                            <tr>
                               <td>Email</td>
                                <td>{{$view->email}}</td>
                            </tr>

                            <tr>
                               <td>Date of Birth</td>
                                <td>{{$view->dob}}</td>
                            </tr>

                            <tr>
                               <td>Present Address</td>
                                <td>{{$view->presentAddress}}</td>
                            </tr>

                            <tr>
                               <td>Street One</td>
                                <td>{{$view->streetOne}}</td>
                            </tr>

                            <tr>
                               <td>City One </td>
                                <td>{{$view->cityOne}}</td>
                            </tr>

                            <tr>
                               <td>Zip Code</td>
                                <td>{{$view->zipOne}}</td>
                            </tr>

                            <tr>
                               <td>Country</td>
                                <td>{{$view->countryOne}}</td>
                            </tr>

                            <tr>
                               <td>Permanant Address </td>
                                <td>{{$view->permanantAddress}}</td>
                            </tr>
                            <tr>
                               <td>street Two Adress </td>
                                <td>{{$view->streetTwo}}</td>
                            </tr>
                            
                            <tr>
                               <td>Zip Two </td>
                                <td>{{$view->zipTwo}}</td>
                            </tr>
                            
                            <tr>
                               <td>City Two </td>
                                <td>{{$view->cityTwo}}</td>
                            </tr>
                            
                            <tr>
                               <td>CountryTwo </td>
                                <td>{{$view->countryTwo}}</td>
                            </tr>
                            <tr>
                               <td>Home Phone </td>
                                <td>{{$view->homePhone}}</td>
                            </tr>
                            
                            <tr>
                               <td>Office Phone </td>
                                <td>{{$view->officePhone}}</td>
                            </tr>

                            <tr>
                               <td>Personal Phone </td>
                                <td>{{$view->personalPhone}}</td>
                            </tr>                            


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
