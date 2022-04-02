<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>
<body>
    <form method="post" action="{{route('todolist.store')}}">
        @csrf
        <div class="form-item">
            <lable>title:</lable>
            <input type="text" name="title">
        </div>
        <div class="form-item">
            <lable>description:</label>
            <input type="text" name="description">
        </div>
        <div class="form-item">
            <lable>Assigned to:</label>
            <select name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-item">
            <input type="submit" name="Submit">
        </div>
    </form>
</body>
</html>