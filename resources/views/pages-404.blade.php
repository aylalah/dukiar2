@extends('layouts.master-without-nav')

@section('content')
        <!-- Begin page -->
        <div class="wrapper-page">
            <div class="card">
                <div class="card-block">

                    <div class="ex-page-content text-center">
                        <h1 class="text-dark">404!</h1>
                        <h4 class="">Sorry, page not found</h4><br>

                        <a class="btn btn-info mb-5 waves-effect waves-light" href="index"><i class="mdi mdi-home"></i> Back to Dashboard</a>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>© {{date('Y')}} Lexa. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>
@endsection