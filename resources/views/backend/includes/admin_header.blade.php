

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
@section('title',$title)

  <title>@yield('title',$title)</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('backend')}}/css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('backend')}}css/bootstrap.css">
@if(!Session::has('adminData'))
  <script type="text/javascript">
      window.location.href="{{url('admin/login')}}";
  </script>
@endif
</head>

<body id="page-top">
