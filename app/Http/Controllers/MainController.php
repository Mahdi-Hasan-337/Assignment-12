<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function index() {
        $trips = Trip::all();
        $seatAllocations = SeatAllocation::all();
        return view('dashboard', compact('trips', 'seatAllocations'));
    }

    public function create() {
        $locations = Location::all();
        return view('create', compact('locations'));
    }

    public function booking($id) {
        $trip = Trip::find($id);
        return view('choose', compact('trip'));
    }

    public function store(Request $request) {
        $trip = new Trip;

        $trip->departure = $request->input('departure');
        $trip->destination = $request->input('destination');
        $trip->remaining_seat = $request->input('remaining_seat', 36);
        $trip->trip_date = $request->input('trip_date');
        $trip->trip_time = $request->input('trip_time');
        $trip->save();

        return redirect('/')->with('status', 'Added Successfully');
    }

    public function book(Request $request, $id) {
        $trip = Trip::find($id);

        $requestedQuantity = $request->input('quantity');

        if ($trip->remaining_seat >= $requestedQuantity) {
            $trip->remaining_seat -= $requestedQuantity;
            $trip->update();

            User::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
            ]);

            SeatAllocation::create([
                'trip_id' => $trip->id,
                'passenger_name' => $request->input('name'),
                'passenger_phone' => $request->input('phone'),
                'total_seat' => $request->input('quantity'),
            ]);

            return redirect('/')->with('status', 'Confirmed successfully');
        } else {
            return redirect('/')->with('status', 'Insufficient quantity to booked');
        }
    }

    public function delete($id) {
        $trip = Trip::find($id);

        $hasTrip = SeatAllocation::where('trip_id', $id)->exists();

        if ($hasTrip) {
            return redirect('/')->with('error', 'Maybe already seat booked for this trip. So you can\'t update or delete this trip');
        }

        $trip->delete();

        return redirect('/')->with('status', 'Deleted Successfully');
    }

    public function edit($id) {
        $trip = trip::find($id);
        return view('edit', compact('trip'));
    }

    public function update(Request $request, $id) {
        $trip = Trip::find($id);

        $hasTrip = SeatAllocation::where('trip_id', $id)->exists();

        if ($hasTrip) {
            return redirect('/')->with('error', 'Maybe already seat booked for this trip. So you can\'t update or delete this trip');
        }

        $trip->departure = $request->input('departure');
        $trip->destination = $request->input('destination');
        $trip->trip_date = $request->input('trip_date');
        $trip->trip_time = $request->input('trip_time');
        $trip->update();

        return redirect('/')->with('status', 'Updated Successfully');
    }
}
