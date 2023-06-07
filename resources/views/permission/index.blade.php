@extends('permission.layout')
 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('permission.create') }}" class="btn btn-primary float-end"> ADD</a>
                    </div>

                </div>
            </div>
            <div class="card-body">

                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th>Thao tác</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($permission as $pr )
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $pr->name }}</td>
                        <td>
                          <form action="{{ route('permission.destroy', $pr) }}" method="POST">
                              <a href="{{ route('permission.edit',$pr) }}" class="btn btn-info">Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Xoa</button>
                          </form>
                      </td>
                      </tr>
                        
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
    
