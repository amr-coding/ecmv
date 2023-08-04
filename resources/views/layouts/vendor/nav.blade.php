        <aside class="py-6 px-10 w-64 border-r border-gray-200">
            <img src="{{ asset('admin/images/logo.png') }}" class="w-32 flex " alt="">
            <div class="py-8 px-3  border-b border-gray-200">
                <h1 class="text-sm font-bold text-gray-600 mt-10">Earnings</h1>
                <p class="text-2xl text-black">$12,560.55</p>
            </div>
            <ul class="flex flex-col gap-y-9 pt-20">
                <div class="flex flex-col gap-y-5">
                    <li class="">

                        <a class="{{ Route::currentRouteName() == 'vendor.dashboard' ? 'flex gap-x-5 items-center py-2 text-indigo-600' : 'flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group' }}"
                            href="/vendor/dashboard" wire:navigate><x-akar-dashboard />
                            Dashboard
                            <span
                                class="{{ Route::currentRouteName() == 'vendor.dashboard' ? 'absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-100-translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out' : 'absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out' }}">

                            </span>

                        </a>


                    </li>

                    <li><a class="{{ Route::currentRouteName() == 'vendor.products' ? 'flex gap-x-5 items-center py-2 text-indigo-600' : 'flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group' }}"
                            href="/vendor/products" wire:navigate><x-akar-shopping-bag />
                            Products

                            <span
                                class="{{ Route::currentRouteName() == 'vendor.products' ? 'absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-100-translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out' : 'absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 transition-transform ease-in-out' }}">

                            </span>
                        </a>

                    </li>
                    <li><a class="flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                            href="http://"><x-akar-grid />
                            Categories
                            <span
                                class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out"></span>

                        </a>


                    </li>
                    <li><a class="flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group"
                            href="http://"><x-akar-cart />
                            Orders
                            <span
                                class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out"></span>
                        </a>

                    </li>
                    <li><a class="flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group "
                            href="http://"><x-akar-envelope />
                            Messages
                            <span
                                class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out"></span></a>




                    </li>
                    <li><a class="flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group "
                            href="http://"><x-akar-coin />
                            Coupons
                            <span
                                class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out"></span>

                        </a>




                    </li>
                </div>
                <span class="py-2 px-3  border-b border-gray-200"></span>
                <div>
                    <li><a class="flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group "
                            href="http://"><x-akar-statistic-up />
                            Reports <span
                                class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out"></span></a>


                    </li>
                    <li><a class="flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group "
                            href="http://"><x-akar-star />
                            Reviews <span
                                class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out"></span></a>


                    </li>
                    <li><a class="flex gap-x-5 items-center py-2 text-gray-500 hover:text-indigo-600 group "
                            href="http://"><x-akar-gear />
                            Settings <span
                                class="absolute w-1.5 h-8 bg-indigo-600 rounded-r-full left-0 scale-y-0 -translate-x-full group-hover:scale-y-100 group-hover:translate-x-0 ease-in-out"></span></a>


                    </li>

                </div>
            </ul>
        </aside>
