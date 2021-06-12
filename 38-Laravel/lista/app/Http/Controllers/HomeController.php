<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lista;

class HomeController extends Controller {

    public function home(){
        $lista = Lista::all();
        $array = array("lista"=>$lista);

        return view('index',$array);
    }

    public function create(Request $req){
        if($req->has('item')){
            //criando
            $item = $req->input('item');
            $lista = new Lista();
            $lista->item = $item;
            $lista->save();

            /*update
            $lista = Lista::find(id);
            $lista -> itemm = 'Novo Texto';
            $lista->save();*/
        }
    return redirect('/');
    }
    public function delete($id){
       Lista::find($id)->delete();
       return redirect('/');

    }
}


