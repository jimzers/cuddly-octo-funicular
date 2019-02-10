<!DOCTYPE html>
<html>
<head style="background-color: black;">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Apptivism</title>
</head>
<body>
	<div class="container">
   <nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link nav-text" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-text" href="#">Mission</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-text" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-text" href="#">Contact Us</a>
    </li>
  </ul>

</nav>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>
