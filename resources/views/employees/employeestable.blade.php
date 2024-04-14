@extends('layout.header')

@section('main')

<div class="col-sm-9 mx-auto">
    <div class="card mt-4" style="background-color: #e6d1f2; height: 500px;">
        <div class="card-header fw-bold text-secondary">Employee Lists</div>
        <div class="card-body" style="overflow-y: scroll;">
            <table class="table table-hover table-striped mx-auto text-secondary" style="width: 950px; ">
                <thead>
                    <tr>
                      <th class="col-sm-1">EID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th class="col-sm-2 text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $employee->firstname }}</td>
                        <td>{{ $employee->lastname }}</td>
                        <td>{{ $employee->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('edits', $employee->id) }}" class="btn btn-primary">Edit</a> 
        
                            <form method="POST" class="d-inline" action="{{ route('delete', $employee->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </div>
</div>

@endsection