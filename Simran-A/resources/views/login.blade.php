<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .div-1{
            background-color:green;
            width:50px;
            height:50px;
        }
        .div-2{
            background-color:red;
            width:50px;
            height:50px;
        }
        body{
            height:100vh;
            margin:0;
            display:flex;
            flex-direction:column;
        }
        nav{
            padding:0 5%;
            display:flex;
            height:8vh;
            align-items:center;
            background:teal;
            color:white
        }
        nav > h3{
            margin-right: 30px
        }
        nav>.nav-items{
            display:flex;
            width:80%;
        }
        .nav-items > span{
            margin-right:15px
        }
        .custom-container{
            height:98vh;
        }

        .user_details{
            display:flex;
            justify-content:flex-end;
            flex:1;
        }
        .user_details>a{
            text-decoration:none;
            color:inherit;
            margin-left:15px
        }

        span:hover,a:hover{
            color:coral;
        }

        .custom-container{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .custom-container > form{
            height: 25%;
            padding:15px;
            border:1px solid rgba(0,0,0,0.5);
            border-radius:15px;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            align-items:center;
        }
        form .form-item{
            width: 100%;
            flex-direction: row;
            display: flex;
            margin-bottom:20px
        }
        .form-item> span{
            width:75px
        }
        .form-item > input{
            border:none;
            border-bottom: 1px solid rgba(0,0,0,0.5);
        }

        form button{
            background-color:teal;
            color:white;
            border:1px solid rgba(0,0,0,0.5);
            padding:8px;
        }
        

    </style>

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
   <div class="custom-container">
       <form action="{{route('login.check')}}" method="POST">
           @csrf
           <div class="form-item">
               <span>Email</span>
               <input type="text" name="email">
           </div>
           <div class="form-item">
               <span>Password</span>
               <input type="password" name="password">
           </div>
           <div class="form-item-button">
               <button>Submit</button>
           </div>
       </form>
    </div>
</body>
</html>