<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Tasks extends Component
{
    public $name = '';

    protected $rules = [
        'name' => 'required|unique:tasks',
    ];

    public function save()
    {
       $attributes = $this->validate();
       Task::create(['name' => $this->name]);
    }

    public function remove($taskId)
    {
        Task::findOrFail($taskId)->delete();
    }

    public function getTasksProperty()
    {
        return Task::all();
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
