@extends('layouts.app-admin')

@section('content')
<section>
           <!-- Page content-->
           <div class="content-wrapper">

            <div class="container-fluid">
              <div class="panel panel-default">
              <div class="panel-body">

                <div class="table-responsive">
                              <table id="datatable2" class="table table-striped table-hover">
                                 <thead>
                                    <tr>
                                       <th>Customer Details</th>
                                       <th>Floor & Room</th>
                                       <th>From date</th>
                                       <th>To date</th>
                                       <th>Checkin Time</th>
                                       <th>Status</th>
                                       <th>Change Status</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                     @foreach($registrations as $registration)
                                    <tr>
                                      <td>{{$registration->user_profile->name}},{{$registration->user_profile->gender}},{{$registration->user_profile->address}},{{$registration->user_profile->contact_no}}</td>
                                      <td>{{$registration->floor->title}}-{{$registration->room->title}}</td>
                                      <td>{{$registration->from_date}}</td>
                                      <td>{{$registration->to_date}}</td>
                                      <td>{{$registration->check_in}}</td>
                                      <td>{{$registration->registration_status->title}}</td>
                                      <td>
                                      <p id="registration_id" name ="registration_id" hidden>{{$registration->id}}</p>
                                      <select id="registration_status_id" name="registration_status_id" class="form-group" >
                                      <option value="" selected disabled>Select</option>
                                        @foreach($statuses as $status)
                                            <option value="{{$status->id}}"> {{$status->title}}</option>
                                        @endforeach
                                        </select>
                                        <a href="" onclick="add('{{$registration->id}}')"><i class="fa fa-pencil-square-o"></i></a> 

                                     </td>
                                    </tr>
                                    @endforeach
                                   
                                 </tbody>
                              </table>
                           </div>


               </div>
            </div>



          </div>
        </section>
        <script src="{{ asset('design/jquery.js') }}"></script>
        
<script type="text/javascript">
        function add(id)
        {
            var status_id = $('#registration_status_id').val();
            var token = $('meta[name="csrf-token"]').attr('content');

            console.log(status_id+" "+id);
            $.ajax({

           type:"POST",
           url:"{{url('updateRegistration')}}",
           data: {status_id :status_id,
            id : id,
            _token:token},
           success:function(res){ 
           console.log(res); 
           location.reload();             
            if(res){
               //  alert(res);
            }else{
               $("#state").empty();
            }
           }
        });
        }
        </script>


@endsection