@extends('layouts.productLayout')
@section('title', 'Product List')
@section('content')
    <h3>Add Product</h3>
    <table>
        <form action="{{url('addProduct')}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <tr>
                <div class="form-group">
                    <td><label for="name">Name</label></td>
                    <td><input type="text" class="form-control" name="name"></td>
                  </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="category">Category</label></td>
                    <td><input type="text" class="form-control" name="category"></td>
                  </div>
            </tr>
            
            <tr>
                <div class="form-group">
                    <td><label for="quantity">Quantity</label></td>
                    <td><input type="text" class="form-control" name="quantity"></td>
                  </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="price">Price</label></td>
                    <td><input type="text" class="form-control" name="price"></td>
                  </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="image">Image</label></td>
                    <td><input type="file" class="form-control" name="image"  accept="image/*"></td>
                  </div>
            </tr>

            <tr>
                <td><button type="submit" class="btn btn-primary">Submit</button></td>
            </tr>
          </form>
    </table>
@endsection