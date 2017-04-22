<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index() {
        $bags = Bag::all();
        $bagsArr = [
            '1' => array(),
            '2' => array(),
            '3' => array(),
            '4' => array(),
            '5' => array(),
        ];

        foreach ($bags as $bag) {
            array_push($bagsArr[$bag->type], $bag);
        }

        // 选出每个类型里的最近五个

        // 装进bags变量里

        return view('index')->with('bags', $bagsArr);
    }
}
