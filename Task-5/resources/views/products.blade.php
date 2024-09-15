@extends('layouts.productLayout')
@section('title', 'Product List')
@section('content')
    
<h1>All Products</h1>

<!-- Search and Show All Products Section -->
<div class="search-container">
    <form action="{{url('products')}}" method="GET" class="search-form">
        @csrf
        <input type="text" name="search" placeholder="Search by Product Name" class="search-input">
        <button type="submit" class="btn search-btn">Search</button>
    </form>
    <a href="{{url('products')}}" class="btn show-all-btn">Show All Products</a>
</div>

<!-- Product Table -->
<table class="product-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
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
                    <td><a href="{{url('editProduct/'.$item->id)}}" class="btn edit-btn"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{url('deleteProduct/'.$item->id)}}" class="btn delete-btn"><i class="fas fa-trash"></i> Delete</a>
                </tr>
            @endforeach
        
    </tbody>
</table>





























@endsection