@extends('layouts.apps')

@section('content')
<div class="container">

        <div class="row ">

                <div class="col-md-2">
                        <ul>

                        <li><a href="#"> book appointment</a></li>
                        <li><a href="#"> Histrory</a></li>

                        </ul>

                </div>
                <div class="col-md-6">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{ Session::get('success') }}</li>
                        </ul>
                    </div>
                @endif





                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Book Appointment
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">

      <form method="POST" action="{{route('bookappointment') }}">
                      @csrf
                        <div class="form-group">
                            <label>
                                Appointment Date
                            </label>
                            <input type="date" class="form-control" name="appdate" />
                        </div>

                        <div class="form-group">
                            <label>
                                Appointment Time
                            </label>
                            <input type="time"  class="form-control" name="apptime" />
                        </div>

                        <div class="form-group">
                            <label>
                                Appointment Date
                            </label>
                            <textarea type="date" class="form-control" name="note" ></textarea>
                        </div>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

                </div>
                <div class="col-md-8">

                <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
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


                        </tr>
                       @endforeach



                      </tbody>
                    </table>
<span class="col-md-2">
{{ $appointments->links('pagination::bootstrap-4') }}
</span>
                </div>

        <div>




</div>
</div>
</div>


@endsection
