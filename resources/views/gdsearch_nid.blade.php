 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="faBxLNxqElDR4ILQKw4iFe3DP5mDb0COfuGoXzGY">

    <title>SMP</title>

    <!-- Styles -->
    <link href="http://localhost/routine/css/app.css" rel="stylesheet">
    <style>



    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    .boxed{
        border:1px solid black;
        background-color: #98f5ff;
    }
/*app-navbar-collapse{

    background-color: "red";

    }*/
    body{
        background-color: black;
        background-image: url(http://localhost/SMP/public/img/policecar.jpg);
        background-size: 1350px 1100px;
        background-repeat: no-repeat;
        background-position: center;
    }
    .navbar-static-top{
        background-color: red;
    }
    .panel-body{
        background-color: lightblue;
        align:left;
    }
    .panel-heading{
        background-color: blue !important;
    }
    .pix{
        width: 300px;

    }
    .panel-default{
        

    }
    .col-md-offset-2{
        
        
    }
    .image{
        border-radius: 50%;
        height: 50px;
        width: 50px;
        padding:5%;
    }


    
    


    

</style>
<script type="text/javascript">
    
    function validateForm() {
        var w = document.forms["myForm"]["gdsearch_number"].value;
        var x = document.forms["myForm"]["gdsearch_v_name"].value;
        var y = document.forms["myForm"]["gdsearch_mobile"].value;
        var z = document.forms["myForm"]["gdsearch_nid"].value;
        if (w == "" && x == "" && y == "" && z == "") {
            alert("Atleast one field must be filled out");
            return false;
        }
    }

</script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- Laravel -->
                        <b><font color="white">SMP</font></b>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" >
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="http://localhost/SMP/server.php"><b><font color="white">Go Back To HOME</font></b></a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><img  class="image" src="http://localhost/SMP/public/img/policelogo.png"></li>
                        <li><img  class="image" src="http://localhost/SMP/public/img/govt.png"></li>
                        <li><img  class="image" src="http://localhost/SMP/public/img/SMP.jpg"></li>
                        
                        <li class="dropdown">
                          

                            <ul class="dropdown-menu" role="menu">

                                <li>
                                 


                                </li>

                                <li>
                                  

                                    
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">   
             
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b><font color="white">General Diary Search Box</font></b></div>

                        <div class="panel-body">


                          <form action="{{url('/')}}/gdsearchresult_nid" method="post" name="myForm" onsubmit="return validateForm()">
                              
                            {{csrf_field()}}

                            <font color="green">Search By GD no: </font><input placeholder="General Diary Number" type="text" name="gdsearch_number"><br>

                            <font color="green">Search By Mobile no: </font><input placeholder="General Diary Number" type="text" name="gdsearch_mobile"><br>

                            <font color="green">Search By NID no: </font><input placeholder="General Diary Number" type="text" name="gdsearch_nid"><br>
                            <font color="green">Search By Name: </font><input placeholder="General Diary Number" type="text" name="gdsearch_v_name"><br>
                            <input type="submit" name="submit" value="Search" class="btn btn-primary">            
                        </form>
                        @if(isset($details))
                        <p> The Search results for your query <b> {{ $query }} </b> is :</p>
                        <h2>Sample User details</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>GD no.</th>
                                    <th>Date</th>
                                    <th>Thana</th>
                                    <th>mobile</th>
                                    <th>Name</th>
                                    <th>Print</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $user)
                                <tr>
                                    <td>{{$user->gd_number}}</td>
                                    <td>{{$user->date}}</td>
                                    <td>{{$user->v_name}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->v_name}}</td>
                                    <td>
                                        
                                     <form action="{{url('/')}}/get_nid" method="get">
                                        {{csrf_field()}}

                                        <input type="hidden" name="real_id" value="<?php echo htmlspecialchars($user->id);?>" >
                                        <input type="submit" name="submit" value="SEE DETAILS  (pdf)" class="btn btn-primary">            
                                    </form>


                                    
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
    <!-- <form action="{{url('/')}}/getPDF" method="get">
                    {{csrf_field()}}

                    
                    <input type="submit" name="submit" value="SEE DETAILS  (pdf)" class="btn btn-primary">            
                </form> -->
                 <!--  <form action="{{url('/')}}/get" method="get">
                    {{csrf_field()}}

                    
                    <input type="submit" name="submit" value="SEE DETAILS  (pdf)" class="btn btn-primary">            
                  </form>

              -->                 
              @endif








          </div>
      </div>
  </div>
</div>
</div>
</div>

<!-- Scripts -->
<script src="http://localhost/SMP/js/app.js"></script>
</body>
</html>
