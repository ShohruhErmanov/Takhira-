@extends('layouts.admin')
@section('title')
    Silider edit
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Silider Edit Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input required name="title" type="text" value="{{ $banner->title }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input required name="image" type="file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input required name="text" type="text" value="{{ $banner->text }}" class="form-control">
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
