<html>
<title>Laravel PHP ajax Country, State & City List</title>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
    <link rel="stylesheet" href="{{URL::asset('public/css/style.css')}}"> 
</head>
<body>
	<div class="row">	
		 <div class="col-sm-6" style="margin-left: 12em;">
			<form>
				<h4>Laravel Php Ajax Countries, States & Cities</h4>
				 <div class="form-group"> 
					<select name="country" id="country" class="form-control">
						<option value="">Select Country</option>
					</select>
				</div>
				<div class="form-group"> 
					<select name="state" id="state" class="form-control">
						<option value="">Select State</option>
					</select>
				</div>
				<div class="form-group"> 
					<select name="city" id="city" class="form-control">
						<option value="">Select City</option>
					</select>
				</div>
			</form>	
		</div>
	</div>
</body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
    <script src="{{URL::asset('public/js/api.js')}}"></script> 
</html>