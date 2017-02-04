<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
    <div class="tap-top">
    	<div class="container">
    		
			<span class="pull-right">
				<span>
				@if(\Config::get('app.locale') == 'th')
				<img src="{{asset('images/thai_flag.png')}}" height="14" width="23" alt="">
				@else
				<img src="{{asset('images/uk_flag.jpg')}}" height="14" width="23" alt="">
				@endif
				</span><span>@lang('site.language')</span>
					<select id="lang" style="margin-top: 2px;">
	    			@if(\Config::get('app.locale') == 'th')
				  	<option data-select="th" style="background-image:url(male.png);">TH</option>
				  	<option data-select="en" style="background-image:url(female.png);">EN</option>
				  	@else
				  	<option data-select="en" style="background-image:url(female.png);">EN</option>
				  	<option data-select="th" style="background-image:url(male.png);">TH</option>
				  	@endif
				</select> 
			

				<!-- | <font style="font-size:12px;"><a href="{{url('help')}}">{{trans('site.help')}}</a></font>  -->|
				<font style="font-size:12px;"><a href="{{url('help')}}">{{trans('site.contact')}}</a></font> |
				<font style="font-size:12px;"><a href="{{url('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> {{trans('site.login')}}</a></font> |
				<font style="font-size:12px;"><a href="{{url('register')}}">{{trans('site.register')}}</a></font> |

			</span>

    	</div>
    </div>
    <nav class="navbar navbar-default" style="height: 70px;margin-bottom: 0px;background-color: #4080ff;">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header" style="margin-top: -4px;">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/logo-white.png')}}" height="50" alt=""></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-top: 10px;">
		      <!-- <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">One more separated link</a></li>
		          </ul>
		        </li>
		      </ul> -->
		     
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" class="f15 fw-300 fff">หน้าแรก</a></li>
		        <li><a href="#" class="f15 fw-300 fff">ทริปท่องเที่ยว</a></li>
		        <li><a href="#" class="f15 fw-300 fff">รถเช่า</a></li>
		        <li><a href="#" class="f15 fw-300 fff">เกี่ยวกับเรา</a></li>
		        <li><a href="#" class="f15 fw-300 fff">คำถามที่พบบ่อย</a></li>
		        <li><a href="#" class="f15 fw-300 fff">ติดต่อ</a></li>
		       <!--  <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li> -->
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

  <!--   <div class="tap-top-logo">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    				<div style="font-size:40px;margin-top: 17px;"><img src="{{asset('images/logo.png')}}" height="40" alt=""></div>
    			</div>
    			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
    				<div class="banner-top">
    					728 x 90
    				</div>
    			</div>
    		</div>
    	</div>
    </div> -->
    <!-- <div class="container-fluid">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="btn-group btn-group-justified" role="group" aria-label="...">
				  		<div class="btn-group" role="group">
				    		<a href="{{url('health')}}" class="btn btn-default" style="border-radius: 0px !important;">ข่าวยอดนิยม</a>
					  	</div>
					  	<div class="btn-group" role="group">
					    	<a href="{{url('health')}}" class="btn btn-default" style="border-radius: 0px !important;">อสังหาริมทรัพย์</a>
					  	</div>
					  	<div class="btn-group" role="group">
					   	 	<a href="{{url('health')}}" class="btn btn-default" style="border-radius: 0px !important;">สุขภาพ</a>
					  	</div>
					  	<div class="btn-group" role="group">
					   	 	<a href="{{url('travel')}}" class="btn btn-default" style="border-radius: 0px !important;">ท่องเที่ยว</a>
					  	</div>
					  	<div class="btn-group" role="group">
					   	 	<a href="{{url('health')}}" class="btn btn-default" style="border-radius: 0px !important;">การศึกษา</a>
					  	</div>
					</div>
    			</div>
    		</div>
    	</div>
    </div> -->
	
	@yield('content')
    </div>
	
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script>
    	$(document).ready(function($) {

    		var csrf_token = window.Laravel.csrfToken;
    		$('select#lang').change(function(){
    			var lang_select = $(this).children(":selected").attr('data-select');
    			var url = '/lang/'+lang_select;
    			window.location.replace(url);
    		});
    		
    	});
  
    	
    </script>
</body>
</html>