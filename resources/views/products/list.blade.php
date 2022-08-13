@extends('layouts.app')
@section('content')
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 <div class="panel panel-default">
 <div class="panel-heading">
 Lista sarcinilor
 </div>
 <div class="panel-body">
 <div class="form-group">
 <div class="pull-right">
 <a href="/products/create" class="btn btn-default">Add New Product</a>
 </div>
 </div>
 <table class="table table-bordered table-stripped">
 <tr>
 <th width="20">No</th>
 <th>Title</th>
 <th>Description</th>
 <th>Photo</th>
 <th>Price</th>
 <th width="300">Action</th>
 </tr>
 @if (count($products) > 0)
 @foreach ($products as $key => $product)
 <tr>
 <td>{{ ++$i }}</td>
 <td>{{ $product->name }}</td>
 <td>{{ $product->description }}</td>
 <td>
 <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
 {{ Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) }}
 {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
 {{ Form::close() }}
 </td>
 </tr>
 @endforeach
 @else
 <tr>
 <td colspan="4">There are no products!</td>
 </tr>
 @endif
 </table>
<!-- Introduce nr pagina -->
{{$products->render()}}
 </div>
 </div>
@endsection