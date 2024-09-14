@extends('layouts.productLayout')
@section('title', 'Product List')
@section('content')
    <h3>Edit Product</h3>
    <table>
        <form action="{{url('updateProduct/'.$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('put')}}
            <tr>
                <div class="form-group">
                    <td><label for="image">Image</label></td>
                    <td><img src="{{asset('assets/uploads/products/'.$data->image)}}" class="w-75">
                        <input type="file" class="form-control" name="image"  accept="image/*">
                    </td>
                  </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="id">ID</label></td>
                    <td><input type="text" readonly class="form-control-plaintext" name="id" value="{{$data->id}}"></td>
                  </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="name">Name</label></td>
                    <td><input type="text" class="form-control" name="name" value="{{$data->name}}"></td>
                  </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="category">Category</label></td>
                    <td><input type="text" class="form-control" name="category" value="{{$data->category}}"></td>
                  </div>
            </tr>
            
            <tr>
                <div class="form-group">
                    <td><label for="quantity">Quantity</label></td>
                    <td><input type="text" class="form-control" name="quantity" value="{{$data->quantity}}"></td>
                  </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="price">Price</label></td>
                    <td><input type="text" class="form-control" name="price" value="{{$data->price}}"></td>
                  </div>
            </tr>
            

            <tr>
                <td><button type="submit" class="btn btn-primary">Submit</button></td>
            </tr>
          </form>
    </table>

@endsection