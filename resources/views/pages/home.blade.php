
@extends('layouts.default')

@section('content')
    <h1 class="text-3xl mb-8 ">¡Lo nuevo!</h1>
    <div class="flex flex-wrap justify-center">
        <div class="w-1/2 m-2">
            <a href="#" class="block bg-slate-200 hover:bg-slate-300 text-center rounded p-4">
                <img src="https://images.pexels.com/photos/4210860/pexels-photo-4210860.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 1" class="w-full h-32 object-cover mb-4">
                <h3 class="text-xl font-bold">Jeans</h3>
                <p class="text-slate-600">$499.00</p>
            </a>
        </div>

        <div class="w-1/2 m-2">
            <a href="#" class="block bg-slate-200 hover:bg-slate-300 text-center rounded p-4">
                <img src="https://images.pexels.com/photos/45982/pexels-photo-45982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 2" class="w-full h-32 object-cover mb-4">
                <h3 class="text-xl font-bold">Sweateres</h3>
                <p class="text-slate-600">$399.00</p>
            </a>
        </div>

        <div class="w-1/2 m-2">
            <a href="#" class="block bg-slate-200 hover:bg-slate-300 text-center rounded p-4">
                <img src="https://images.pexels.com/photos/4066293/pexels-photo-4066293.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Product 3" class="w-full h-32 object-cover mb-4">
                <h3 class="text-xl font-bold">Básicos</h3>
                <p class="text-slate-600">$250.00</p>
            </a>
        </div>
    </div>
@endsection