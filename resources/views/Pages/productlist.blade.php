@extends('layout.app')

@section('content')
    @include('.Component.nav')
@endsection

@section('product_list')
    <div class="flex flex-col">
        <div class="w-full">
            <div class="border-b border-gray-200 shadow">
                <table>
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-lg text-gray-500">
                            SL
                        </th>
                        <th class="px-6 py-2 text-lg text-gray-500">
                            Product Name
                        </th>
                        <th class="px-6 py-2 text-lg text-gray-500">
                            Quantity
                        </th>
                        <th class="px-6 py-2 text-lg text-gray-500">
                            Price
                        </th>
                        <th class="px-6 py-2 text-lg text-gray-500">
                            Edit
                        </th>
                        <th class="px-6 py-2 text-lg text-gray-500">
                            Delete
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($products as $product)
                    <tr class="whitespace-nowrap">
                        <td class="px-6 py-4 text-lg text-gray-500">
                            {{$loop->iteration}}
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-lg text-gray-900">
                                {{$product->name}}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-lg text-gray-500">{{$product->price}}</div>
                        </td>
                        <td class="px-6 py-4 text-lg text-gray-500">
                            {{$product->qty}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('product.showupdate',$product->id)}}" class="px-4 py-1 text-lg text-white bg-blue-400 rounded">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="px-4 py-1 text-lg text-white bg-red-400 rounded" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
