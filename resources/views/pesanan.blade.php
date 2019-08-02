@extends('layouts.app')
@section('content')
		<table class="table table-bordered" style="margin-top: 100px">
			<thead>
				<tr>
					<th>Nama Pembeli</th>
					<th>Nama Produk</th>
					<th>Status</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
	@foreach($order as $data)
				<tr>
					<td>{{ $data->buyer_name }}</td>
					<td>{{ $data->product_name }}</td>
					<td>{{ $data->status }}</td>
					<td>{{ $data->total }}</td>
				</tr>
	@endforeach
			</tbody>
		</table>
@endsection