@extends("layout")

@section("content")
    <div id="content" class="max-w-[85rem] p-2 sm:p-5 md:pt-5 lg:px-8 mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Welcome to Our Inventory Management Application</h2>
        <p class="text-lg mb-6">Discover the ultimate solution to streamline your inventory process with our cutting-edge application. Try it out now!</p>
        <div class="flex justify-center">
            <img src="{{ asset('home.jpg') }}" alt="Inventory Management" class="rounded-lg shadow-lg max-w-full h-auto">
        </div>
    </div>
@endsection("content")
