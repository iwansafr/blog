<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class StudentCreate extends Component
{
  use WithFileUploads;

	public $firstname;
	public $lastname;
	public $gender;
	public $phone;
  public $photo;
  public function render()
  {
    return view('livewire.student-create');
  }
  public function store()
  {
  	$this->validate([
  		'firstname' => 'required|min:3',
  		'lastname' => 'required|min:3',
  		'gender' => 'required',
  		'phone' => 'required|max:15',
      'photo' => 'image|max:1024', // 1MB Max
  	]);

    // $photo = 'student/'.$this->firstname;
    $photo = $this->firstname.'.'.$this->photo->getClientOriginalExtension();
    if(Storage::exists('public/student/'.$photo))
    {
      $photo = $this->firstname.'_'.time().'.'.$this->photo->getClientOriginalExtension();
    }
  	$student = Student::create([
  		'firstname' => $this->firstname,
  		'lastname' => $this->lastname,
  		'gender' => $this->gender,
  		'phone' => $this->phone,
      'photo' => $photo
  	]);
    $this->photo->storePubliclyAs('public/student/',$photo);
  	$this->resetInput();

  	$this->emit('studentStored',$student);
  }
  private function resetInput()
  {
  	$this->firstname = null;
  	$this->lastname = null;
  	$this->gender = null;
  	$this->phone = null;
    $this->photo = null;
  }
}
