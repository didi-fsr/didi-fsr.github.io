<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Agenda</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


	<!-- <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet"> -->

	<!--Font Awesome (added because you use icons in your prepend/append)-->
	<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" /> --}}

  <!-- Include Date Range Picker -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->

  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css"> -->
	<link rel="stylesheet/less" href="timepicker.less" />

</head>

<body>
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <!-- <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
  <script src="http://demo.expertphp.in/js/jquery.js"></script> -->
  <!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap-timepicker.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Include Date Range Picker -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script> -->

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 10">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> Agenda v0.1</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#"></a></li>

        </ul>
        <!-- <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form> -->
        <!-- <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Bulan</a></li>

        </ul> -->
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <form class="" action="show.agenda" method="post">
          <div class="form-group">
            <label class="control-label " for="date">
             Tanggal Lahir:
            </label>
            <div class="input-group">
             <div class="input-group-addon">
              <i class="fa fa-calendar">
              </i>
             </div>
             <input class="form-control" id="date" name="tgl_lahir" placeholder="yyyy-mm-dd" type="text" autocomplete="off"/>
             <button type="submit" class="btn-default" >Submit</button>
            </div>
          </div>
        </form>
        <!-- </form> -->
        <!-- <div class="jumbotron">
          <h1>Agenda Kegiatah Hari ini</h1>
          <label for=""></label>
        </div> -->

        <div class="panel panel-default">
          <div class="panel-heading">
            Agenda
          </div>
          <div class="panel-body">
            <div class="list-group">
              <button type="button" class="list-group-item">Cras justo odio</button>
              <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
              <button type="button" class="list-group-item">Morbi leo risus</button>
              <button type="button" class="list-group-item">Porta ac consectetur ac</button>
              <button type="button" class="list-group-item">Vestibulum at eros</button>
            </div>
          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
  </script> -->

	<script>
	    $(document).ready(function(){
	        var date_input=$('input[id="date"]'); //our date input has the name "date"
	        var container=$('form form-group').length>0 ? $('form form-group').parent() : "body";
	        date_input.datepicker({
	            format: 'yyyy-mm-dd',
	            container: container,
	            todayHighlight: true,
	            autoclose: true,
	        })
	    })
	</script>
</body>

</html>
