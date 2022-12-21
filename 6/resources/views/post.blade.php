@extends('layouts.app')
@section('title', 'つぶやき一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto w-75">
            <div class="card w-75 border-secondary">
                <form action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group w-75" >
                        <label class="col-md-10 lead" for="body">なんでもつぶやいちゃえ！
                        </label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="1" name="body" placeholder="いまなにしてる？">{{ old('body') }}</textarea>
                        </div>
                    </div>

                    {{ csrf_field() }}
                    <div class = "text-right">
                    <input type="submit" class="btn btn-primary" value="つぶやく">
                    <input type="hidden" name="user_id" value = "{{Auth::user()->id}}">
                </form></div></div><br><br>


<div class = "card w-75 border-secondary mb-3 d-flex justify-content-center" >
    @foreach($posts as $post)
    @foreach($users as $user)
    @if($user -> id == $post -> user_id)





    
   
    <div class ="card-header">
        <div class="name" style = "text-align: left;float: left">{{$user->name}}さん</div>
        <div class="date" style = "text-align: right;">{{$post->created_at}}</div>
    </div>
                           
    
        
    
    <div class = "card-body">{{$post->body}}</div>

    @if(Auth::id() == $post->user_id)
    <div class="text-right">
    <a class = "btn btn-danger" href="{{ action('PostController@delete', ['id' => $post->id]) }}">削除</a>
    </div>
    @endif
    @endif
    @endforeach
    @endforeach
    
</div>





            </div>
        </div>
    </div>
@endsection