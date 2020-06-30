<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;

class StudentCreate extends Component
{

	public $firstname;
	public $lastname;
	public $gender;
	public $phone;
  public function render()
  {
    return view('livewire.student-create');
  }
  public function store()
  {
  	$this->validate([
  		'firstname' => 'required|min:3',
  		'lastname' => 'required|min:3',
  		'gender' => 'required|numeric',
  		'phone' => 'required|max:15',
  	]);

  	$student = Student::create([
  		'firstname' => $this->firstname,
  		'lastname' => $this->lastname,
  		'gender' => $this->gender,
  		'phone' => $this->phone,
  	]);
  	$this->resetInput();

  	$this->emit('studentStored',$student);
  }
  private function resetInput()
  {
  	$this->firstname = null;
  	$this->lastname = null;
  	$this->gender = null;
  	$this->phone = null;
  }
}
