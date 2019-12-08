@extends('layouts.master')

@section('css')
<!--calendar css-->
<link href="{{ URL::asset('assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />
@endsection

@section('breadcrumb')
                            <h4 class="page-title">Calendar</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">More</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">
                  
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div id='calendar'></div>

                                <div style='clear:both'></div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div> <!-- end container-fluid -->   
@endsection

@section('script')
<script src="{{ URL::asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
<script src="{{ URL::asset('assets/pages/calendar-init.js')}}"></script>
@endsection