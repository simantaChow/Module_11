@extends('.layout.app')

@section('content')
    <div class="w-full h-16 bg-amber-300 px-10 py-4 font-semibold">
        <ul class="flex">
            <li class="w-20"><a href="{{url('/')}}">Home</a></li>
            <li class="w-20"><a href="{{route('product.list')}}">Products</a></li>
            <li class="w-40"><a href="{{route('product.new')}}">New Product</a></li>
        </ul>
    </div>
@endsection
