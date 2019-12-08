<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dukia - Vault</title>
        @include('layouts.head')
  </head>
<body>
  @include('layouts.vaultheader')
    <div class="wrapper">
      @yield('vaultcontent')
    </div>
    @include('layouts.footer')    
    @include('layouts.footer-script')    
    </body>
</html>