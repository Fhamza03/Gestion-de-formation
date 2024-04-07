<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allEmployee = Employee::count();
        $allCustomer = Customer::count();
        $allSupplier = Supplier::count();
        $allFormation= Product::count();
        return view('index', compact('allEmployee','allCustomer','allSupplier','allFormation'));
    }
    

    public function showChart(){
        $suppliers = Supplier::pluck('id');

        $data = [];
    

        foreach ($suppliers as $supplier) {
                $supplierInfo = Supplier::find($supplier);

                $nombreProduits = Product::where('supplier_id', $supplier)
                ->select(DB::raw('COUNT(*) AS total_produits'))
                ->value('total_produits');
                $data[] = [
                    'label' => $supplierInfo->name,
                    'data' => $nombreProduits,
                ];
      
        }

    return view('index', compact('data'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
