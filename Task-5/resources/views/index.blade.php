<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Welcome to Product Management System</h1>
        <p>Manage your products efficiently.</p>

        <div class="buttons">
            <a href="{{url('addProduct')}}" class="btn add-product">Add Product</a>
            <a href="{{url('products')}}" class="btn show-products">Show All Products</a>
        </div>
    </div>
</body>
</html>
