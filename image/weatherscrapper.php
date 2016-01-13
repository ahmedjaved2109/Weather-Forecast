<!doctype html>
<html lang="en">
    <head>
        <title>App Landing</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <style>

       html,body{
           width:100%;
           height:100%;
       }

       .container{
            background-image:url("background.jpg");
            width:100%;
            height:100%;
            background:size:cover;
            background-position:center;
            padding-top:150px;
       }
       .center{
           text-align:center;
       }
       .white{
           color:white;
       }
       .alert{
           margin-top:20px;
           display:none;
       }
       

    </style>
        
    </head>
    <body>
        
        <div class="container">
            <div class="row">
              
              <div class="col-md-6 col-md-offset-3">
                <h1 class="center white">Weather Predictor</h1>
                <p class="lead center white">Enter your city below for forecast</p>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Eg.New Delhi,London,Paris..." />
                  </div>
                  <div class="center"><button class="btn btn-success btn-lg ">Find My Weather</button> </div>
                </form>
                <div id="notfound" class="alert alert-danger">City Not Found.Please Try again!</div>
                <div id="found" class="alert alert-success"></div>
                <div id="notEntered" class="alert alert-danger">Please Enter your city!</div>
              </div>

            </div>
        </div>
        <script>
            $("button").click(function(event){
                event.preventDefault();
                $(".alert").hide();
                if($("#city").val()!="")
                {
                $.get("scrapper.php?city="+$("#city").val(),function(data)
                {
                       if(data=="")
                       {
                           $("#notfound").fadeIn();
                       }
                       else
                       {
                           $("#found").html(data).fadeIn();
                       }
                });
              }
              else
              {
                       $("#notEntered").fadeIn();
              }
            });
        </script>


    </body>
</html>