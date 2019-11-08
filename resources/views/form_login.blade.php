@extends('principal')

@section('conteudo')
<form action="/login" method="post">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="email" />
    </div>
    <div class="form-group">
        <label>Senha</label>
        <input type="password" class="form-control" name="password" />
    </div>
    <button class="btn btn-default" type="submit">Login</button>
</form>   
@stop