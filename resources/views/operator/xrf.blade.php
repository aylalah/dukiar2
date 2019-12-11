@extends('layouts.master')

@section('css')
        <!-- X-editable css -->
        <link type="text/css" href="{{ URL::asset('assets/plugins/x-editable/css/bootstrap-editable.css')}}" rel="stylesheet">
@endsection

@section('breadcrumb')
                            <h4 class="page-title">XRF Evaluation</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('transaction')}}">Transaction</a></li>
                                <li class="breadcrumb-item active">Form XRF</li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">XRF Transaction</h4>
                                <p class="text-muted m-b-30 font-14">ID: nkdlkncaionwenio320340848934rnirklfndf.</p>
                               
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 50%;">Parameters</th>
                                        <th>Values</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="color:brown; font-size:20px">Transaction Informations</td>
                                            @if ($data[0]->status == 'open')
                                            <td><span class="badge badge-pill badge-danger">{{$data[0]->status}}</span></td>
                                            @endif
                                            @if ($data[0]->status == 'cost')
                                            <td><span class="badge badge-pill badge-success">{{$data[0]->status}}</span></td> 
                                            @endif
                                            @if ($data[0]->status == 'checking')
                                            <td><span class="badge badge-pill badge-warning">{{$data[0]->status}}</span></td> 
                                            @endif
                                            @if ($data[0]->status == 'confirmed')
                                            <td><span class="badge badge-pill badge-primary">{{$data[0]->status}}</span></td> 
                                            @endif
                                         
                                    </tr>
                                    <tr>
                                            <td>User Barcode</td>
                                            <td>
                                                    <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> user_id}}"  />
                                            </td>
                                        </tr>
                                    <tr>
                                        <td>User ID, </td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> user_id}}"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Box ID</td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> box_id}}"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Box Location</td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> location_name}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>GPS Location</td>
                                            <td>
                                                    <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> gps_location}}" />
                                            </td>
                                        </tr>
                                    <tr>
                                        <td>User Gold weight</td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> user_weight}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>Transaction Date and Time</td>
                                            <td>
                                                    <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> created_at}}" />
                                            </td>
                                        </tr>

                                    
                                    <form class="" method="POST" action="/add-xrf">
                                        {{ csrf_field() }}
                                    <tr>
                                            <td style="color:darkgreen; font-size:20px">XRF Informations</td>
                                            @if ($data[0]->status == 'open')
                                                <td></td>
                                            @else
                                            <td><span class="badge badge-pill badge-success">Cost</span></td>
                                            @endif
                                                                                       
                                        </tr>
                                    <tr>
                                        
                                        <td>XRF Value</td>
                                        <td>
                                            @if ($data[0]->status == 'open')
                                                <input type="text" class="form-control" required name="xrfvalue" value="{{ $data[0] -> xrf_value}}" />
                                                <input type="hidden" class="form-control" name="id" value="{{ $data[0] -> id}}" />
                                            @else
                                                <input type="text" disabled class="form-control" required name="xrfvalue" value="{{ $data[0] -> xrf_value}}" />
                                                <input type="hidden" disabled class="form-control" name="id" value="{{ $data[0] -> id}}" />
                                            @endif
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Karate</td>
                                        <td>
                                            @if ($data[0]->status == 'open')
                                                <input type="text" class="form-control" required name="karate" value="{{ $data[0] -> karate}}" />
                                            @else
                                                <input type="text" disabled class="form-control" required name="karate" value="{{ $data[0] -> karate}}" />
                                            @endif
                                                
                                        </td>
                                    </tr>
                                    <tr>
                                            <td></td>
                                            <td>
                                                @if ($data[0]->status == 'open')
                                                    <button type="submit" class="btn btn-secondary btn-sm waves-effect waves-light"> <a style="color:beige;"><i class="fas fa-user-edit"></i>Generate Price</a></button> 
                                                @else
                                                    <button type="submit" disabled class="btn btn-secondary btn-sm waves-effect waves-light"> <a style="color:beige;"><i class="fas fa-user-edit"></i>Generate Price</a></button> 
                                                @endif
                                                    
                                            </td>
                                        </tr>
                                    </form>


                                    <tr>
                                            <td style="color:darkblue; font-size:20px">Price Evaluation</td>
                                            @if ($data[0]->status == 'checking')
                                            <td><span class="badge badge-pill badge-warning">Checking</span></td>
                                            @else
                                            <td></td>
                                            @endif
                                           
                                        </tr>
                                    <tr>
                                        <td>Cost Price</td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> cost}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payer 1</td>
                                        <td>
                                            <span class="badge badge-pill badge-primary">{{$data[0]->payer1_status}}</span>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payer 2</td>
                                        <td>
                                            <span class="badge badge-pill badge-primary">{{$data[0]->payer2_status}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payer 3</td>
                                        <td>
                                            <span class="badge badge-pill badge-primary">{{$data[0]->payer3_status}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td style="color:darkblue; font-size:20px">Invoice</td>
                                            <td>
                                                    <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light"> <a href="" style="color:beige;"><i class="fas fa-user-edit"></i>Print Invoice</a></button> 
                                            </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                            <td style="color:darkblue; font-size:20px"></td>
                                            <td>
                                                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light"> <a href="{{route('transaction')}}" style="color:beige;">Cloce Transaction</a></button> 
                                            </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
        
            </div> <!-- end container -->
@endsection

@section('script')
        <!-- XEditable Plugin -->
        <script src="{{ URL::asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/x-editable/js/bootstrap-editable.min.js')}}"></script>
        {{-- <script src="{{ URL::asset('assets/pages/xeditable.js')}}"></script> --}}
        <script>
            /*
 Template Name: Lexa - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Xeditable js
 */

$(function () {

//modify buttons style
$.fn.editableform.buttons =
    '<button type="submit" class="btn btn-success editable-submit btn-sm waves-effect waves-light"><i class="mdi mdi-check"></i></button>' +
    '<button type="button" class="btn btn-danger editable-cancel btn-sm waves-effect waves-light"><i class="mdi mdi-close"></i></button>';


//inline


$('#inline-username').editable({
    type: 'text',
    pk: 1,
    name: 'username',
    title: 'Enter username',
    mode: 'inline',
    inputclass: 'form-control-sm'
});

$('#inline-firstname').editable({
    validate: function (value) {
        if ($.trim(value) == '') return 'This field is required';
    },
    mode: 'inline',
    inputclass: 'form-control-sm'
});

$('#inline-sex').editable({
    prepend: "not selected",
    mode: 'inline',
    inputclass: 'form-control-sm',
    source: [
        {value: 1, text: 'Male'},
        {value: 2, text: 'Female'}
    ],
    display: function (value, sourceData) {
        var colors = {"": "#98a6ad", 1: "#5fbeaa", 2: "#5d9cec"},
            elem = $.grep(sourceData, function (o) {
                return o.value == value;
            });

        if (elem.length) {
            $(this).text(elem[0].text).css("color", colors[value]);
        } else {
            $(this).empty();
        }
    }
});

$('#inline-status').editable({
    mode: 'inline',
    inputclass: 'form-control-sm'
});

$('#inline-group').editable({
    showbuttons: false,
    mode: 'inline',
    inputclass: 'form-control-sm'
});

$('#inline-dob').editable({
    mode: 'inline',
    inputclass: 'form-control-sm'
});

$('#inline-comments').editable({
    showbuttons: 'bottom',
    mode: 'inline',
    inputclass: 'form-control-sm'
});


});
        </script>
@endsection