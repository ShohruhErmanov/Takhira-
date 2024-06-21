@extends('layouts.admin')
@section('title')
News
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
            <h4>News Table</h4>
            <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>T/R</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($news as $new)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $new->title }}</td>
                                <td>
                                    <img src="/images/news/{{ $new->image }}" alt="" width="100">
                                </td>
                                <td>{{ $new->text }}</td>
                                <td class="d-flex " style="column-gap: 10px;">
                                    <a href="{{ route('admin.news.edit', $new->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('admin.news.destroy', $new->id) }}" method="POST">
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
                  {{ $news->links() }}
                </ul>
            </nav>
        </div>
    </div>
    </div>
@endsection
