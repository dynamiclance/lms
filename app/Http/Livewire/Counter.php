<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function  increase($value)
    {

        flash()->addSuccess('Successfully counted - ' . $value);
        $this->count++;
    }
    public function  decrease($value)
    {

        flash()->addWarning($value);
        $this->count--;
    }
}
