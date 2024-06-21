@extends('layouts.admin')
@section('title')
    Teacher edit
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Teacher Edit Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input required name="name" type="text" value="{{ $teacher->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input required name="image" type="file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Job</label>
                        <input required name="job" type="text" value="{{ $teacher->job }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Telegram</label>
                        <input  name="telegram" type="text" value="{{ $teacher->telegram }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Instagram</label>
                        <input  name="instagram" type="text" value="{{ $teacher->instagram }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Facebook</label>
                        <input  name="facebook" type="text" value="{{ $teacher->facebook }}" class="form-control">
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
