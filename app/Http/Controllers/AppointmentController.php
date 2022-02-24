<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;

use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Appointment;
use Auth;
use Illuminate\Support\Facades\Response;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     // dd('welcome');
       // $appointments=Appointment::all();
        //get login user
        $user = Auth::user();

        $appointments= Appointment::where('is_cancelled',  '!=', 1 )->where('is_serviced', '!=', 1)->where('user_id', '=', $user->id)->paginate(10);

         return view('/bookAppointment', compact('appointments'))->with('success', 'Your appointment has been scheduled!, kindly wait for the approval');



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request)
    {
        //
       // dd($request);

          $request->validate([
              'appdate'=>'required',
              'apptime'=>'required'
          ]);

          //get login user
          $user = Auth::user();


            $data=$request->all();
            $data['user_id']=$user->id;
            $appointments= Appointment::where('is_cancelled',  '!=', 1 )->where('is_serviced', '!=', 1)->paginate(10);
            $userAppointment =Appointment::where('user_id','=',$user->id)->Where('is_serviced','==', 0)
                ->Where('is_cancelled', '==', 0)->where('is_serviced','==', 0)->get();




        if(!$userAppointment->isEmpty())
        {
            return back()->with('success','You cannot have other schedule while One is waiting!');

        }
        else{
            Appointment::create($data);

            return view('bookAppointment', compact('appointments'))->with('success','Faile Try Again!');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentRequest  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
