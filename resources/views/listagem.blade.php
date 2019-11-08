@extends('principal')

@section('conteudo')
        <h1>Lista de produtos</h1>
        <?php foreach($lista as $li) :?>
        <table class="table">
            <tr>
                <td><?= $li->id ?></td>
                <td><?= $li->item ?></td>
                <td>
                    <a href="produtos/mostra/<?= $li->id ?>">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </a>
                </td>
                <td>
                    <a href="produtos/remove/<?= $li->id ?>">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
@stop