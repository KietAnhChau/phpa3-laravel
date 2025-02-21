@extends("layout")

@section("content")
    <div id="content" class="max-w-[85rem] p-2 sm:p-5 md:pt-5 lg:px-8 mx-auto">
        <h2 class="text-3xl font-bold mb-4 text-center">Search Page</h2>

        <div class="p-6">
            <form action='{{route('search.products')}}' method="post" id="itemForm" class="mt-4 space-y-4 p-6 rounded-lg shadow-lg">
                @csrf
                <div>
                    <label for="search" class="block text-sm font-medium text-gray-700">Search:</label>
                    <input type="text" id="search" name="search" value="" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="low" class="block text-sm font-medium text-gray-700">Low:</label>
                    <input type="text" id="low" name="low" value="0" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div>
                    <label for="high" class="block text-sm font-medium text-gray-700">High:</label>
                    <input type="text" id="high" name="high" value="1" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <button type="submit" id="formSubmitButton" class="w-full bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Search</button>
            </form>
        </div>

        @if($items)
            <div class="pt-3">
                @include("components.table", ['items' => $items, 'isAction' => true])
            </div>
        @endif
    </div>
@endsection("content")
