<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged in</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        .user_details>h3{
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

    </style>

</head>
<body>
   <nav>
        <h3>Logo</h3>
        <div class="nav-items">
            <span>Home</span>
            <span>Profile</span>
        </div>
        <div class="user_details">
         
            {{Auth::user()->name}}
        </div>
        
   </nav>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Assigned to:</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   @foreach($todos as $todo)
   <tr>
      <th scope="row">3</th>
      <td>{{$todo->title}}</td>
      <td>{{$todo->description}}</td>
      <td>{{$todo->user->name}}</td>
      <td><a href="{{route('todo.edit',['id'=>$todo->id])}}">Edit</a></td>

    </tr>
    @endforeach
  </tbody>
</table> 
   <div class="custom-container">
       <h2>You are logged in</h2>
    </div>
</body>
</html>