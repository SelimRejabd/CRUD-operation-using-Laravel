@extends('layout')

@section('page-content')
    <legend>Create Book</legend>
    <form method="post" action={{ route('addEmployee') }}>
        @csrf
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="name" name="name"
                       placeholder="Name">
                <div class="invalid-feedback">{{$errors->first('name')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="job_title" class="col-sm-2 control-label">Job Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="job_title" name="job_title"
                       placeholder="Job Title">
                <div class="invalid-feedback">{{$errors->first('job_title')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="joining_date" class="col-sm-2 control-label">Joining Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="Joining_date" name="joining_date"
                       placeholder="YYYY-MM-DD">
                <div class="invalid-feedback">{{$errors->first('joining_date')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="salary" class="col-sm-2 control-label">Salary</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="salary" name="salary"
                       placeholder="Salary">
                <div class="invalid-feedback">{{$errors->first('salary')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="email" name="email"
                       placeholder="Email">
                <div class="invalid-feedback">{{$errors->first('email')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="mobile_no" name="mobile_no"
                       placeholder="Mobile No">
                <div class="invalid-feedback">{{$errors->first('mobile_no')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="address" name="address"
                       placeholder="Address">
                <div class="invalid-feedback">{{$errors->first('address')}}</div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection



