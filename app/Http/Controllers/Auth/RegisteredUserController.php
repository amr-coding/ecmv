<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Seller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'full_address_street' => ['required', 'string', 'max:255'],
            // 'full_address_city' => ['required', 'string', 'max:255'],
            // 'full_address_state' => ['required', 'string', 'max:255'],
            // 'shop_name' => ['nullable', 'required_if:is_seller,true', 'string', 'max:255'],
        ]);
        $is_seller = $request->has('is_seller') ? 1 : 0;
        // dd($is_seller);
        $user = User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'phone_number' => $request['phone_number'],
            'zip_code' => $request['zip_code'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'seller' => $request->has('is_seller') ? 1 : 0,
        ]);

        // dd($request->has('is_seller') ? 1 : 0);
        $closedDatesString = $request->input('closed_dates');
        $closedDatesArray = explode(', ', $closedDatesString);

        // Reindex the array with numeric keys
        $closedDatesArray = array_values($closedDatesArray);
        // dd($closedDatesArray);
        $jsonClosedDates = json_encode($closedDatesArray);


        // Initialize an empty array to store the business hours
        $businessHours = [];

        // Loop through the days of the week and extract the selected opening and closing times
        $daysOfWeek = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
        foreach ($daysOfWeek as $day) {
            if ($request->has("business_hours.{$day}.open") && $request->has("business_hours.{$day}.close")) {
                $openTime = $request->input("business_hours.{$day}.open");
                $closeTime = $request->input("business_hours.{$day}.close");

                // Add the opening and closing times to the business hours array for the current day
                $businessHours[$day] = [
                    'open' => $openTime,
                    'close' => $closeTime,
                ];
            }
        }

        // Now, $businessHours will be an array containing the selected opening and closing times for each day
        // For example, if the user selected "10:00" as the open time and "18:00" as the close time for Monday,
        // and "08:00" as the open time and "16:00" as the close time for Sunday, $businessHours will be:
        // [
        //    'sunday' => ['open' => '08:00', 'close' => '16:00'],
        //    'monday' => ['open' => '10:00', 'close' => '18:00'],
        // ]

        // Convert the $businessHours array to a JSON string
        $jsonBusinessHours = json_encode($businessHours);

        // Now $jsonBusinessHours will contain the JSON representation of the business hours array
        // For example, the JSON string will be:
        // '{"sunday":{"open":"08:00","close":"16:00"},"monday":{"open":"10:00","close":"18:00"}}'

        // Save the JSON data to the 'business_hours' column in the sellers table
        // Assuming you have already created the seller record and retrieved the seller model, you can do:



        if ($request->has('is_seller') && $request['is_seller'] === 'true') {
            Seller::create([
                'user_id' => $user->id,
                'shop_name' => $request['shop_name'],
                'full_address_street' => $request['full_address_street'],
                'full_address_city' => $request['full_address_city'],
                'full_address_state' => $request['full_address_state'],
                'full_address_zip' => '2050', // You can adjust this value as needed.
                'business_hours' => $jsonBusinessHours, // Empty array if no closed dates are selected
                'calendar_year' => $jsonClosedDates, // Empty array if no closed dates are selected
            ]);
        }

        event(new Registered($user));


        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
