<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required',
            'arrival'=>'required',
            'kids',
            'adults'=>'required',
            'description'
        ]);

        $booking = new Booking;
        $booking->fullname = $request->input('fullname');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->arrival = $request->input('arrival');
        $booking->kids = $request->input('kids');
        $booking->adults = $request->input('adults');
        $booking->description = $request->input('description');
       $booking->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
