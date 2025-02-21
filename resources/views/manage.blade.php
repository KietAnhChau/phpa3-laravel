@extends("layout")

@section("content")
    <div id="content" class="max-w-[85rem] p-2 sm:p-5 md:pt-5 lg:px-8 mx-auto">
        <h2 class="text-3xl font-bold mb-4 text-center">Manage Page</h2>

        @if ($isCreate != null)
            <div class="p-6">
                <form id="itemForm" class="mt-4 space-y-4" style="display: none;">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $item->name ?? '' }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                        <input type="text" id="description" name="description" value="{{ $item->description ?? '' }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="product_code" class="block text-sm font-medium text-gray-700">Product Code:</label>
                        <input type="text" id="product_code" name="product_code" value="{{ $item->product_code ?? '' }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Price:</label>
                        <input type="number" id="price" name="price" value="{{ $item->price ?? '' }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <button type="submit" id="formSubmitButton" class="w-full bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">{{ isset($item) ? 'Edit' : 'Create' }}</button>
                </form>
            </div>
        @endif

        <div class="flex justify-end space-x-2">
            <a href="{{ route('products.create') }}" id="createButton" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create</a>
        </div>

        <div class="pt-3">
            @include("components.table")
        </div>
    </div>
@endsection("content")
