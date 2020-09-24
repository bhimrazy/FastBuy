<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Traits\pageMetaContent;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{use pageMetaContent;
    public function index(){
        abort_if(Gate::denies('transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $transactions=Transaction::latest()->get();
        $this->setPageTitle('List Transactions','This Page Lists all the transactions.');
        return view('admin.transactions.index', compact('transactions'));
    }
    public function show(Transaction $transaction)
    {
        abort_if(Gate::denies('transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $transaction->updated_at=now();
        $transaction->save();
        $this->setPageTitle($transaction['transaction_id'].'| Show Transaction','This Page shows the order with Transaction Number:'.$transaction['transaction_id']);
        return view('admin.transactions.show', compact('transaction'));
    }
    public function edit(Transaction $transaction)
    {
        abort_if(Gate::denies('order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->setPageTitle($transaction['transaction_id'].'| Edit Transaction','This Page edits the order with Transaction Number:'.$transaction['transaction_id']);
        return view('admin.transactions.edit', compact('transaction'));
    }
}
