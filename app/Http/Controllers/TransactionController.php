<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
    public function index(){
        abort_if(Gate::denies('transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $transactions=Transaction::latest()->get();
        return view('admin.transactions.index', compact('transactions'));
    }
    public function show(Transaction $transaction)
    {
        abort_if(Gate::denies('transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $transaction->updated_at=now();
        $transaction->save();
        return view('admin.transactions.show', compact('transaction'));
    }
}
