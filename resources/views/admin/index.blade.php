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
              <h3>{{ $product }}</h3>

              <p>Cek Produk</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('product.index') }}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-12">
          <div class="table-responsive">
          <table class="table table-bordered table-hover" style="margin-top: 100px">
      <thead>
        <tr>
          <th>Nama Pembeli</th>
          <th>Nama Produk</th>
          <th>Status</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
  @foreach($order as $data)
        <tr>
          <td>{{ $data->buyer_name }}</td>
          <td>{{ $data->product_name }}</td>
          <td>{{ $data->status }}</td>
          <td>{{ $data->total }}</td>
          <td>
            <a class="btn btn-sm btn-danger" href="#"> Edit </a>
          </td>
        </tr>
  @endforeach
      </tbody>
    </table>
        </div>
        </div>
      </div>
@endsection