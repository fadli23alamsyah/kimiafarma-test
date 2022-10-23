<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('obat', [
            "obats" => Obat::where('user_id', Auth::user()->id)->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_obat' => 'required|max:255',
            'dibuat' => 'required|max:255',
            'tanggal_kadaluarsa' => 'required',
        ]);

        $validatedData["user_id"] = Auth::user()->id;

        Obat::create($validatedData);

        return redirect('/');
    }

    public function destroy(Obat $obat)
    {
        Obat::destroy($obat->id);
        return redirect('/');
    }

    public function update(Request $request, Obat $obat){
        $validatedData = $request->validate([
            'nama_obat' => 'required|max:255',
            'dibuat' => 'required|max:255',
            'tanggal_kadaluarsa' => 'required',
        ]);

        Obat::where('id', $obat->id)->update($validatedData);
        return redirect('/');
    }
}
