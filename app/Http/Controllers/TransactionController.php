<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        $transactions=Transaction::latest();
        return view('admin.transactions.index', compact('transactions'));
    }
}
