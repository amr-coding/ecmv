<div>
    <!-- Dashboard-specific content goes here -->
    <main class="flex-1 pb-8">
        <div class="flex items-center justify-between py-7 px-10">
            <div>
                <h1 class="text-2xl font-semibold leading-relaxed text-gray-800">Products</h1>
                <p class="text-sm font-medium text-gray-500">Let's grow to your business! Create your product and
                    upload here</p>
            </div>
            <button
                class="py-2.5 px-5 text-white bg-indigo-600 rounded-xl inline-flex gap-x-2 items-center hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"><x-akar-plus />
                Create Product
                <span class="text-sm font-semibold tracking-wide"></span>

            </button>
        </div>
        <ul class="flex gap-x-24 items-center px-4 border-y border-gray-200">
            <li>
                <button class="flex gap-x-2 items-center py-5 px-6 text-gray-500 hover:text-indigo-600 relative group">
                    <x-akar-double-check />
                    <span class="font-medium">

                        Published
                    </span>
                    <span
                        class="absolute w-full h-0.5 bg-indigo-600 rounded bottom-0 left-3 scale-x-0 group-hover:scale-x-100 transition-transform ease-in-out"></span>
                </button>
            </li>
            <li>
                <button class="flex gap-x-2 items-center py-5 px-6 text-gray-500 hover:text-indigo-600 relative group">
                    <x-akar-inbox />
                    <span class="font-medium">

                        Draft
                    </span>
                    <span
                        class="absolute w-full h-0.5 bg-indigo-600 rounded bottom-0 left-3 scale-x-0 group-hover:scale-x-100 transition-transform ease-in-out"></span>
                </button>
            </li>
            <li>
                <button class="flex gap-x-2 items-center py-5 px-6 text-gray-500 hover:text-indigo-600 relative group">
                    <x-akar-eye-slashed />
                    <span class="font-medium">

                        Hidden
                    </span>
                    <span
                        class="absolute w-full h-0.5 bg-indigo-600 rounded bottom-0 left-3 scale-x-0 group-hover:scale-x-100 transition-transform ease-in-out"></span>
                </button>
            </li>
            <li>
                <button class="flex gap-x-2 items-center py-5 px-6 text-gray-500 hover:text-indigo-600 relative group">
                    <x-akar-thumbs-down />
                    <span class="font-medium">

                        Rejected
                    </span>
                    <span
                        class="absolute w-full h-0.5 bg-indigo-600 rounded bottom-0 left-3 scale-x-0 group-hover:scale-x-100 transition-transform ease-in-out"></span>
                </button>
            </li>
            <li>
                <button class="flex gap-x-2 items-center py-5 px-6 text-gray-500 hover:text-indigo-600 relative group">
                    <x-akar-glasses />
                    <span class="font-medium">

                        Under Review
                    </span>
                    <span
                        class="absolute w-full h-0.5 bg-indigo-600 rounded bottom-0 left-3 scale-x-0 group-hover:scale-x-100 transition-transform ease-in-out"></span>
                </button>
            </li>
        </ul>
        <table class="w-full border-b border-gray-200">
            <thead>
                <tr class="text-sm font-medium text-gray-700 border-b py-5 border-gray-200">
                    <td class="pl-10">
                        <div class="flex items-center gap-x-4">
                            <input type="checkbox" class="w-4 h-4 text-indigo-600 rounded-md border-gray-300"
                                indeterminate="indeterminate" />
                            <span>Product Name</span>
                        </div>
                    </td>
                    <td class="py-4 px-4 text-center">Pricing</td>
                    <td class="py-4 px-4 text-center">Stock</td>
                    <td class="py-4 px-4 text-center">Rating</td>
                    <td class="py-4 px-4 text-center">Date</td>
                    <td class="py-4 px-4 text-center">Action</td>
                </tr>
            </thead>

            <tbody>
                <tr class="hover:bg-gray-100 transition-colors">
                    <td class="flex gap-x-5 items-center py-4 pl-10">
                        <input type="checkbox" class="w-4 h-4 text-indigo-600 rounded-md border-gray-300"
                            indeterminate="indeterminate" />
                        <div>
                            <x-akar-image class="w-12 h-12" />
                        </div>
                        <div class="flex flex-col">

                            <a href="#" class="text-lg font-semibold text-gray-700">Nike Air Max 270 React</a>
                            <span class="font-medium text-gray-400">Clothes</span>
                        </div>
                    </td>
                    <td class="font-medium text-center">
                        $150
                    </td>
                    <td class="font-medium text-center">
                        70
                    </td>
                    <td class="font-medium text-center">
                        4.5/5
                    </td>
                    <td class="font-medium text-center">
                        10/01/23
                    </td>
                    <td class="flex gap-x-6 font-medium justify-center items-center">
                        <button class="p-2 hover:rounded-md hover:bg-gray-200">
                            <x-akar-pencil />
                        </button>
                        <button class="p-2 hover:rounded-md hover:bg-gray-200">

                            <x-akar-trash-can />
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex gap-x-2 justify-center pt-8 items-center">
            <button><x-akar-chevron-left class="to-gray-800 stroke-current hover:text-indigo-600 " /></button>
            <button class="flex items-center justify-center w-8 h-8 font-medium rounded-full">1</button>
            <button class="flex items-center justify-center w-8 h-8 font-medium rounded-full">2</button>
            <button class="flex items-center justify-center w-8 h-8 font-medium rounded-full">3</button>
            <button class="flex items-center justify-center w-8 h-8 font-medium rounded-full">4</button>
            <button><x-akar-chevron-right class="to-gray-800 stroke-current hover:text-indigo-600 " /></button>
        </div>
    </main>
    {{-- @endsection --}}
</div>
