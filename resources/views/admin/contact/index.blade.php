@extends('layouts.admin')
@section('title')
    Contact
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
            <h4>Contacts Table</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>T/R</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Message</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($contacts as $contact)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->contact }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>{{ $contact->category->name }}</td>
                                <td class="d-flex " style="column-gap: 10px;">
                                    <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST">
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
                  {{ $contacts->links() }}
                </ul>
            </nav>
        </div>
    </div>
    </div>
@endsection
