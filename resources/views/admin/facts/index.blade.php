@extends('layouts.admin')
@section('title')
    Facts
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
            <h4>Facts Table</h4>
            <a href="{{ route('admin.facts.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>T/R</th>
                            <th>Title</th>
                            <th>Number</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($facts as $fact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fact->title }}</td>
                                <td>{{ $fact->number }}</td>
                                <td class="d-flex " style="column-gap: 10px;">
                                    <a href="{{ route('admin.facts.edit', $fact->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('admin.facts.destroy', $fact->id) }}" method="POST">
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
    </div>
    </div>
@endsection
