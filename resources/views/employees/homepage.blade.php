@extends('layout.header')

@section('main')

<div class="row">
    <div class="col-auto mt-5 ms-3">
        <h1 class="fw-bold mt-5 pt-5" style="color: #4b0082;">Employee management made simple.</h1>
        <p class="text-primary fw-bold h5">Login to use EmployeesList employee management system.</p>
        <a class="btn text-white mt-3 px-4" href="{{ route('add') }}" style="background-color: #4b0082;">Add Employee</a>
    </div>
    <div class="col-sm-4 mt-5">
        <img style="width: 450px;" src="https://cdn.pixabay.com/photo/2020/08/28/00/00/people-5523172_640.png" alt="People">
    </div>
</div>

@endsection