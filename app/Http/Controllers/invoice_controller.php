<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;
use PDF;

class invoice_controller extends Controller
{
    public function create(){
        return view("create_invoice");
    }

    public function store(Request $request){
    $invoice_number  =  $request->input('invoice_number');
    $Date            =  $request->input('Date');
    $item_name       =  $request->input('item_name');
    $product_id      =  $request->input('product_id');
    $quantity        =  $request->input('quantity');
    $subtotal        =  $request->input('subtotal');

    $invoice = new invoice;

    $invoice->invoice_number = $invoice_number;
    $invoice->Date = $Date;
    $invoice->item_name = $item_name;
    $invoice->product_id = $product_id;
    $invoice->quantity = $quantity;
    $invoice->subtotal = $subtotal;

    $invoice->save();
    
    return redirect('list');
    }

public function list(){
   $invoice = invoice::all();
   return view("list_invoice",['invoice'=>$invoice]); 
   return PDF::loadFile(public_path().'/myfile.html')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');

}


public function export(){
    $invoice = invoice::all();
    $pdf = PDF::loadView('invoice',[
        'invoice'=>$invoice
    ]);
    return $pdf->download('invoice.pdf') ;

 }

}
