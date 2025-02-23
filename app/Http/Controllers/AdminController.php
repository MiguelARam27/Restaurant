<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Member;
use App\Reservation;
use DB;
use Carbon\carbon;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){

        //income for the last 30 days
        $estimated_income_last_30 = DB::select(DB::raw('
        SELECT 
            (sum(guests_total) * 12) as total
        FROM reservations
        WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
         '));
     
         //total reservations for the last 30 days
         $total_customers_last_30 = DB::select(DB::raw('
         SELECT 
             sum(guests_total) as total
         FROM reservations
         WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
     '));

        //total reservations in the last month
        $total_reservations_last_30 = DB::select(DB::raw('
        SELECT 
            count(*) as total
        FROM reservations
        WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
    '));

        $total_employees = DB::select(DB::raw('
        select count(*) as total
        from  users
        inner join role_user on role_user.user_id = users.id
        inner join roles on roles.id = role_user.role_id
        where role_id = 2
    '));
        
    
        $latestReservations = Reservation::where('guests_total','>',0)->limit(5)->orderBy('created_at','desc')->get();
        
        return view('admin/dashboard',[
        'estimated_income_last30'=> $estimated_income_last_30[0]->total,
        'guestTotal'=>$total_customers_last_30[0]->total,
        'reservationsTotal'=>$total_reservations_last_30[0]->total,
        'totalEmployees' => $total_employees[0]->total,
        'latestReservations'=>$latestReservations
        ]);
    }

    public function dailyRevenueLast30(){

      
        return $estimated_income_daily_data = DB::select(DB::raw('
            SELECT 
                DATE_FORMAT(created_at,"%Y-%m-%d") as x, 
                (sum(guests_total) * 27 ) as y
            FROM Restaurant.reservations
            group by x desc;
        '));
    
    }


}
