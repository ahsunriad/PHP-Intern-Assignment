@extends('layouts.productLayout')
@section('title', 'Product List')
@section('content')
    
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset('assets/uploads/products/'.$item->image)}}" style="height: 150px"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->price}}</td>
                    <td><a class="nav-link" href="{{url('deleteProduct/'.$item->id)}}"><i class="material-icons">delete</i><p>Delete</p></a> 
                        <a class="nav-link" href="{{url('editProduct/'.$item->id)}}"><i class="material-icons">edit_square</i><p>Edit</p></a></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection