@extends('layouts.app')
@section('contents')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('todo.update',['id'=>$todo->id])}}">
        @csrf
        <div class="form-item">
            <lable>title:</lable>
            <input type="text" name="title" value="{{$todo->title}}">
        </div>
        <div class="form-item">
            <lable>description:</label>
            <input type="text" name="description" value="{{$todo->description}}">
        </div>
        <div class="form-item">
            <lable>status:</label>
            <input type="text" name="status" value="{{$todo->status}}">
        </div>
        <div class="form-item">
            <lable>Assigned to:</label>
            <select name="user_id">
                @foreach($users as $user)
                    @if($user->id==$todo->user_id)
                    <option value="{{$user->id}}"selected="selected">{{$user->name}}</option>
                    @else
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-item">
            <input type="submit" name="Submit">
        </div>
</form>
@endsection