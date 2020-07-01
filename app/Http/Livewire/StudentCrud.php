<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentCrud extends Component
{
	use WithPagination;

	public $statusUpdate = false;
  public $paginate = 5;
  public $search;
  public $order = ['field'=>'id','type'=>'DESC'];

  // public $sort_firstname = false;
  // public $sort_lastname = false;
  // public $sort_gender = false;
  // public $sort_phone = false;

	protected $listeners = [
		'studentStored' => 'handleStored'
	];

  protected $updatesQueryString = ['search'];

  public function mount()
  {
    $this->search = request()->query('search',$this->search);
  }

  public function render()
  {
  	// $this->data = Student::latest()->paginate(5);
	  // return view('livewire.student-crud');
	  // return view('livewire.student-crud',[
	  // 	'data' => Student::latest()->paginate($this->paginate)
	  // ]);

    $data = $this->search === null ? 
    Student::orderBy($this->order['field'],$this->order['type']) : 
    Student::where('firstname','like', '%'. $this->search.'%')
        ->orWhere('lastname','like', '%'. $this->search.'%')
        ->orderBy($this->order['field'],$this->order['type']);
    $total = $data->count();
    $pages = $this->page-1;
    $num = $pages*$this->paginate;

    return view('livewire.student-crud',[
      'data' => $data->paginate($this->paginate),
      'total' => $total,
      'start_num' => $num+1,
      'page' => $pages
    ]);

  }

  public function sort_data($string = '')
  {
    if(!empty($string))
    {
      $type = $this->order['field'] == $string && $this->order['type'] == 'ASC' ? 'DESC' : 'ASC';
      $this->order['field'] = $string;
      $this->order['type'] = $type;
    }
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
		if(!empty($student['status']))
		{
  		session()->flash('message','Student '. $student['firstname'].' Was Updated !');
		}else{
  		session()->flash('message','Student '. $student['firstname'].' Was Stored !');
		}
  }
}
