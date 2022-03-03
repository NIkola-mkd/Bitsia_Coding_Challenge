<?php

namespace App\Http\Controllers;

use App\Models\Calculations;
use App\Models\General;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {

        return view('invoice');
    }

    public function store(Request $request)
    {
        $invoice  = new General();

        $invoice->customer_number = $request->customer_number;
        $invoice->name = $request->name;
        $invoice->contact_person = $request->contact_person;
        $invoice->address  = $request->address;
        $invoice->zip = $request->zip;
        $invoice->location = $request->location;

        if ($invoice->save()) {

            foreach ($request->product_name as $key => $value) {
                Calculations::create([
                    'general_id' => $invoice->id,
                    'name' => $request->product_name[$key],
                    'description' => $request->description[$key],
                    'quantity' => $request->quantity[$key],
                    'unit_price' => $request->unit_price[$key],
                    'sum' => $request->sum[$key],
                ]);
            }

            return redirect()->route('invoice');
        }
    }
}
