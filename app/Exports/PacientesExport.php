<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PacientesExport implements FromCollection , WithHeadings
{

    protected $invoices;

    public function __construct($invoices)
    {
        $this->invoices = $invoices;
    }


    public function collection()
    {
        return $this->invoices;
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Apellido Paterno',
            'Apellido Materno',
            'Fecha de Nacimiento',
        ];
    }



}
