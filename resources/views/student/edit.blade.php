@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3>Edit Record</h3>
        <br />
        @if(count($errors) > 0)

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{{ route('student.update', ['student' => $student->id]) }}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT" />
            <div class="form-group">
                <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $student->first_name) }}" placeholder="Enter First Name" />
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $student->last_name) }}" placeholder="Enter Last Name" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>

@endsection