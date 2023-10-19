@extends('layouts.app')

@section('main')


    <div class="container">
        <div>
            <a href="products/create" class="btn btn-dark mt-2 float-right">New Product</a>
        </div>

        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{  $product->name}}</td>
                    <td>
                        <img src="products/{{ $product->image }}" alt="" width="30" height="30" class="rounded-circle"/>
                    </td>
                    <td> 
                        <a href="products/{{ $product->id}}/edit" class="btn btn-success btn-sm">Edit</a>

                        <form method="POST" class="d-inline" action="/products/{{ $product->id }}/delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
