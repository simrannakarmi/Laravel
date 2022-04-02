<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
        <h3>Logo</h3>
        @if(!Auth::check())
        <div class="nav-items">
            <span>Home</span>
            <span>Profile</span>
        </div>
        @endif
        <div class="user_details">
            <a href="">Register</a>
            <a href="">Login</a>
        </div>
        
   </nav> 
</body>
</html>