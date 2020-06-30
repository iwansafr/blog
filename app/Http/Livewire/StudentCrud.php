<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentCrud extends Component
{
	use WithPagination;
	public $statusUpdate = false;
	protected $listeners = [
		'studentStored' => 'handleStored'
	];
  public function render()
  {
  	// $this->data = Student::latest()->paginate(5);
	  // return view('livewire.student-crud');
	  return view('livewire.student-crud',[
	  	'data' => Student::latest()->paginate(5)
	  ]);
  }

  public function getStudent($id)
  {
  	$this->statusUpdate = true;
  	$student = Student::find($id);
  	$this->emit('getStudent',$student);
  }

  public function delete($id)
  {
  	if($id)
  	{
  		$student = Student::find($id);
  		$student->delete();

  		session()->flash('message','Student was Deleted');
  	}
  }

  public function handleStored($student)
  {
		if($student['status'])  	
		{
  		session()->flash('message','Student '. $student['firstname'].' Was Updated !');
		}else{
  		session()->flash('message','Student '. $student['firstname'].' Was Stored !');
		}
  }
}
