<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Illuminate\Http\Request;

use Auth;

use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use function view;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $appointments=Appointment::where('is_approved','==',0)->where('is_cancelled','==',0)->where('is_serviced','==',0)->get();




        return view('superadmin.dashboard', compact('appointments'));
    }

    public  function  takeAction(Request $request)
    {


        $apptoChange=Appointment::find($request['appointmentID']);


      //  dd($apptoChange);

        if($request->adminacx==1)
        {
            $apptoChange->is_approved=1;

        }elseif ($request->adminacx==2)
        {
            $apptoChange->is_cancelled=1;
        }elseif ($request->adminacx==3)
        {
            $apptoChange->is_serviced=1;
        }
        $apptoChange->save();

       return $this->index();

    }



}
