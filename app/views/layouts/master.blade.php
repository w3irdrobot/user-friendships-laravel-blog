<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club Laravel</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.min.css">
  <style>
    body {
      margin-top: 5%;
    }
  </style>

  <script src="js/vendor/modernizr.js"></script>

</head>
<body>
  @if ($errors->has())
      @foreach ($errors->all() as $error)
          <div class='alert-box alert' data-alert>
            {{ $error }}
            <a href="#" class="close">&times;</a>
          </div>
      @endforeach
  @endif

  <div class="row">
    <div class="medium-8 medium-offset-2">
      @yield('main')
    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>