@extends('layouts.app', ['title' => 'Products List'])

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="row d-flex justify-content-left mt-5">
            <div class="col-12">
                <h1>Products List</h1>            
            </div>
        </div>
        <div class="row d-flex justify-content-left mt-2">
            <div class="col-12">
                <a href="#" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    Add a product
                </a>
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-4">
            <div class="col-6">
                <label for="search">search:</label>
                <input type="text">
            </div>
            <div class="col-6">
                {{ $products->links() }}
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-4">
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead class="bg-primary">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Réf</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price HT</th>
                        <th>Quantity</th>
                        <th>Active</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    <figure class="figure">
                                        <img src="#" class="figure-img img-fluid rounded" width="30" height="30">
                                    </figure>
                                </td>
                                <td>{{ $product->ref }}</td>
                                <td class="text-left">{{ $product->name }}</td>
                                <td>{{ $product->categories[0] }}</td>
                                <td>{{ $product->price_ht }}$</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <div class="{{ $product->active ? 'circle-green' : 'circle-red' }}">
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn bg-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('products.show', $product) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row d-flex justify-content-between mt-4">
            <div class="col">
                <label for="">Product/Page</label>
                <select name="" id="">
                    <option value="">20</option>
                    <option value="">30</option>
                    <option value="">40</option>
                </select>
            </div>
            <div class="col">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection