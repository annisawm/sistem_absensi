<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        return view('program.index', compact('programs'));
    }

    public function create()
    {
        return view('program.create');
    }

    public function store(Request $request)
    {       
        $this->validate($request, [
            'hari'     => 'required',
            'tanggal'     => 'required',
            'jam'     => 'required',
            'acara'     => 'required',
            'tempat'   => 'required',
        ]);

        $program = program::create($request->all());

        if($program){
            return redirect()->route('program.index')->with(['success' => 'Data Kegiatan Berhasil Disimpan!']);
        }else{
            return redirect()->route('program.index')->with(['error' => 'Data Kegiatan Gagal Disimpan!']);
        }   
    }

    public function edit(program $program)
    {
        return view('program.edit', compact('program'));  
    }


    public function update(Request $request, program $program)
    {
        $this->validate($request, [
            'hari'     => 'required',
            'tanggal'     => 'required',
            'jam'     => 'required',
            'acara'     => 'required',
            'tempat'   => 'required',
        ]);


    $program = program::findOrFail($program->id);

        $program->update($request->all());

    if($program){
        
        return redirect()->route('program.index')->with(['success' => 'Data Kegiatan Berhasil Diupdate!']);
    }else{
        
        return redirect()->route('program.index')->with(['error' => 'Data Kegiatan Gagal Diupdate!']);
    }
}

    public function destroy($id)
    {
        $program = program::findOrFail($id);
        $program->delete();

        if($program){ 
            return redirect()->route('program.index')->with(['success' => 'Data Kegiatan Berhasil Dihapus!']);
        }else{
            return redirect()->route('program.index')->with(['error' => 'Data Kegiatan Gagal Dihapus!']);
        }
    }
}
