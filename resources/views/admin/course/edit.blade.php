@extends('layouts.admin')
@section('title')
    Course edit
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Course Edit Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input required name="title" type="text" value="{{ $course->title }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Teacher</label>
                        <input required name="teacher" type="text" value="{{ $course->teacher }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input required name="image" type="file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input required name="price" type="text" value="{{ $course->price }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Category Selected</label>
                        <select id="" name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option {{ $course->category_id == $category->id  ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
