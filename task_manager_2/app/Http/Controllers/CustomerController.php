<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getAll()
    {
        $customers = DB::table('customers')->get();

        return view('index', compact('customers'));
    }

    public function getAdd()
    {
        return view('add');
    }

    public function deleteCustomer($id)
    {
        DB::table('customers')->where('id',$id)->delete();
        return redirect()->route('getAll');
    }
}
