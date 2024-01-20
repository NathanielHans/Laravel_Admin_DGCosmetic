<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::get();
        return view('admin.kategori', compact('kategoris'));

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
            'kategori' => 'required|string|max:255'
        ]);
        try {
            Kategori::create($validatedData);
            return redirect('admin/kategori')->with('success', 'Data berhasil disimpan.');
        } catch (QueryException $e) {
            return redirect('admin/kategori')->with('error', 'Terjadi kesalahan database: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('admin/kategori')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kategori' => 'required|string|max:255'
        ]);
        try {
            $kategori = Kategori::find($id);
            $kategori->kategori = $validatedData['kategori'];
            $kategori->save();
            return redirect('admin/kategori')->with('success', 'Data berhasil diedit.');
        } catch (QueryException $e) {
            return redirect('admin/kategori')->with('error', 'Terjadi kesalahan database: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('admin/kategori')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Kategori::destroy($id);
            return redirect('admin/kategori')->with('success', 'Data berhasil dihapus.');
        } catch (QueryException $e) {
            return redirect('admin/kategori')->with('error', 'Terjadi kesalahan database: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect('admin/kategori')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
