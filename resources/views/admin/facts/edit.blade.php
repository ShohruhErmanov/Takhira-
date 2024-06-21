@extends('layouts.admin')
@section('title')
    Facts edit
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Facts Edit Form</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.facts.update', $fact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input required name="title" type="text" value="{{ $fact->title }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Number</label>
                        <input required name="number" type="number" value="{{ $fact->number }}" class="form-control">
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
