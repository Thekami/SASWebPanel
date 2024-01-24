<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Livewire\Component;

class Index extends Component
{
    public $name;

    public function mount(){
      $this->name = "angel";
    }
    public function render()
    {
        $this->title = "Empleados";
        return view('livewire.client.index', [
            "clients" => Client::all()
        ])->extends('adminlte::page')->section('content');
    }
}
