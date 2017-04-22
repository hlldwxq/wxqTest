<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuotesController extends Controller
{
    //
    public function getQuotes($id) {
        $bag = Bag::find($id);

        return view('quotes.show')->with('bag', $bag);
    }
}
