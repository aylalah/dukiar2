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
                            <h4 class="page-title">Admin Log</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>                                
                                <li class="breadcrumb-item active">Admin Tables</li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">
                  
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Admin Table</h4>
                                <p class="text-muted m-b-30 font-14">The above tabe shows the table data of all categories of Admin.
                                </p>
                                <button type="button" class="btn btn-primary float-right waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg"><a style="color:beige;" >Add Admin</a></button><br><br>

                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="mySmallModalLabel">Add New Admin</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <h4 class="mt-0 header-title">Set Up Admin</h4>
                                <p class="text-muted m-b-30 font-14">These input are required to set up a new admin. The login information would be sent to his/her email.</p>

                                <form class="" method="POST" action="/add-admin">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Admin Role</label>                                        
                                        <select class="custom-select" name="role_id">                                                   
                                            @foreach ($role as $r)
                                                <option value="{{$r->id}}">{{$r->role_name}}</option>
                                            @endforeach 
                                            
                                        </select>                                            
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>                                        
                                                <select class="custom-select" name="location">
                                                    @foreach ($location as $l)
                                                        <option value="{{$l->id}}">{{$l->location_name}}</option>
                                                    @endforeach
                                                </select>
                                            
                                    </div>

                                    <div class="form-group">
                                            <label>E-Mail</label>
                                            <div>
                                                <input type="email" class="form-control" required name="email"
                                                        parsley-type="email" placeholder="Enter a valid e-mail"/>
                                            </div>
                                        </div>                                  
                                    
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Image</th> 
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Position</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Action</th>                                                                               
                                        </tr>
                                        </thead>
                                        <tbody>
                                                
                                                @foreach ($data as $d)
                                        <tr>                                            
                                            <td>{{$d->id}}</td>
                                            <td><a href="{{url('/')}}/assets/images/users/{{$d->image_path}}"><img class="img-fluid rounded-circle" style="width:50px; height:50px" src="{{url('/')}}/assets/images/users/{{$d->image_path}}" /></a></td>
                                            <td>{{$d-> name}}</td>
                                            <td>{{$d-> email}}</td>
                                            <td>{{$d->role_name}}</td>
                                            <td>{{$d->location_name}}</td>                                    
                                            @if ($d->status == "active")
                                            <td><span class="badge badge-pill badge-success">{{$d->status}}</span></td>
                                            @else
                                            <td><span class="badge badge-pill badge-danger">{{$d->status}}</span></td>
                                            @endif
                                            <td><button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-update-{{$d->id}}"> <a style="color:beige;"><i class="fas fa-user-alt-slash"></i></a></button>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-edit-{{$d->id}}"> <a style="color:beige;"><i class="fas fa-user-edit"></i></a></button> 
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-delete-{{$d->id}}"> <a style="color:beige;"><i class="fas fa-user-times"></i></a></button>    
                                                
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
                                                            <p>You are about to change the admin status.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light"><a style="color:beige;" href="{{ route('updateAdmin', $d->id)}}"><i class="fas fa-user-alt-slash"></i>Continue</a></button>
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
                                                                <p>You are about to delete the admin account.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light"><a style="color:beige;" href="{{ route('deleteAdmin', $d->id)}}"><i class="fas fa-user-alt-slash"></i>Delete</a></button>
                                                            </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                            <div class="modal fade bs-example-modal-edit-{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">Center modal</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" class="" action="/edit-Admin">
                                                                {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <div>
                                                                        <input type="text" class="form-control" value="{{$d-> name}}" name="name"
                                                                                parsley-type="text" placeholder="Enter a valid Name"/>
                                                                        <input type="hidden" value="{{$d->id}}" name="id">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>E-Mail</label>
                                                                    <div>
                                                                        <input type="email" value="{{$d->email}}" class="form-control" required name="email"
                                                                                parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Admin Role</label>                                        
                                                                    <select class="custom-select" name="role_id">                                                   
                                                                        @foreach ($role as $r)
                                                                            <option value="{{$r->id}}">{{$r->role_name}}</option>
                                                                        @endforeach 
                                                                        
                                                                    </select>                                            
                                                                </div> 
                                                                <div class="form-group">
                                                                    <label>Location</label>                                        
                                                                            <select class="custom-select" name="location">
                                                                                @foreach ($location as $l)
                                                                                    <option value="{{$l->id}}">{{$l->location_name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        
                                                                </div>                                                            
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light"><a style="color:beige;"><i class="fas fa-user-alt-slash"></i>Update</a></button>
                                                                </div>
                                                            </form>
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