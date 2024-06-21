@extends('layouts.admin')
@section('title')
Course
@endsection
@section('content')
    @if (session('seccess'))
        <div class="col-12 col-md-6 col-lg-12">
            <div class="alert alert-primary alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    {{ session('seccess') }}
                </div>
            </div>
        </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Courses Table</h4>
            <a href="{{ route('admin.course.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>T/R</th>
                            <th>Title</th>
                            <th>Teacher</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Categories</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->teacher }}</td>
                                <td>
                                    <img src="/images/courses/{{ $course->image }}" alt="" width="100">
                                </td>
                                <td>{{ $course->price }}</td>
                                <td>{{ $course->category->name }}</td>
                                <td class="d-flex " style="column-gap: 10px;">
                                    <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('admin.course.destroy', $course->id) }}" method="POST">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  {{ $courses->links() }}
                </ul>
            </nav>
        </div>
    </div>
    </div>
@endsection
