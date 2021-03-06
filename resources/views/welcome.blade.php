<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sylhet Metro Politan</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Styles -->
  <style>
  h2{

    color: green;
  }
  html, body {
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(http://localhost/SMP/public/img/10.jpg);
    /*background-color: black;*/
    background-size: 1400px 650px;
    background-color: #464646
  
  background-repeat: no-repeat;
  background-position: center;


  
  color: #636b6f;
  font-family: 'Raleway', sans-serif;
  font-weight: 100;
  height: 100vh;
  margin: 0;
  font-family: monospace;
}

.full-height {
  height: 100vh;
}

.flex-center {
  align-items: center;
  display: flex;
  justify-content: center;
}

.position-ref {
  position: relative;
}

.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.content {
  text-align: center;
}

.title {
  font-size: 80px;
  text-align: center;
}

.links > a {
  color: #636b6f;
  padding: 0 25px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: .1rem;
  text-decoration: none;
  text-transform: uppercase;
}

.m-b-md {
  margin-bottom: 30px;
}
.btn-primary{
  background: transparent;
  outline: 1px ;
  border: 1px;
   /* background-color: black;
    padding: 1%;
    border-radius: 20%;*/
  }
/*.jinish:hover{
    color: white;
    border:2px solid blue;
    border-radius: 10px;

    }*/

    .btn {


      background: #3498db;
      background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
      background-image: -moz-linear-gradient(top, #3498db, #2980b9);
      background-image: -ms-linear-gradient(top, #3498db, #2980b9);
      background-image: -o-linear-gradient(top, #3498db, #2980b9);
      background-image: linear-gradient(to bottom, #3498db, #2980b9);
      -webkit-border-radius: 20;
      -moz-border-radius: 20;
      border-radius: 20px;
      -webkit-box-shadow: 0px 10px 26px #666666;
      -moz-box-shadow: 0px 10px 26px #666666;
      box-shadow: 0px 5px 16px #666666;
      font-family: Arial;
      color: #ffffff;
      font-size: 20px;
      /*padding: 10px 20px 10px 20px;*/
      margin-top: 2px;
      text-decoration: none;
      padding: 20px 40px;
      width: 250px;
    }

    .btn:hover {
      background: #3cb0fd;
      background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
      background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
      background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
      background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
      background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
      text-decoration: none;
    }

    .image{
      border-radius: 50%;
      height: 70px;
      width: 70px;
      
    }
    .imagesmp{
      border-radius: 50%;
      height: 150px;
      width: 150px;

    }
    .m-b-md{
      background:transparent;
      padding: 1%;
      border-radius: 20%;
    }
    .links{
      padding-right: 7%;
    }
    


  </style>
  <script type="text/javascript">
    $("document").ready(function(){
    $('#ajaxcheck').click(function(){
    // event.preventDefault();
   // $('#ajaxcheck').html(' ');
  });
  });
  </script>
 
</head>
<body>
  <div class="flex-center position-ref full-height">
    
    <div class="top-right links">
      
      <!-- <a href="{{ url('/home') }}"><font color="white" > <b>ORDERS</b></font></a> -->
      <!-- <img  class="image" src="http://localhost/SMP/public/img/policelogo.png">
      <img  class="image" src="http://localhost/SMP/public/img/govt.png"> -->
      
      <!-- <a href="{{ url('/login') }}"><font color="white">LOGIN</font></a> -->
      
    </div>
    


    <div class="content">
      
      <a href="{{ url('/') }}"><img  class="imagesmp" src="http://localhost/SMP/public/img/SMP.jpg"></a>


      <div class="title m-b-md" >
        <font color="white" id="ajaxcheck" > <b>Sylhet Metropolition Police</b></font> 
      </div>
      @if(isset($details))
      <h2>General Diary for {{$details}} has been recorded</h2>
      @endif
      

      <form action="{{url('/')}}/gd"  method="POST" align="center">
        {{csrf_field() }}
        <button type="submit"  value="csrf_token()" class="btn btn-primary" >Enter A GD </button>
        
      </form><br> 

      
      
      <form action="{{url('/')}}/gdsearch"  method="POST" align="center">
        {{csrf_field() }}
        <button type="submit"  value="csrf_token()" class="btn btn-primary">Search For A GD </button>
        
      </form><br>              


      <!--                 <a href="http://localhost/SMP/resources/views/gd.blade.php" ><font color="red"><h1>Search for a GD</h1></font></a> -->
      <!--  <img src="{{url('../')}}/public/img/of.jpg"  width="1500px" height="500px"  /> -->
<!-- <button onclick="getElementById('demo').innerHTML=Date()">What is the time?</button>

  <p id="demo"></p> -->

  
</div>
</div>
</body>
</html>
