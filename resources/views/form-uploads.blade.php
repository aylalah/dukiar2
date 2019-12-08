@extends('layouts.master')

@section('css')
        <!-- Dropzone css -->
        <link href="{{ URL::asset('assets/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
                            <h4 class="page-title">Form Upload</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Form Upload</li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Dropzone</h4>
                                <p class="text-muted m-b-30 font-14">DropzoneJS is an open source library
                                    that provides drag’n’drop file uploads with image previews.
                                </p>

                                <div class="m-b-30">
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple="multiple">
                                        </div>
                                    </form>
                                </div>

                                <div class="text-center m-t-15">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
        
            </div> <!-- end container-fluid -->
@endsection

@section('script')
        <!-- Dropzone js -->
        <script src="{{ URL::asset('assets/plugins/dropzone/dist/dropzone.js')}}"></script>
@endsection