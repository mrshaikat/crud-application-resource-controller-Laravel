<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>
	
	
	<style>
        .single-studnt img{

            width: 200px;
            height: 200px;
            border: 7px solid gray;
            border-radius: 50%;
            margin: auto;
            display: block;

        }
    </style>
	

	<div class="wrap ">
		<a class="btn btn-primary" href="">Single Staff</a>
		<div class="card shadow single-studnt">
			
                
                <img class=" shadow mt-3" src="assets/media/img/pp_photo/istockphoto-615279718-612x612.jpg" alt="">
                <h2 class="text-center mt-3">{{ $show_staff -> uname }}</h2>

                <table class=" table table-striped">

                    <tr>
                        <td>Name</td>
                        <td>{{ $show_staff -> name }}</td>
                    </tr>
    
                    <tr>
                        <td>E-mail</td>
                        <td>{{ $show_staff -> email }}</td>
                    </tr>
    
                    <tr>
                        <td>Cell Number</td>
                        <td>{{ $show_staff -> cell }}</td>
                    </tr>

                </table>

                


		
	</div>
	











	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>