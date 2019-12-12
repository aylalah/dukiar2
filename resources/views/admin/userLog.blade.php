@extends('layouts.master')

@section('css')
        <!-- DataTables -->
        <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ URL::asset('assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('breadcrumb')
                            <h4 class="page-title">Dukia Members</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>                                
                                <li class="breadcrumb-item active">Dukia Members Tables</li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">

                    <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-account-multiple float-right"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3">Total Members</h6>
                                            <h4 class="mb-4">{{$count1}}</h4>
                                            {{-- <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-account-check float-right"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3">Total Active</h6>
                                            <h4 class="mb-4">{{$count2}}</h4>
                                            {{-- <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous period</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-account-remove float-right"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3">Total Suspended</h6>
                                            <h4 class="mb-4">{{$count3}}</h4>
                                            {{-- <span class="badge badge-warning"> 0% </span> <span class="ml-2">From previous period</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-account-key float-right"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3">Total New Members</h6>
                                            <h4 class="mb-4">{{$count4}}</h4>
                                            {{-- <span class="badge badge-info"> +89% </span> <span class="ml-2">From previous period</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                  
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Users Table</h4>
                                <p class="text-muted m-b-30 font-14">The above tabe shows the table data of all categories of app users</code>.
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Users ID</th>
                                        <th>Image</th> 
                                        <th>Name</th>
                                        <th>Dukia Member</th>
                                        <th>Dukia Club</th>
                                        <th>Status</th>
                                        <th>Action</th>                                                                               
                                    </tr>
                                    </thead>
                                    <tbody>
                                            
                                            @foreach ($data as $d)
                                    <tr>
                                        
                                        <td><a href="" >{{$d->user_id}}</a></td>
                                        <td><a href="{{ asset($d->image_path)}}"><img class="img-fluid rounded-circle" style="width:50px; height:50px" src="{{ asset('/'.$d->image_path)}}" /></a></td>
                                        <td>{{$d->first_name}} {{$d->last_name}}</td>
                                        <td>{{$d->role  }}</td> 
                                        <td><span class="badge badge-pill badge-success">{{$d->dukia_club}}</span></td>                                    
                                       @if ($d->status == "active")
                                       <td><span class="badge badge-pill badge-success">{{$d->status}}</span></td>
                                       @else
                                       <td><span class="badge badge-pill badge-danger">{{$d->status}}</span></td>
                                       @endif
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light"> <a href="{{ route('viewUser', $d->id)}}" style="color:beige;"><i class="fas fa-eye"></i></a></button>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-update-{{$d->id}}"> <a style="color:beige;"><i class="fas fa-user-alt-slash"></i></a></button>
                                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-delete-{{$d->id}}"> <a style="color:beige;" ><i class="fas fa-user-minus"></i></a></button>    
                                           
                                        </td>
                                    </tr>  
                                    <div class="modal fade bs-example-modal-update-{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-0">Center modal</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                        <p>You are about to change the users status.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light"><a style="color:beige;" href="{{ route('updateUser', $d->id)}}"><i class="fas fa-user-alt-slash"></i>Continue</a></button>
                                                        </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-delete-{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Center modal</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <p>You are about to delete the user account.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light"><a style="color:beige;"href="{{ route('deleteUser', $d->id)}}"><i class="fas fa-user-alt-slash"></i>Delete</a></button>
                                                        </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->                                  
                                    @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->              

            </div> <!-- end container-fluid -->
@endsection

@section('script')
        <!-- Required datatable js -->
        <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{ URL::asset('assets/pages/datatables.init.js')}}"></script>
@endsection