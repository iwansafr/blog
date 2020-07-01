<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class StudentExport implements FromCollection, WithCustomStartCell, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    public function startCell(): string
    {
        return 'A1';
    }

    public function headings(): array
    {
    	return [
    		'id',
    		'Firstname',
    		'Lastname',
    		'Gender',
    		'Phone',
    		'created',
    		'updated',
    	];
    }
}
