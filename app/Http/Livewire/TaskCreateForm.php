<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskCreateForm extends Component
{

    public $title;
    public $description;

    protected $rules = [
        'title' => 'required|min:5',
        'description' => 'required',
    ];

    public function render()
    {
        return view('livewire.task-create-form');
    }


    public function store()
    {
        $this->validate();

        //solito modo per salvare i dati
        Task::create([
            'title' => $this->title,
            'description' =>  $this->description,
        ]);

        session()->flash('tasks', 'Task successfully updated.');
        $this->reset(['title', 'description']); //elimina i campi dopo averli caricati per ripartire da zero
    }

        //real time validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName); 
    }
}
