@extends('permission.layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sua SP</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('permission.index') }} " class="btn btn-primary fload-end"> Danh sach SP</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('permission.update', $permission) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ten SP</strong>
                                <input type="text" name="name" value="{{ $permission->name }}" class="form-control" placeholder="Nhap ten sp">
                            </div>
                            
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cap Nhat</button>
                </form>
            </div>
        </div>
    </div>


@endsection