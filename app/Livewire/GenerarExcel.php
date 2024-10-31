<?php

namespace App\Livewire;

use Livewire\Component;
use App\Exports\PacientesExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class GenerarExcel extends Component
{
    public function render()
    {
        return view('livewire.generar-excel');
    }


    public function create(){
        $pacientes = DB::table('pacientes')->select('nombre', 'apellido_paterno' , 'apellido_materno' , 'fecha_nacimiento')->get();
        return Excel::download(new PacientesExport($pacientes), 'pacientes.xlsx');
    }
}
