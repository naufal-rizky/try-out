<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{


    public function index()
    {
        $produks = Produk::latest()->get();
        return view('produk.index', compact('produks'));
    }

    public function create()
    {
        return view('produk.create', [
            'produk' => new Produk()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:155',
            'stok' => 'required',
            'harga' => 'required'
        ]);

        $produk = Produk::create([
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);

        if ($produk) {
            return redirect()
            ->route('produk.index')
            ->with([
                'success' => 'produk telah dibuat'
            ]);
        } else {
            return redirect()
            ->back()
            ->withInput()
            ->with([
                'error' => 'error coba lagi'
            ]);
        }
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'nama' => 'required|string|max:155',
            'stok' => 'required',
            'harga' => 'required'
        ]);

        $produk = Produk::findOrFail($id);

        $produk->update([
            'nama' => $request->nama,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);

        if ($produk) {
            return redirect()
            ->route('produk.index')
            ->with([
                'success' => 'produk has been updated successfully'
            ]);
        } else {
            return redirect()
            ->back()
            ->withInput()
            ->with([
                'error' => 'Some problem has occured, please try again'
            ]);
        }
    }
    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();

        if ($produk) {
            return redirect()
                ->route('produk.index')
                ->with([
                    'success' => 'produk has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('produk.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}

