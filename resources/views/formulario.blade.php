@extends('principal')

@section('conteudo')
<form action="/produtos/adiciona" method="post">
    <input type="hidden" name="_token" value=" {{ csf_token() }}" />
    <div class="form-group">
        <label for="/produtos/adiciona">Item</label>
        <input class="form-control" name="item" />
    </div>
    <button class="btn btn-default" type="submit">Enviar</button>
</form>   
@stop