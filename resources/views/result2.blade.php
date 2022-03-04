<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inovasi Adhi Karya</title>
</head>
<body>
	<form action="/count2" method="POST">
		{{ csrf_field() }}  
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				@if(session('info'))
				<div class="alert alert-info">
					{{session('info')}}
				</div>
				@endif
			</div>
			<div class="col-md-3"></div>
		</div>	
	</form>
</body>