@extends('layouts.admin')
@section('title')
Teacher create
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Teacher Create From</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input required name="name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input required name="image" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Job</label>
                        <input required name="job" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telegram</label>
                        <input  name="telegram" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input  name="instagram" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input  name="facebook" type="text" class="form-control">
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
