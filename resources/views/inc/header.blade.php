<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Educlex | A Digital Leraning Plateform</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="/assets/global/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
<link href="/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
<link href="/assets/global/plugins/cubeportfolio/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="/assets/frontend/onepage2/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="/assets/frontend/onepage2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<style>
.listTick {
    list-style: none;
    margin: 0;
    padding: 0;
    padding-left: 10px;
    margin-bottom: 15px;
}
.listTick li {
  background: url('/assets/images/tick.png') no-repeat 0px 10px;
  padding: 6px 0 0px 20px;
}
.modal-dialog {
  position: center;
  top: 50px;
  right: 100px;
  bottom: 0;
  left: 0;
  z-index: 10040;
  overflow: auto;
  overflow-y: auto;
}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-on-scroll" class to the body element to set fixed header layout -->
<body class="page-header-fixed">
  <div class="container">
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Educlex</h4>
        </div>
        <div class="modal-body" id="mbody">
          @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @elseif(session('status'))
  <div class="alert alert-success">
  {{session('status')}}
</div>
@else
  @include('forms.popup')
@endif
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  </div>
