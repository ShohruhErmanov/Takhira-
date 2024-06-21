@extends('layouts.admin')
@section('title')
    Service
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
            <h4>Service Table</h4>
            <a href="{{ route('admin.service.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>T/R</th>
                            <th>Title</th>
                            <th>Icon</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->title }}</td>
                                <td>
                                    <i class="{{ $service->icon }} fa-3x"></i>
                                </td>
                                <td>{{ $service->text }}</td>
                                <td class="d-flex " style="column-gap: 10px;">
                                    <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST">
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
                    {{ $services->links() }}
                </ul>
            </nav>
        </div>
    </div>
    </div>
@endsection
