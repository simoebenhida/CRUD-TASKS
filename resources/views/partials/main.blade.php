<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.3/css/bulma.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
@include('partials.header')
	

<div class="columns is-mobile" style="margin-top: 9%;margin-bottom: 9%;">
  <div class="column is-half is-offset-one-quarter">
  	@yield('content')
  </div>
</div>
</body>
@include('partials.footer')

@yield('scripts')
</html>