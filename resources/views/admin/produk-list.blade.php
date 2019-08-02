@extends('layouts.master')
@section('content')
  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$pesanan}}</h3>

              <p>Pesanan Baru</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $terjual }}</h3>

              <p>Produk Terjual</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$user}}</h3>

              <p>Pengguna</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $jml_product }}</h3>

              <p>Cek Produk</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
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
                  <th>Nama Produk</th>
                  <th>Deskripsi Produk</th>
                  <th>Harga Produk</th>
                  <th>Kode Produk</th>
                  <th> Stok Produk</th>
                  <th> Edit </th>
                  <th> Hapus </th>
                </tr>
                </thead>
                <tbody>
                  @foreach($product as $data)
                <tr>
                  <td>{{ $data->product_name }}</td>
                  <td>{{ substr($data->deskripsi,0,20) }} . . .</td>
                  <td>{{ $data->harga }}</td>
                  <td>{{ $data->product_kode }}</td>
                  <td>{{ $data->stock }}</td>
                  <td>
                    <a class="btn btn-xs btn-danger" href="{{ route('product.edit',$data->slug) }}"> edit </a>
                  </td>
                  <td>
                    <form class="" action="{{ route('product.destroy',$data) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-xs btn-danger">Hapus</button>
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