@extends("layout")

@section("content")
    <div id="content" class="max-w-[85rem] p-2 sm:p-5 md:pt-5 lg:px-8 mx-auto">
        <h2 class="text-3xl font-bold mb-4 text-center">About Page</h2>
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            @include("sidebar")
            <div class="col-span-3">
                <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                    <h3 class="text-xl font-semibold mb-2">About the Application</h3>
                    <p class="text-lg mb-4">This application is designed for managing inventory records efficiently and effectively.</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                </div>
            </div>
        </div>
    </div>
@endsection("content")
