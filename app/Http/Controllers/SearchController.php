<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\AutorModel;
use routes\web;

class SearchController extends Controller
{

    public $search = '';
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $search = $request->search;
        $books = ModelBook::where('title',$search)->get();
        $autors = AutorModel::where('name',$search)->get();
        if(count($books)){
            return view('books.index',['books' => $books]);
        }elseif(count($autors)){
            return view('autores.index',['autors' => $autors]);
        }else{
            $msg = ' o registro não foi localizado';
            return view('books.nulo',compact('msg'));
        }
    }
}
