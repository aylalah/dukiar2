@extends('layouts.master')

@section('css')
        <!-- jvectormap -->
        <link href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
@endsection

@section('breadcrumb')
                            <h4 class="page-title">Vector Maps</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                                <li class="breadcrumb-item active">Vector Maps</li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">
                  
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">World Map</h4>
                                <p class="text-muted m-b-30 font-14">Example of vector map.</p>

                                <div id="world-map-markers" class="vector-map-height"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">USA Map</h4>
                                <p class="text-muted m-b-30 font-14">Example of vector map.</p>

                                <div id="usa" class="vector-map-height"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">UK Map</h4>
                                <p class="text-muted m-b-30 font-14">Example of vector map.</p>

                                <div id="uk" class="vector-map-height"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Chicago Map</h4>
                                <p class="text-muted m-b-30 font-14">Example of vector map.</p>

                                <div id="chicago" class="vector-map-height"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container-fluid -->
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
@endsection