<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::with(['product'])->get();
        // dd($customers[0]->product);
        return view('transaction.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('transaction.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = Customer::where('email',$request->email)->first();
        
        if($customers){
            Transaction::create([
                'customer_id'=>$customers->id,
                'product_id'=>$request->products_id
            ]);
            return redirect(route('transaction.index'))->with('success','Transaksi berhasil ditambahkan');
        }else{
            return redirect()->with('error','Transaksi gagal');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $customers = Customer::all();
        $products = Product::all();
        return view('transaction.edit', compact('customers', 'transaction', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $customers = Customer::where('email',$request->email)->first();
        
        if($customers){
            $transaction->update([
                'customer_id'=>$customers->id,
                'product_id'=>$request->products_id
            ]);
            return redirect(route('transaction.index'))->with('success','Transaksi berhasil ditambahkan');
        }else{
            return redirect()->with('error','Transaksi gagal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect(route('transaction.index'));
    }
}
