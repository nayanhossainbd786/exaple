@extends('layouts.app')
@section('content')


<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto">
        <a href="{{url('/home')}}" class="btn btn-info mb-3">Back To Home</a>
        <h5> Add Your Contact</h5>
            <form action="{{url('contact/update/'.$edit->id)}}" method="post">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="firstName" class="form-control" value="{{$edit->firstName}}" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="First Name ">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="lastName" value="{{$edit->lastName}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Last Name">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email"name="email" class="form-control" value="{{$edit->email}}" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date Of Birth</label>
                            <input type="text" name="dob"value="{{$edit->dob}}" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="dob">

                        </div>
                    </div>
                    <h6> Present Address</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Address</label>
                                <select name='presentAddress' class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Home</option>
                                    <option value="2">Office</option>
                                    <option value="3">Resourt</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Street </label>
                                <input type="text" name="streetOne"value="{{$edit->streetOne}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Street Name">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">City </label>
                                <input type="text"name="cityOne"value="{{$edit->cityOne}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter City">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ZIP /PO</label>
                                <input type="text"name="zipOne" value="{{$edit->zipOne}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="zip">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country </label>
                                <input type="text" name="countryOne" value="{{$edit->countryOne}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Your Country">

                            </div>
                        </div>

                    </div>
                    <h6> Permanent Address</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Address</label>
                                <select name="permanantAddress" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Home</option>
                                    <option value="2">Office</option>
                                    <option value="3">Resourt</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Street </label>
                                <input type="text" name="streetTwo" value="{{$edit->streetTwo}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Street Name">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">City </label>
                                <input type="text" name="cityTwo" value="{{$edit->cityTwo}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter City">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ZIP /PO</label>
                                <input type="text" name="zipTwo"value="{{$edit->zipTwo}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="zip">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country </label>
                                <input type="text" name="countryTwo"value="{{$edit->countryTwo}}" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Your Country">

                            </div>
                        </div>

                    </div>
                    <h3>Phone Number</h3>
                    <div class="row">
                    <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Home </label>
                                    <input type="text" name="homePhone" value="{{$edit->homePhone}}" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Home Number">

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Office </label>
                                    <input type="text" name="officePhone"value="{{$edit->officePhone}}" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Number">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Personal</label>
                                    <input type="text"name="personalPhone" value="{{$edit->personalPhone}}" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Personal  namuber">

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
            </form>

        </div>
    </div>
</div>
</div>
@endsection