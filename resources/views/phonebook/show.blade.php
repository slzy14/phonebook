@extends('phonebook.layout')
@section('content')
<div class="card">
  <div class="card-header">Contacts</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Last Name : {{ $phonebook->lastName }}</h5>
        <h5 class="card-title">First Name : {{ $phonebook->firstName }}</h5>
        <h5 class="card-title">Middle Name : {{ $phonebook->middleName }}</h5>
        <p class="card-text">Address : {{ $phonebook->address }}</p>
        <h5 class="card-title">Email : {{ $phonebook->email }}</h5>
        <p class="card-text">Contact Number : {{ $phonebook->contactNumber }}</p>
  </div>
      
    </hr>
  
  </div>
</div>