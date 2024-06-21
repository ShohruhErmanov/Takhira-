@extends('layouts.admin')
@section('title')
Teachers
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
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Teachers Table</h4>
            <a href="{{ route('admin.teacher.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>T/R</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Job</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>
                                    <img src="/images/teachers/{{ $teacher->image }}" alt="" width="100">
                                </td>
                                <td>{{ $teacher->job }}</td>
                                <td class="d-flex " style="column-gap: 10px;">
                                    <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST">
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
                  {{ $teachers->links() }}
                </ul>
            </nav>
        </div>
    </div>
    </div>
@endsection
