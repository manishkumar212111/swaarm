<html>
    <head>
        <!-- include css file for header -->
        <link rel="stylesheet" href="static/header.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        
    </head>
    <body>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active"><b>S W A A R M</b></a>
            <form><li><input type="text" placeholder="Search for foods"></li>
                <li>  <button type="submit" class="search"><i class="fa fa-search"></i></button><li>
            </form>
            <a class="right" href="#"> 
                <span class="glyphicon glyphicon-shopping-cart"><b> Cart</b></span></a>
            <a class="right" href="#"><b>More <i class="fa fa-angle-down"></i></b></a>
            <a class="right" href="#"><b>Login & Signup</b></a>
            
            
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()"><b>&#9776;</b></a>
        </div>

        
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

        
    </body>
    
</html>