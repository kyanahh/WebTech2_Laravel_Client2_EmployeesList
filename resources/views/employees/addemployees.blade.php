@extends('layout.header')

@section('main')

<div class="col-sm-4 mt-5 pt-5 mx-auto">
    <div class="card shadow" style="background-color: #e6d1f2;">
        <div class="card-header fw-bold text-secondary">Add Employees</div>
        <div class="card-body">
            <form action="{{ route('storage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($message = Session::get('success'))
                            <div class="alert alert-success alert block">
                                <strong>{{ $message }}</strong>
                            </div>
                    @endif
                <div class="mt-3">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="{{ old('firstname') }}" required autofocus/>
                    @if($errors->has('firstname'))
                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>
                <div class="mt-3">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required />
                    @if($errors->has('lastname'))
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>
                <div class="mt-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required/>
                    @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary px-4 mt-2 mb-3 fw-bold form-control" style="background-color: #4b0082;">Add Employee</button>
                </div>
                </form>
            </div>
    </div>
</div>

@endsection