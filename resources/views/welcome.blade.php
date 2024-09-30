@extends('layout')

@section('page-content')
    <br>

    <h1 class="text-center text-primary">Welcome to Employee Information System</h1>
    <button class="btn btn-primary"><a href={{ route('add') }} class="text-white">Add Employee</a></button>
    
    <div class="container mt-4">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Job Title</th>
                    <th>Joining Date</th>
                    <th>Salary</th>
                    <th>Mobile No</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->job_title }}</td>
                        <td>{{ $item->joining_date }}</td>
                        <td>${{ $item->salary }}</td>
                        <td>{{ $item->mobile_no }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <form action={{ route('delete', $item->id) }} method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger w-100">
                            </form>
                            <button class="btn btn-primary w-100"><a href={{ route('editPage', $item->id) }} class="text-white">Edit</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="d-flex justify-content-center">
            {{ $employees->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
