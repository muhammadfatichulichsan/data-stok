@extends('layouts.master')
@section('content')
  <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Kategori</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($categories as $data)
                <tr>
                  <td>{{ $data->category_name }}</td>
                  <td><a href="{{ route('category.edit',$data->category_slug) }}" class="btn btn-xs btn-info"> Edit </a></td>
                  <td>
                    <form class="" action="{{ route('category.destroy',$data) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-xs btn-danger">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
          <!-- /.box -->
@endsection