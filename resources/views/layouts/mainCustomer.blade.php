<!DOCTYPE html>
<html lang="en">

{{-- title --}}
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/bus-solid-light.png">
<link rel="icon" type="image/png" href="../assets/img/bus-solid-light.png">
<title> 
  @yield('title','.:MENU:.')
</title>
{{-- title --}}

{{-- Head --}}
@include('head.head')
{{-- Head --}}

<body class="g-sidenav-show bg-dark">
  <main class="main-content position-relative border-radius-lg ">
      {{-- Content --}}
      @yield('konten')
      {{-- Content --}}
      
      {{-- Footer --}}
      @include('footer.footer')
      {{-- Footer --}}
  </main>
</body>
</html>