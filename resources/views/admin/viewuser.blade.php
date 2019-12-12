@extends('layouts.master')

@section('css')
    <!-- jvectormap -->
    <link href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
        <!-- X-editable css -->
        <link type="text/css" href="{{ URL::asset('assets/plugins/x-editable/css/bootstrap-editable.css')}}" rel="stylesheet">
@endsection

@section('breadcrumb')
                            <h4 class="page-title">Member Details</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin/')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('userLog')}}">Dukia Members</a></li>
                                <li class="breadcrumb-item active">Member Details</li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-lg-4">

                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="card-title font-20 mt-0">Member: <i class="mdi mdi-checkbox-blank-circle text-danger"></i>{{ $data[0] -> first_name}} {{ $data[0] -> last_name}}</h4>
                                    <h6 class="card-subtitle text-muted">ID:{{ $data[0] -> user_id}}</h6>
                                </div>
                                <img class="img-fluid" src="{{ asset('/'.$data[0]->image_path)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-20 mt-0">Location</h4>
                                    <p class="card-text">{{ $data[0] -> address}}.</p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Genarate password</a>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Genarate ID</a>
                                </div>
                            </div>

                            <div class="card m-b-30">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Location</h4>
                                        <p class="text-muted m-b-30 font-14">{{ $data[0] -> address}}.</p>
        
                                        <div id="uk" class="vector-map-height"></div>
        
                                    </div>
                                </div>
    
                        </div><!-- end col -->
                    <div class="col-8">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Dukia Club:</h4>
                                <p class="text-muted m-b-30 font-14"><span class="badge badge-pill badge-success">{{ $data[0] -> dukia_club}}</span></p>
                               
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 50%;">Parameters</th>
                                        <th>Values</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="color:brown; font-size:20px">Basic Informations</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                            <td>First Name</td>
                                            <td>
                                                    <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> first_name}}"  />
                                            </td>
                                        </tr>
                                    <tr>
                                        <td>Last Name </td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> last_name}}"  />
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>Gender </td>
                                            <td>
                                                    <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> gender}}"  />
                                            </td>
                                        </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> email}}"  />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BVN</td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> bvn}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>Date Of Birth</td>
                                            <td>
                                                    <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] ->dob }}" />
                                            </td>
                                        </tr>                            
                                    <tr>
                                        <td>Phone Contact</td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> phoneno}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>Location</td>
                                            <td>
                                                    <textarea type="text" disabled class="form-control" required name="name">{{ $data[0] -> address}}</textarea>
                                            </td>
                                        </tr>                                   
                                    
                                    {{-- <form class="" method="POST" action="/add-xrf">
                                        {{ csrf_field() }} --}}
                                    <tr>
                                        <td style="color:darkgreen; font-size:20px">Business Information</td>  
                                        <td></td>                                                                         
                                    </tr>
                                    
                                    <tr>
                                        <td>Business Name</td>
                                        <td>                                                        
                                            <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> business_name}}" />                                                                      
                                        </td>
                                </tr>
                                <tr>
                                        <td>Business Address</td>
                                        <td>                                                          
                                            <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] ->business_address}}" />                                                                            
                                        </td>
                                </tr>
                                <tr>
                                        <td>Date of Incorporation</td>
                                        <td>             
                                            <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> date_of_incorporation}}" />                                                                                                                          
                                        </td>
                                </tr>
                                <tr>
                                    <td>Business Phone Contact</td>
                                    <td><input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> contact_phone}}" /></td>                                                                                                                         
                                        
                                    
                                </tr>
                                <tr>
                                        <td>Contry of Incorporation</td>                                     
                                        <td><input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> country_of_incorporation}}"/>  </td>                                 
                                        
                                </tr>
                                <tr>
                                        <td>Tax Number</td>                                  
                                        <td><input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> tax_number}}"/></td>                               
                                </tr>
                                <tr>
                                        <td>Licence</td>                                 
                                        <td><input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> license}}" /></td>                                                                           
                                            
                                        
                                </tr>
                                <tr>
                                        <td>Business Address</td>                                    
                                        <td><input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> business_name}}" /></td>                                       
                                                
                                </tr>
                                


                                    <tr>
                                            <td style="color:darkblue; font-size:20px">Bank Information</td>
                                            <td></td>
                                            
                                        </tr>
                                    <tr>
                                        <td>Bank Name</td>
                                        <td>
                                            <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> bank_name}}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bank Account</td>
                                        <td>
                                                <input type="text" disabled class="form-control" required name="name" value="{{ $data[0] -> bank_account}}" />  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wallet</td>
                                        <td>
                                            <span class="badge badge-pill badge-primary">{{$data[0]-> wallet}}</span>
                                        </td>
                                    </tr>
                                    {{-- <tr>
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
                                    </tr> --}}
                                    <tr>
                                            <td style="color:darkblue; font-size:20px"></td>
                                            <td>
                                                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light"> <a href="" style="color:beige;">Update</a></button> 
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

             <!-- Jvector Map js -->
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jvectormap/gdp-data.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/jvectormap.init.js')}}"></script>

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