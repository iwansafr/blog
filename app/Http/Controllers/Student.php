<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class Student extends Controller
{
	public function export()
	{
		return Excel::download(new StudentExport, 'student.xlsx');
	}
}
