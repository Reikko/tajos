<?php

namespace Destajos\Http\Controllers;

use Illuminate\Http\Request;
use Destajos\Http\Requests;
use Destajos\Destajos;
use Maatwebsite\Excel\Facades\Excel;
class ImportController extends Controller
{
    public function import()
    {
        $list = Excel::load('destajo.csv',function ($reader){

            foreach ($reader->get() as $book){
                Destajos::create([
                    'prototipo' =>$book->prototipo,
                    'partida'=>$book->partida,
                    'concepto'=>$book->concepto,
                    'descripcion'=>$book->dest,
                    'unidad'=>$book->unidad,
                    'destajo'=>$book->destajo,
                ]);
            }
        });
        return redirect('/');
    }
}
