<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        @if (Auth::user()->role_id == '1')
        <title>Dukia</title>             
        @endif
        @if (Auth::user()->role_id == '2')
        <title>Operator</title>             
        @endif
        @if (Auth::user()->role_id == '3')
        <title>Payer</title>             
        @endif
        @if (Auth::user()->role_id == '4')
        <title>Logistics</title>             
        @endif
        @if (Auth::user()->role_id == '5')
        <title>Proccessing</title>             
        @endif
        @if (Auth::user()->role_id == '6')
        <title>Equipment</title>             
        @endif
        @if (Auth::user()->role_id == '7')
        <title>C.F.O</title>             
        @endif
        @if (Auth::user()->role_id == '8')
        <title>C.O.O</title>             
        @endif
        @if (Auth::user()->role_id == '9')
        <title>Dukia - Vault</title>             
        @endif
        
        @include('layouts.head')
  </head>
<body>
  @include('layouts.header')
    <div class="wrapper">
      @yield('content')
    </div>
    @include('layouts.footer')    
    @include('layouts.footer-script')    
    </body>
</html>