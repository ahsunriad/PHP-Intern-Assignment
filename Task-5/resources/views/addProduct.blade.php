@extends('layouts.addProductLayout')
@section('title', 'Product List')
@section('content')
    <div class="form-container">
        <h2>Add New Product</h2>
        <form action="{{url('addProduct')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" name="name" placeholder="Enter Product Name" required>
            </div>
            <div class="form-group">
                <label for="product_category">Product Category</label>
                <input type="number" name="price" placeholder="Enter Product Category" required>
            </div>
            <div class="form-group">
                <label for="product_quantity">Product Quantity</label>
                <input type="number" name="quantity" placeholder="Enter Product Quantity" required>
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" name="price" placeholder="Enter Product Price" required>
            </div>

            <!-- Product Image -->
            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" name="image" accept="image/*" required>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn">Add Product</button>
            </div>
        </form>
        <div class="form-group go-back">
            <a href="{{url('/')}}" class="btn back-btn">Go Back</a>
        </div>
    </div>
@endsection