@extends('layouts.master')
@section('content')
  <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Edit Produk
              </h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form action="{{ route('product.update',$product->slug) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nama Produk" value="{{ $product->product_name }}" name="product_name" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Harga Produk" value="{{ $product->harga }}" name="harga" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" placeholder="Stok Produk" value="{{ $product->stock }}" name="stock" required>
                    </div>
                    <div class="form-group">
                      <select name="category_id" class="form-control">
                        @foreach ($category as $data)
                                        <option
                                            value="{{ $data->id}}"
                                            @if ($data->id === $data->category_id)
                                                selected
                                            @endif
                                        >
                                        {{ $data->category_name }}
                                    </option>
                                    @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea type="text" class="form-control" name="deskripsi" required>
                        {{ $product->deskripsi }}
                      </textarea>
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