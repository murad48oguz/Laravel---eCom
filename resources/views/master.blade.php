<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Com Project</title>

	   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

	{{View::make('header')}}

 		@yield('content')

	{{View::make('footer')}}

</body>



<style >



   .custom-login{
   		height: 500px;
   		padding-top: 100px;
   }

   img.slider-img{
   	height: 400px !important;
   }

   .custom-product{
   	height: 665px;
    }

    .h3, h3{
        font-size: 27px;
        text-align: center;
        margin-bottom: 40px;
    }

   .slider-text{
   	background-color: #35443585 !important ;
   }

   .trending-image{
   	height: 100px;

   }

   .trending-item{
   	float: left;
   	margin-right: 20px;
    margin-left: 100px;

   }

   .trending-wrapper{
   	margin: 30px;

   }

   .detail-img{
   	height: 230px;
   }

   .cart-list-devider{
        border-bottom: 2px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    .search-box{

       margin-left: 300px;
       width:400px !important;

    }







</style>

</html>
