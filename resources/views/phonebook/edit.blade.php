@extends('phonebook.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Contact</div>
  <div class="card-body">
      
      <form action="{{ url('phonebook/' .$phonebook->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$phonebook->id}}" id="id" />
        <label>Last Name</label></br>
        <input type="text" name="lastName" id="lastName" value="{{$phonebook->lastName}}" class="form-control"></br>
        <label>First Name</label></br>
        <input type="text" name="firstName" id="firstName" value="{{$phonebook->firstName}}" class="form-control"></br>
        <label>Middle Name</label></br>
        <input type="text" name="middleName" id="middleName" value="{{$phonebook->middleName}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$phonebook->address}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$phonebook->email}}" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contactNumber" id="contactNumber" value="{{$phonebook->contactNumber}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop