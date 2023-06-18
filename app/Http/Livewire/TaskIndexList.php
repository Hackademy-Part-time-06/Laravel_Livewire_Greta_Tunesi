<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskIndexList extends Component
{
    public function render()
    {
        $tasks = Task::all();
        return view('livewire.task-index-list', compact('tasks'));
    }
}
