<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista(){

        $lista = DB::select('select * from lista');
        return view('listagem')->with('lista', $lista);
    }

    public function mostra(){
        $id = Request::route('id'); //REQ ID 
        $lista = DB::select('select * from lista where id = ?', [$id]);
        return view('detalhes')->with('l', $lista[0]);
    }
    public function remove($id){
        $lista = Item::find($id);
        $item->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function novo(){
        return view('formulario');
    }

    public function adiciona(){
        $item = Request::input('item');
        DB::insert('insert into lista (item) values(?)',
        array($item));
        
        return redirect('/produtos');
    }
}