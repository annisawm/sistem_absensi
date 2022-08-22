<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(10);
        return view('program.index', compact('programs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function create()
    {
        return view('program.create');
    }

    public function store(Request $request)
    {       
        $this->validate($request, [
            'acara'     => 'required',
            'tanggal'     => 'required',
            'waktu' => 'required',
            'tempat'   => 'required',
        ]);

        $program = program::create($request->all());

        if($program){
            return redirect()->route('program.index')->with(['success' => 'Data Kegiatan Berhasil Disimpan!']);
        }else{
            return redirect()->route('program.index')->with(['error' => 'Data Kegiatan Gagal Disimpan!']);
        }   
    }

    public function show(program $program)
    {
        return view('program.show', compact('program'));
    } 

    public function edit(program $program)
    {
        return view('program.edit', compact('program'));  
    }


    public function update(Request $request, program $program)
    {
        $this->validate($request, [
            'acara'     => 'required',
            'tanggal'     => 'required',
            'waktu' => 'required',
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
