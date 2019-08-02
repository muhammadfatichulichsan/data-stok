@extends('layouts.master')
@section('content')
  <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tambah Kategori
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nama Kategori" name="category_name" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-sm btn-info"> Tambah </button>
                    </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
@endsection