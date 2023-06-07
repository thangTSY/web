{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <form action="{{ route('permission.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" 
                               class="form-control"
                               name="name"
                               placeholder="Nhập tên danh mục"
                        >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
  
  
  
          </div>
        </div>
      </div>
    </div>


<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html> --}}


@extends('permission.layout')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm SP</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('permission.index') }}" class="btn btn-primary float-end"> DS SP</a>
                    </div>

                </div>
            </div>
            <div class="card-body">
              <form action="{{ route('permission.store') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Tên danh mục</label>
                      <input type="text" 
                             class="form-control"
                             name="name"
                             placeholder="Nhập tên danh mục"
                      >
                    </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection
    
