@extends('takhira')
@section('title')
Fikir bildirish
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Fikir bildirish</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('about_add.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Ism kiriting</label>
                        <input required name="name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kasbingizni kiriting</label>
                        <input required name="job" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Rasmingizni kiriting</label>
                        <input required name="image" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Xabar</label>
                        <textarea  class="form-control" name="description" id="" cols="300" rows="400"></textarea>
                    </div>

                   <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Yuborish</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
