@extends('layout')

@section('page-content')
    <legend>Create Book</legend>
    <form method="post" action={{ route('edit', $employee->id) }}>
        @csrf
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value={{old("name", $employee->name)}} id="name" name="name"
                       placeholder={{$employee->name}}>
                <div class="invalid-feedback">{{$errors->first('name')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="job_title" class="col-sm-2 control-label">Job Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value={{old("job_title", $employee->job_title)}} name="job_title"
                       placeholder={{$employee->job_title}}>
                <div class="invalid-feedback">{{$errors->first('job_title')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="joining_date" class="col-sm-2 control-label">Joining Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value={{old("joining_date", $employee->joining_date)}} id="Joining_date" name="joining_date"
                       placeholder={{$employee->joining_date}}>
                <div class="invalid-feedback">{{$errors->first('joining_date')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="salary" class="col-sm-2 control-label">Salary</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value={{old("salary", $employee->salary)}} id="salary" name="salary"
                       placeholder={{$employee->salary}}>
                <div class="invalid-feedback">{{$errors->first('salary')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value={{old("email", $employee->email)}} id="email" name="email"
                       placeholder={{$employee->email}}>
                <div class="invalid-feedback">{{$errors->first('email')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value={{old("mobile_no", $employee->mobile_no)}} id="mobile_no" name="mobile_no"
                       placeholder={{$employee->mobile_no}}>
                <div class="invalid-feedback">{{$errors->first('mobile_no')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value={{old("address", $employee->address)}} id="address" name="address"
                       placeholder={{$employee->address}}>
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



