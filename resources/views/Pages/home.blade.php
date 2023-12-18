@extends('layout.app')

@section('content')
    @include('.Component.nav')
@endsection

@section('card')
    <div class="w-[200px] h-[100px] bg-blue-300 mx-10 my-10 p-2 font-semibold rounded-2xl">
        <p>Yesterday Sale :</p>
    </div>

    <div class="w-[200px] h-[100px] bg-blue-300 mx-10 my-10 p-2 font-semibold rounded-2xl">
        <p>Today Sale :</p>
    </div>

    <div class="w-[200px] h-[100px] bg-blue-300 mx-10 my-10 p-2 font-semibold rounded-2xl">
        <p>This Month :</p>
    </div>

    <div class="w-[200px] h-[100px] bg-blue-300 mx-10 my-10 p-2 font-semibold rounded-2xl">
        <p>Last Month :</p>
    </div>
@endsection
