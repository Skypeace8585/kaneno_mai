<?php
namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;

use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     public function index()
//     {
//         return view('user.index');
//     }
// }

class UserController extends Controller
{
    public function index(Request $request){
        $products = product::all();

        return view('User.index',['products' => $products]);
    }

}
