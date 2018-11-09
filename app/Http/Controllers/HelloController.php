<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018/11/9
 * Time: 下午 11:57
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HelloController extends Controller
{
    //
    public function index($name = 'Everybody')
    {
        $data = ['name' => $name];
        return view('hello.index', $data);
    }
}