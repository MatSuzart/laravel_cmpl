@extends('principal')

@selection('conteudo')
        <h1>Detalhes de produtos<?=$l->id ?></h1>
        <ul>
            <li>
                    Nome : <?=$l->item ?>
            </li>
        </ul>
@stop