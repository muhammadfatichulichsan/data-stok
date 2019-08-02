@extends('layouts.master')
@section('content')
  <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Tambah Produk
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nama Produk" name="product_name" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Harga Produk" name="harga" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Stok Produk" name="stock" required>
                    </div>
                    <div class="form-group">
                      <select name="category_id" class="form-control">
                        <option value="NULL">--Pilih Kategori --</option>
                        @foreach($category as $data)
                          <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea type="text" class="form-control" name="deskripsi" required>
                      -- Deskripsi Produk --
                      </textarea>
                    </div>
                    <div class="form-group">
                      <textarea id="editor1"></textarea>
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