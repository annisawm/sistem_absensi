<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class GuestController extends Controller
{
    public function index()
    {
        $guests = guest::latest()->paginate(10);
        return view('guest.index', compact('guests'));
    }

    public function create()
    {
        return view('guest.create');
    }

    public function store(Request $request)
    {       
        $this->validate($request, [
            'nip'     => 'nullable|numeric|digits: 18',
            'nama'     => 'required',
            'jenis_kelamin'   => 'required',
            'nama_instansi'     => 'required',
            'jabatan'     => 'required',
            'no_hp'     => 'required',
            'ttd'     => 'required',
        ]);

        $guest = guest::create($request->all());

        if($guest){
            return redirect()->route('guest.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('guest.index')->with(['error' => 'Data Gagal Disimpan!']);
        }   
    }

    public function edit(guest $guest)
    {
        return view('guest.edit', compact('guest'));  
    }


    public function update(Request $request, guest $guest)
    {
        $this->validate($request, [
            'nip'   => 'required',
            'nama'     => 'required',
            'jenis_kelamin'   => 'required',
            'nama_instansi'     => 'required',
            'jabatan'     => 'required',
            'no_hp'     => 'required',
            'ttd'     => 'required',
        ]);


    $guest = guest::findOrFail($guest->id);

        $guest->update($request->all());

    if($guest){
        
        return redirect()->route('guest.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        
        return redirect()->route('guest.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

    public function destroy($id)
    {
        $guest = guest::findOrFail($id);
        $guest->delete();

        if($guest){ 
            return redirect()->route('guest.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('guest.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
