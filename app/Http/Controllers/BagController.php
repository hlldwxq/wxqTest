<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BagController extends Controller
{
    //
    public function getIndex() {

    }

    public function getBag($id) {
        $bag = Bag::find($id);

        return view('bag.show')->with('bag', $bag);
    }

}
