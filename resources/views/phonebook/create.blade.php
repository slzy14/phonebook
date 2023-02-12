@extends('phonebook.layout')
@section('content')
<div class="card">
  <div class="card-header">Contacts Page</div>
  <div class="card-body">
      
      <form action="{{ url('phonebook') }}" method="post">
        {!! csrf_field() !!}
        <label>Last Name</label></br>
        <input type="text" name="lastName" id="lastName" class="form-control"></br>
        <label>First Name</label></br>
        <input type="text" name="firstName" id="firstName" class="form-control"></br>
        <label>Middle Name</label></br>
        <input type="text" name="middleName" id="middleName" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contactNumber" id="contactNumber" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop