@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 80px">
            <div>
              <form>
                <div class="form-group row">
                  <div class="col-md-10">
                  <input type="text" class="form-control" placeholder="Cari Produk Disini . . " required>
                  </div>
                  <div class="col-md-2">
                    <button type="submit" class="btn btn-xs btn-primary">Cari</button>
                  </div>
                </div>
              </form>
            </div>
      <!-- Page Features -->
      <div class="row text-center">
        @foreach($product as $data)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card" style="min-height: 200px">
            <a href="{{ route('product.show',$data->slug) }}">
              <img class="card-img-top" src="{{ asset('storage/' . $data->foto) }}" alt="" style="min-height: 200px">
            </a>
            <div class="card-body">
              <h4 class="card-title"><b>{{ substr($data->product_name,0,11) }}</b></h4>
              <p><span class="float-left"><a href="{{ route('category.show',$data->category_slug) }}">{{ $data->category_name }}</a></span><span class="float-right"><b>Rp . {{ $data->harga }}</b></span></p>
            </div>
          </div>
        </div>
        @endforeach  
      </div>
      <!-- /.row -->

    </div>
@endsection
