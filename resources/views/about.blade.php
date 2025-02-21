@extends("layout")

@section("content")
    <div id="content" class="max-w-[85rem] p-2 sm:p-5 md:pt-5 lg:px-8 mx-auto">
        <h2 class="text-3xl font-bold mb-4 text-center">About Page</h2>
        <p class="text-lg mb-6 text-center">This application is designed for managing inventory records efficiently and effectively. It helps you keep track of your inventory with ease.</p>

        <div class="flex flex-col lg:flex-row">
            <div class="flex-1">
                <!-- Main content goes here -->
            </div>
            <div class="flex-none lg:w-1/5 lg:pl-5 lg:border-l border-gray-300 mt-6 lg:mt-0">
                <h3 class="text-xl font-semibold mb-2">Contact IT Support</h3>
                <p class="mb-4">Email: support@example.com</p>
                <img src="{{ asset('path/to/your/image.jpg') }}" alt="IT Support" class="rounded-lg shadow-lg w-full h-auto">
            </div>
        </div>
    </div>
@endsection("content")
