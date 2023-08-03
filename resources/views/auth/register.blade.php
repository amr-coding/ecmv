<x-guest-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Phonr Number -->
        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" name="phone_number" :value="old('phone_number')" required />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>
        <!-- Zip Code -->
        <div class="mt-4">
            <x-input-label for="zip_code" :value="__('Zip Code')" />
            <x-text-input id="zip_code" class="block mt-1 w-full" name="zip_code" :value="old('zip_code')" required />
            <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="form-group row seller-fields " id="seller-info" style="">
            <!-- Additional seller fields here -->

            <!-- Shop Name -->
            <div class="mt-4">
                <x-input-label for="shop_name" :value="__('Shop Name')" />
                <x-text-input id="shop_name" :value="old('shop_name')" class="block mt-1 w-full form-control" name="shop_name"
                    autofocus />
                <x-input-error :messages="$errors->get('shop_name')" class="mt-2" />
            </div>
            <style>
                /* Customize tooltip styles */
                .tooltip {
                    /* Add your preferred tooltip styles using Tailwind CSS classes */
                    /* For example: */
                    background-color: #333;
                    color: #fff;
                    padding: 5px;
                    border-radius: 4px;
                }
            </style>
            <!-- Shop Full Address -->
            <div class="mt-4 ">
                <div class="flex gap-3">
                    <x-input-label for="full_address_street" :value="__('Shop Full Adderss')" />
                    <div class="">

                        <svg data-tooltip-target="tooltip-animation"
                            class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div id="tooltip-animation" role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            This address will be used to inform buyer of pickup location.
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>

                <x-text-input id="full_address_street" :value="old('full_address_street')" class="block mt-1 w-full form-control"
                    name="full_address_street" autofocus />
                <x-input-error :messages="$errors->get('full_address_street')" class="mt-2" />
            </div>
            <!-- Shop City -->
            <div class="mt-4">
                <x-input-label for="full_address_city" :value="__('City')" />
                <x-text-input id="full_address_city" :value="old('full_address_city')" class="block mt-1 w-full form-control"
                    name="full_address_city" autofocus />
                <x-input-error :messages="$errors->get('full_address_city')" class="mt-2" />
            </div>
            <!-- Shop State -->
            <div class="mt-4">
                <x-input-label for="full_address_state" :value="__('State')" />
                <x-text-input id="full_address_state" :value="old('full_address_state')" class="block mt-1 w-full form-control"
                    name="full_address_state" autofocus />
                <x-input-error :messages="$errors->get('full_address_state')" class="mt-2" />
            </div>
            <!-- Shop Zip Code -->
            <div class="mt-4">
                <x-input-label for="full_address_zip" :value="__('Shop Zip Code')" />
                <x-text-input id="full_address_zip" :value="old('full_address_zip')" class="block mt-1 w-full form-control"
                    name="full_address_zip" autofocus />
                <x-input-error :messages="$errors->get('full_address_zip')" class="mt-2" />
            </div>
            <div class="flex flex-col mt-4 gap-1">
                {{-- sunday div start --}}
                <div class="form-group flex gap-3 items-center">
                    <label for="sunday"
                        class="block font-medium text-sm text-gray-700 dark:text-gray-300 flex-grow">
                        Sunday:
                    </label>


                    <input type="checkbox" value="sunday" id="hs-sunday-usage" data-target="sunday_hours"
                        class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 weekday-toggle dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800 

before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
                    <label for="hs-sunday-usage" class="sr-only">switch</label>




                    <div id="sunday_hours">
                        <!-- Dropdown for Opening Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[sunday][open]">
                            <option value="">Opening Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00</option>
                            @endfor
                        </select>

                        <!-- Dropdown for Closing Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[sunday][close]">
                            <option value="">Closing Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00</option>
                            @endfor
                        </select>
                    </div>
                </div>

                {{-- div end --}} {{-- div start --}}
                <div class="form-group flex gap-3 items-center">
                    <label for="monday"
                        class="block font-medium text-sm text-gray-700 dark:text-gray-300 flex-grow">
                        Monday:
                    </label>


                    <input type="checkbox" value="monday" id="hs-monday-usage" data-target="monday_hours"
                        class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 weekday-toggle dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
                    <label for="hs-monday-usage" class="sr-only">switch</label>




                    <div id="monday_hours">
                        <!-- Dropdown for Opening Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[monday][open]">
                            <option value="">Opening Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00</option>
                            @endfor
                        </select>

                        <!-- Dropdown for Closing Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[monday][close]">
                            <option value="">Closing Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00</option>
                            @endfor
                        </select>
                    </div>
                </div>
                {{-- div start --}}
                <div class="form-group flex gap-3 items-center">
                    <label for="tuesday"
                        class="block font-medium text-sm text-gray-700 dark:text-gray-300 flex-grow">
                        Tuesday:
                    </label>


                    <input type="checkbox" value="tuesday" id="hs-tuesday-usage" data-target="tuesday_hours"
                        class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 weekday-toggle dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
                    <label for="hs-tuesday-usage" class="sr-only">switch</label>




                    <div id="tuesday_hours">
                        <!-- Dropdown for Opening Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[tuesday][open]">
                            <option value="">Opening Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00</option>
                            @endfor
                        </select>

                        <!-- Dropdown for Closing Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[tuesday][close]">
                            <option value="">Closing Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>
                    </div>
                </div>
                {{-- div start --}}
                <div class="form-group flex gap-1 items-center">
                    <label for="wednesday" class=" font-medium text-sm text-gray-700 dark:text-gray-300 flex-grow">
                        Wednesday:
                    </label>


                    <input type="checkbox" value="wednesday" id="hs-wednesday-usage" data-target="wednesday_hours"
                        class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 weekday-toggle dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
                    <label for="hs-wednesday-usage" class="sr-only">switch</label>




                    <div id="wednesday_hours" class="flex justify-start">
                        <!-- Dropdown for Opening Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[wednesday][open]">
                            <option value="">Opening Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>

                        <!-- Dropdown for Closing Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[wednesday][close]">
                            <option value="">Closing Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>
                    </div>
                </div>
                {{-- div start --}}
                <div class="form-group flex gap-3 items-center">
                    <label for="thursday"
                        class="block font-medium text-sm text-gray-700 dark:text-gray-300 flex-grow">
                        Thursday:
                    </label>


                    <input type="checkbox" value="thursday" id="hs-thursday-usage" data-target="thursday_hours"
                        class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 weekday-toggle dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
                    <label for="hs-thursday-usage" class="sr-only">switch</label>




                    <div id="thursday_hours">
                        <!-- Dropdown for Opening Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[thursday][open]">
                            <option value="">Opening Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>

                        <!-- Dropdown for Closing Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[thursday][close]">
                            <option value="">Closing Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>
                    </div>
                </div>

                {{-- div end --}} {{-- div start --}}
                <div class="form-group flex gap-3 items-center">
                    <label for="friday"
                        class="block font-medium text-sm text-gray-700 dark:text-gray-300 flex-grow">
                        Friday:
                    </label>


                    <input type="checkbox" value="friday" id="hs-friday-usage" data-target="friday_hours"
                        class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 weekday-toggle dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800

before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
                    <label for="hs-friday-usage" class="sr-only">switch</label>




                    <div id="friday_hours">
                        <!-- Dropdown for Opening Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[friday][open]">
                            <option value="">Opening Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>

                        <!-- Dropdown for Closing Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[friday][close]">
                            <option value="">Closing Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>
                    </div>
                </div>
                {{-- div start --}}
                <div class="form-group flex gap-3 items-center">
                    <label for="saturday"
                        class="block font-medium text-sm text-gray-700 dark:text-gray-300 flex-grow">
                        Saturday:
                    </label>


                    <input type="checkbox" value="saturday" id="hs-saturday-usage" data-target="saturday_hours"
                        class="relative w-[3.25rem] h-7 bg-gray-100 checked:bg-none checked:bg-blue-600 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 border border-transparent ring-1 ring-transparent focus:border-blue-600 focus:ring-blue-600 ring-offset-white focus:outline-none appearance-none dark:bg-gray-700 weekday-toggle dark:checked:bg-blue-600 dark:focus:ring-offset-gray-800 

before:inline-block before:w-6 before:h-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200">
                    <label for="hs-saturday-usage" class="sr-only">switch</label>




                    <div id="saturday_hours">
                        <!-- Dropdown for Opening Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[saturday][open]">
                            <option value="">Opening Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>

                        <!-- Dropdown for Closing Time -->
                        <select
                            class="w-32 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            name="business_hours[saturday][close]">
                            <option value="">Closing Time</option>
                            @for ($i = 0; $i < 24; $i++)
                                <option value="{{ sprintf('%02d', $i) }}:00">{{ sprintf('%02d', $i) }}:00
                                </option>
                            @endfor
                        </select>
                    </div>
                    {{-- div end --}}
                    {{-- div end --}}

                    {{-- div end --}}

                </div>

                {{-- div end --}}


                {{-- div end --}}
            </div>

            <script>
                const weekdayToggles = document.querySelectorAll('.weekday-toggle');

                weekdayToggles.forEach(toggleSwitch => {
                    const targetId = toggleSwitch.dataset.target;
                    const targetDiv = document.getElementById(targetId);

                    // Get the input fields for opening and closing times inside the targetDiv
                    const openingTimeInput = targetDiv.querySelector('select[name$="[open]"]');
                    const closingTimeInput = targetDiv.querySelector('select[name$="[close]"]');

                    targetDiv.style.display = 'none';
                    toggleSwitch.addEventListener('click', function() {
                        if (toggleSwitch.checked) {
                            targetDiv.style.display = 'block';
                            openingTimeInput.required = true;
                            closingTimeInput.required = true;
                        } else {
                            // If the switch is unchecked, set the value of opening and closing time inputs to empty
                            openingTimeInput.value = '';
                            closingTimeInput.value = '';
                            targetDiv.style.display = 'none';
                        }
                    });
                });
            </script>



            <div class="mt-4">
                <input type="text"
                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    name="closed_dates" id="closed-dates-input" placeholder="Select closed dates">
            </div>

        </div>
        <div class="flex flex-row-reverse justify-between items-center mt-4">

            <div class="flex items-center justify-end ">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>


                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="flex flex-row gap-2 items-center">
                <x-input-label for="is_seller" :value="__('Seller?')" />
                <input type="checkbox" name="is_seller" id="is_seller" value="false" class="form-control">
            </div>
            {{-- <x-input-error :messages="$errors->get('is_seller')" class="mt-2" /> --}}
        </div>
    </form>
    <script>
        const isSellerCheckbox = document.getElementById('is_seller');
        document.getElementById('seller-info').style.display = 'none';
        // Add an event listener to the checkbox to toggle the value
        isSellerCheckbox.addEventListener('click', function() {
            // If the checkbox is checked, set the value to 1, otherwise set it to 0
            isSellerCheckbox.value = this.checked ? 'true' : 'false';

            if (this.checked) {
                document.getElementById('seller-info').style.display = 'block';
            } else {
                document.getElementById('seller-info').style.display = 'none';
            }
        });
    </script>
    <script>
        flatpickr('#closed-dates-input', {
            mode: 'multiple',
            dateFormat: 'Y-m-d',
        });
    </script>



</x-guest-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
