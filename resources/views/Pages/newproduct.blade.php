@extends('layout.app')

@section('content')
    @include('.Component.nav')
@endsection

@section('create_new_product')
    <div class="w-full h-full bg-cyan-500 m-auto p-20">
        @if(session('success'))
            <h3 class="text-lg text-amber-400">{{session('success')}}</h3>

        @endif


        <form action="{{route('product.create')}}" method="POST">
            @csrf
            <label class="block font-semibold text-xl mb-5" for="name">Products Name :
                <input type="text" name="name" id="">
                @error('name')
                <p class="text-red-700">{{$message}}</p>
                @enderror
            </label>
            <label class="block font-semibold text-xl mb-5" for="price">Price :
                <input type="text" name="price" id="">
                @error('price')
                <p class="text-red-700">{{$message}}</p>
                @enderror
            </label>
            <label class="block font-semibold text-xl mb-5" for="qty">Quantity:
                <input type="text" name="quantity" id="">
                @error('quantity')
                <p class="text-red-700">{{$message}}</p>
                @enderror
            </label>
            <button class="h-12 w-16 font-semibold bg-amber-400" type="submit">Create</button>
        </form>
    </div>
@endsection
