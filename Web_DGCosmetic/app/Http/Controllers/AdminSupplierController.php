<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class AdminSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::get();
        return view('admin.supplier', compact('suppliers'));
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
        $validatedData = $request->validate([
            'supplier' => 'required|string|max:255'
        ]);
        try {
            Supplier::create($validatedData);
            return redirect('admin/supplier')->with('success', 'Data berhasil disimpan.');
        } catch (QueryException $e) {
            return redirect('admin/supplier')->with('error', 'Terjadi kesalahan database: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('admin/supplier')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'supplier' => 'required|string|max:255'
        ]);
        try {
            $supplier = Supplier::find($id);
            $supplier->supplier = $validatedData['supplier'];
            $supplier->save();
            return redirect('admin/supplier')->with('success', 'Data berhasil diedit.');
        } catch (QueryException $e) {
            return redirect('admin/supplier')->with('error', 'Terjadi kesalahan database: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('admin/supplier')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Supplier::destroy($id);
            return redirect('admin/supplier')->with('success', 'Data berhasil dihapus.');
        } catch (QueryException $e) {
            return redirect('admin/supplier')->with('error', 'Terjadi kesalahan database: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('admin/supplier')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
