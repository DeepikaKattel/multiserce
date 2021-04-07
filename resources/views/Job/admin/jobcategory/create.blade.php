@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Add Job Category</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('jobcategory.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">

        <form action="{{route('jobcategory.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="job_category">Job Category</label>
                <input type="text" class="form-control" name="job_category">
            </div>


            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>

    </div>
@endsection

