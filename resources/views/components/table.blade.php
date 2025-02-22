@props(['items' => [], 'isAction' => true])

<div class="p-5 flex flex-col border border-black-200 shadow-sm rounded-xl bg-dark-300">
    <div class="pb-4 flex justify-between items-center flex-wrap gap-2 md:gap-5 border-b border-black-200">
        <div>
            <h2 class="inline-block font-semibold text-stone-800">
                Top products
            </h2>
        </div>
    </div>

    <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-stone-100 [&::-webkit-scrollbar-thumb]:bg-stone-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
        <div class="min-w-full inline-block align-middle">
            <table class="min-w-full divide-y divide-black-200">
                <thead>
                    <tr>
                        <th scope="col" class="min-w-[150px]">
                            <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                <button id="hs-pro-eptits" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm font-normal text-stone-500 focus:outline-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Name
                                </button>
                            </div>
                        </th>

                        <th scope="col">
                            <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                <button id="hs-pro-eptchs" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm font-normal text-stone-500 focus:outline-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Description
                                </button>
                            </div>
                        </th>

                        <th scope="col">
                            <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                <button id="hs-pro-eptprs" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm font-normal text-stone-500 focus:outline-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Product code
                                </button>
                            </div>
                        </th>

                        <th scope="col">
                            <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                <button id="hs-pro-eptsls" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm font-normal text-stone-500 focus:outline-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Price
                                </button>
                            </div>
                        </th>

                        @if($isAction)
                            <th scope="col">
                                <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                    <button id="hs-pro-eptsls" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm font-normal text-stone-500 focus:outline-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Action
                                    </button>
                                </div>
                            </th>
                        @endif
                    </tr>
                </thead>

                <tbody class="divide-y divide-black-200">
                    @foreach($items as $product)
                        <tr class="hover:bg-gray-400">
                            <td class="size-px py-3 px-5 relative">
                                <div class="w-full flex items-center gap-x-3">
                                    <span class="text-sm font-medium text-stone-800">
                                        {{ $product->name }}
                                    </span>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap py-3 px-5">
                                <span class="text-sm text-stone-600">
                                    {{ $product->description }}
                                </span>
                            </td>
                            <td class="size-px whitespace-nowrap py-3 px-5">
                                <span class="text-sm text-stone-600">
                                    {{ $product->product_code }}
                                </span>
                            </td>
                            <td class="size-px whitespace-nowrap py-3 px-5">
                                <span class="text-sm text-stone-600">
                                    ${{ $product->price }}
                                </span>
                            </td>

                            @if($isAction)
                                <td class="size-px whitespace-nowrap py-3 px-5">
                                <span class="text-sm text-stone-600 flex gap-2">
                                    <a href="{{ route('products.edit', ['product' => $product->id ?? 0]) }}" id="editButton" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 flex items-center justify-center cursor-pointer">Edit</a>

                                    <form action="{{ route('products.destroy', ['product' => $product->id ?? 0]) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 flex items-center justify-center cursor-pointer">Delete</button>
                                    </form>
                                </span>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
