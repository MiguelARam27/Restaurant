<?php

namespace App\Http\Controllers\admin;
use App\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $reservations = Reservation::paginate(10); 
        return view('admin/reservations/all',['reservations'=>$reservations]);
    }
    public function create(){

        return view('admin/reservations/create');
    }

    public function edit($id){
        $reservation = Reservation::find($id);
        
        return view('admin/reservations/edit', [
            'category' => $reservation
        ]);

    }
    public function update($id){
    
        request()->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'time' => ['required', 'string'],
            'guests_total'=>['required','string']
            
        ]);
        
        $reservation = Reservation::find($id);
        $reservation->firstName = request('firstName');
        $reservation->lastName = request('lastName');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->time = request('time');
        $reservation->guest_total = request('guest_total');
        $reservation->save();

        return redirect('/admin/reservations');
    }

    public function delete($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/admin/reservations');
    }
}
