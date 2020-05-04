<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(){
        return Order::all();

    }

    public function show($id){
        return Order::find($id);
    }

    public function store(Request $request){
       return Order::create($request->all());
    }
}
