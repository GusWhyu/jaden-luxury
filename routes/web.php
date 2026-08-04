<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\ExploreVillas;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/explore', ExploreVillas::class);

Route::get('/villa/{id}', function ($id) {
    $villa = \App\Models\Villa::findOrFail($id);
    return view('detail', ['villa' => $villa]);
});

Route::get('/checkout/{id}', function (\Illuminate\Http\Request $request, $id) {
    $villa = \App\Models\Villa::findOrFail($id);
    $check_in = $request->input('check_in');
    $check_out = $request->input('check_out');
    $guests = $request->input('guests', 2);
    
    $nights = 0;
    if ($check_in && $check_out) {
        $start = \Carbon\Carbon::parse($check_in);
        $end = \Carbon\Carbon::parse($check_out);
        $nights = $start->diffInDays($end);
    }
    
    $total_price = $villa->price_per_night * max(1, $nights);

    return view('checkout', [
        'villa' => $villa,
        'check_in' => $check_in,
        'check_out' => $check_out,
        'guests' => $guests,
        'nights' => $nights,
        'total_price' => $total_price
    ]);
});

Route::post('/checkout/{id}', function (\Illuminate\Http\Request $request, $id) {
    $villa = \App\Models\Villa::findOrFail($id);
    
    $check_in = $request->input('check_in');
    $check_out = $request->input('check_out');
    
    $nights = 1;
    if ($check_in && $check_out) {
        $start = \Carbon\Carbon::parse($check_in);
        $end = \Carbon\Carbon::parse($check_out);
        $nights = $start->diffInDays($end);
    }

    $total_price = $villa->price_per_night * max(1, $nights);

    $booking = \App\Models\Booking::create([
        'user_id' => null,
        'villa_id' => $id,
        'check_in_date' => $check_in ?? now()->format('Y-m-d'),
        'check_out_date' => $check_out ?? now()->addDays($nights)->format('Y-m-d'),
        'guests' => $request->input('guests', 2),
        'total_price' => $total_price,
        'status' => 'confirmed',
        'guest_name' => $request->input('first_name') . ' ' . $request->input('last_name'),
        'guest_email' => $request->input('guest_email'),
        'special_requests' => $request->input('special_requests'),
    ]);

    return view('success', ['villa' => $villa, 'total_price' => $total_price, 'booking' => $booking]);
});
Route::get('/experiences', function () {
    return view('experiences');
});

Route::get('/contact', function () {
    return view('contact');
});
