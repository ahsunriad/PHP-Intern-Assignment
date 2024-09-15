@extends('layouts.addProductLayout')
@section('title', 'Product List')
@section('content')
    <div class="form-container">
        <h2>Update Product</h2>
        <form action="{{url('updateProduct/'.$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}}
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" name="name" value="{{$data->name}}" required>
            </div>
            <div class="form-group">
                <label for="product_category">Product Category</label>
                <input type="text" name="price" value="{{$data->category}}" required>
            </div>
            <div class="form-group">
                <label for="product_quantity">Product Quantity</label>
                <input type="number" name="quantity" value="{{$data->quantity}}" required>
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" name="price" value="{{$data->price}}" required>
            </div>

            <!-- Product Image -->
            <div class="form-group">
                <label for="product_image">Product Image</label>
                <img src="{{asset('assets/uploads/products/'.$data->image)}}" class="custom_img">
                <input type="file" name="image" accept="image/*" required>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn">Update Product</button>
            </div>
            
        </form>
        <div class="form-group go-back">
            <a href="{{url('products')}}" class="btn back-btn">Go Back</a>
        </div>
    </div>

@endsection