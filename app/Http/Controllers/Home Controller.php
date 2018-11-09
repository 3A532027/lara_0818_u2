<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/11/9
 * Time: 下午 11:58
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }
}