<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskEditForm extends Component
{

    public $title,$description; 
    public Task $task;

    protected $rules = [
        'title' => 'required|min:5',
        'description' => 'required',
    ];
    
    public function mount() //è tipo costruttore
    {
        $this->title = $this->task->title;
        $this->description = $this->task->description;  
        
    }


    public function update()
    {
        $this->validate();

        //solito update
        $this->task->update([ 
            'title' => $this->title,
            'description' =>  $this->description,
            
        ]);

        session()->flash('tasks', 'Task successfully updated.');
    }

    public function render()
    {
        return view('livewire.task-edit-form');
    }


  
}
