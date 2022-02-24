<@extends('layouts.apps')

@section('content')
    <div class="container">
        <h4>welcome  admin</h4>
        <hr>
        <div class="row ">

            <div class="col-md-2">
                <ul class="list-group">

                    <li class="list-group-item"><a href="{{route('appointment')}}" class="nav-link"> Approved </a></li>
                    <li class="list-group-item"><a href="{{route('appointment')}}" class="nav-link"> Waiting </a></li>
                    <li class="list-group-item"><a href="{{route('appointment')}}" class="nav-link"> Cancelled </a></li>


                </ul>

            </div>
              <div class="col-md-8">
                  <table class="table">
                      <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Date</th>
                          <th scope="col">Time</th>
                          <th scope="col">Purpose</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      $x=1;
                      ?>
                      @foreach($appointments as $key => $app)
                          <tr>
                              <th scope="row">{{$x++}}</th>
                              <td>{{$app->appdate}}</td>
                              <td>{{$app->apptime}}</td>
                              <td>{{$app->note}}</td>
                              <td>@if($app->is_approved ==1)<
                                  span class="btn btn-success btn-sm">Approved</span>
                                  @else
                                      <span class="btn btn-warning btn-sm">waiting</span>
                                  @endif
                              </td>
                              <td>   <form method="POST" action="{{ route('admin.adminaction') }}">
                                      @csrf
                                      <input type="hidden" name="appointmentID" value="{{$app->id}}">
                                      <select name="adminacx" class="form-control">
                                          <option disabled selected>--Select Action--</option>
                                          <option value="1">Approve Schedule</option>
                                          <option value="2">Cancel Schedule </option>
                                          <option value="3">Is Serviced </option>
                                      </select>
                                     <button type="submit" class="btn btn-sm btn-primary">change</button>
                                  </form> </td>


                          </tr>
                      @endforeach



                      </tbody>
                  </table>
              </div>




        </div>
        <div>




        </div>
    </div>
    </div>


@endsection
