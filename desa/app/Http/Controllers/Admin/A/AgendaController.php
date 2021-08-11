<?php

namespace App\Http\Controllers\Admin\A;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Http\Controllers\Admin\AdminController;

class AgendaController extends AdminController
{
    public function index()
    {
        

        $agenda = Agenda::all();

        return view('admin.A.agenda.index', compact('agenda'));
    }

    public function create()
    {
       
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
     
        return view('admin.A.agenda.create');
        // , compact('jurusans','faculties'));
    }

    public function store(Request $request)
    {
        

        $agenda = Agenda::create($request->all());

        return redirect()->route('admin.agenda.index');
    }

    public function edit(Agenda $agenda)
    {
        
        // $jurusans = Jurusan::pluck('nama','id');
        // $faculties = Faculty::pluck('nama','id');
        return view('admin.A.agenda.edit', compact('agenda'));
        // ,'jurusans','faculties'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        

        $agenda->update($request->all());
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.agenda.index')->with($notification);
    }

    public function show(Agenda $agenda)
    {
        

        return view('admin.A.agenda.show', compact('agenda'));
    }

    public function destroy(Agenda $agenda)
    {
        

        $agenda->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Agenda::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }

}
