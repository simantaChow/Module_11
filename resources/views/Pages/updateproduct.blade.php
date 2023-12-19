@extends('layout.app')

@section('content')
    @include('.Component.nav')
@endsection

@section('update_product')
    <div class="w-full h-full bg-cyan-500 m-auto p-20">
        <div class="bg-green-700 p-5 mb-5"><h2 class="text-yellow-500 text-2xl font-extrabold">Update Product</h2></div>
        @if(session('success'))
            <h3 class="text-lg text-amber-400">{{session('success')}}</h3>
        @endif

        @foreach($products as $product )
        <form action="{{route('product.update',$product->id)}}" method="POST">
            @csrf
            <label class="block font-semibold text-xl mb-5" for="name">Products Name :
                <input type="text" name="name" id="" value="{{$product->name}}">
                @error('name')
                <p class="text-red-700">{{$message}}</p>
                @enderror
            </label>
            <label class="block font-semibold text-xl mb-5" for="price">Price :
                <input type="text" name="price" id="" value="{{$product->price}}">
                @error('price')
                <p class="text-red-700">{{$message}}</p>
                @enderror
            </label>
            <label class="block font-semibold text-xl mb-5" for="qty">Quantity:
                <input type="text" name="quantity" id="" value="{{$product->qty}}">
                @error('quantity')
                <p class="text-red-700">{{$message}}</p>
                @enderror
            </label>
            <button class="h-12 w-16 font-semibold bg-amber-400" type="submit">Update</button>
        </form>
        @endforeach
    </div>
@endsection

