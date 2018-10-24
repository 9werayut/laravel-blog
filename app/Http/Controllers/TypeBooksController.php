<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//using TypeBooks
use App\TypeBooks;

class TypeBooksController extends Controller
{
    public function index() {
        //$typebooks = TypeBooks::all(); //fetch all rows

        $count = TypeBooks::count();
        $typebooks = TypeBooks::paginate(3);
        //$typebooks = TypeBooks::simplePaginate(3);

        return view('typebooks.index', [
            'typebooks' => $typebooks,
            'count' => $count
        ]);
    }

    public function destroy($id) {
        //TypeBooks::find($id)->delete();
        TypeBooks::destroy($id);
        return back();
    }
}
