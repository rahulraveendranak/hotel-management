@extends('layouts.app-user')

@section('content')
<section>
           <!-- Page content-->
           <div class="content-wrapper">

            <div class="container-fluid">
              <div class="panel panel-default">
              <div class="panel-body">

               <div class="row">
               <div class="col-md-5">
                                                            <div class="form-group-edited">
                                                                <label for="device_uiid" class="col-md-5 info-title">Name</label>
                                                                <label for="values" class="col-md-6">{{$registrations->user_profile->name}}</label>

                                                                <label for="device_uiid" class="col-md-5 info-title">Gender</label>
                                                                <label for="values" class="col-md-6">{{$registrations->user_profile->gender}}</label>

                                                                <label for="device_uiid" class="col-md-5 info-title">Contact Number</label>
                                                                <label for="values" class="col-md-6">{{$registrations->user_profile->contact_no}}</label>

                                                                <label for="device_uiid" class="col-md-5 info-title">Address</label>
                                                                <label for="values" class="col-md-6">{{$registrations->user_profile->address}}</label>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group-edited">
                                                                <label for="device_uiid" class="col-md-4 info-title">Floor</label>
                                                                <label for="values" class="col-md-7">{{$registrations->floor->title}}</label>
      

                                                                <label for="device_uiid" class="col-md-4 info-title">Room Number</label>
                                                                <label for="values" class="col-md-5">{{$registrations->room->title}}</label>

                                                                <label for="device_uiid" class="col-md-4 info-title">From Date</label>
                                                                <label for="values" class="col-md-5">{{$registrations->from_date}}</label>

                                                                <label for="device_uiid" class="col-md-4 info-title">To Date</label>
                                                                <label for="values" class="col-md-5">{{$registrations->to_date}}</label>

                                                                <label for="device_uiid" class="col-md-4 info-title">Check In Time</label>
                                                                <label for="values" class="col-md-5">{{$registrations->check_in}}</label>

                                                                <label for="device_uiid" class="col-md-4 info-title">Current Booking Status</label>
                                                                <label for="values" class="col-md-5">{{$registrations->registration_status->title}}</label>
                                                            </div>
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
            $.ajax({

           type:"POST",
           headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
           url:"{{url('updateRegistration')}}",
           data: {"status_id" :status_id,
            "id" : id},
           success:function(res){ 
           console.log(res);              
            if(res){
                alert(id+registration_id);
            }else{
               $("#state").empty();
            }
           }
        });
        }
        </script>


@endsection