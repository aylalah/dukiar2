@extends('layouts.master')

@section('breadcrumb')
                            <h4 class="page-title">Google Maps</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                                <li class="breadcrumb-item active">Google Maps</li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Markers</h4>
                                <p class="text-muted m-b-30 font-14">Example of google maps.</p>

                                <div id="gmaps-markers" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Overlays</h4>
                                <p class="text-muted m-b-30 font-14">Example of google maps.</p>

                                <div id="gmaps-overlay" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Street View Panoramas</h4>
                                <p class="text-muted m-b-30 font-14">Example of google maps.</p>

                                <div id="panorama" class="gmaps-panaroma"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Map Types</h4>
                                <p class="text-muted m-b-30 font-14">Example of google maps.</p>

                                <div id="gmaps-types" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container-fluid -->
@endsection

@section('script')
        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        
        <!-- Gmaps file -->
        <script src="{{ URL::asset('assets/plugins/gmaps/gmaps.min.js')}}"></script>
@endsection

@section('script-bottom')
        <!-- demo codes -->
        <script src="{{ URL::asset('assets/pages/gmaps.js')}}"></script>
@endsection