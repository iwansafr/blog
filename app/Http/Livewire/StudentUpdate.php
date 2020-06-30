<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;

class StudentUpdate extends Component
{
	public $oldFirstname;
	public $firstname;
	public $lastname;
	public $gender;
	public $phone;
	public $studentId;

	protected $listeners = [
		'getStudent' => 'showStudent'
	];

  public function render()
  {
      return view('livewire.student-update');
  }

  public function showStudent($student)
  {
  	$this->oldFirstname = $student['firstname'];
  	$this->firstname = $student['firstname'];
  	$this->lastname = $student['lastname'];
  	$this->gender = $student['gender'];
  	$this->phone = $student['phone'];
  	$this->studentId = $student['id'];
  }

  public function update()
  {
  	$this->validate([
  		'firstname' => 'required|min:3',
  		'lastname' => 'required|min:3',
  		'gender' => 'required|numeric',
  		'phone' => 'required|max:15',
  	]);
  	$status = false;
  	if($this->studentId)
  	{
	  	// $status = Student::where('id',$this->studentId)->update([
	  	// 	'firstname' => $this->firstname,
	  	// 	'lastname' => $this->lastname,
	  	// 	'gender' => $this->gender,
	  	// 	'phone' => $this->phone,
	  	// ]);
	  	$student = Student::find($this->studentId);
	  	$student->update([
	  		'firstname' => $this->firstname,
	  		'lastname' => $this->lastname,
	  		'gender' => $this->gender,
	  		'phone' => $this->phone,
	  	]);
	  	$status = true;
  	}
  	$this->resetInput();

  	$this->emit('studentStored',['status'=> $status,'firstname'=>$this->oldFirstname]);
  }
  private function resetInput()
  {
  	$this->firstname = null;
  	$this->lastname = null;
  	$this->gender = null;
  	$this->phone = null;
  }
}
