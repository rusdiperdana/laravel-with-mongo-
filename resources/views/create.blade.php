@extends('layout')

@section('container')
<div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card mb-3">
                <div class="card-header">
                    <span>Tambah product</span>          
                </div>
                <div class="card-body">
                    <form action="{{ route('create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text"  class="form-control" name="slug">
                         </div>
                         <div class="form-group">
                            <label for="">Title</label>
                            <input type="text"  class="form-control" name="title">
                         </div>
                        <button type="submit" class="btn btn-primary">simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection