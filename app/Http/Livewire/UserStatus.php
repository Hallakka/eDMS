<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Component
{
    public Model $model;
    
    public $field;

    public $approved;

    public function mount()
    {
        $this->approved = (bool) $this->model->getAttribute($this->field);
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();

    }

    public function render()
    {
        return view('livewire.user-status');
    }
}