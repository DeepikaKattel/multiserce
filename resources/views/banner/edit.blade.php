@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Edit banner content</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('banner.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">
        <form action="{{route('banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="banner1">Banner 1</label>
                <input type="file" name="banner1">
                <div class="col-md-2 col-sm-2">
                    <img src="/storage/images/banner/{{$banner->banner1}}" style=" height: auto; max-width:12em;" alt = "Image">
                </div>
            </div>
            <div class="form-group">
                <label for="discount1">Discount 1</label>
                <input type="text" class="form-control" name="discount1" value="{{old('discount1', $banner->discount1)}}">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="banner2">Banner 2</label>--}}
{{--                <input type="file" name="banner2" value="{{old('banner2', $banner->banner2)}}">--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="section">Section Type:</label>
                <select name="section">
                    <option value="ecommerce">Ecommerce</option>
                    <option value="job">Job Portal</option>
                    <option value="rental">Rental</option>
                </select>
            </div>

            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>
    </div>
@endsection

