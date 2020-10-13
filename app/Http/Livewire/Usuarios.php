<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Usuarios extends Component
{

	public $usuarios;
	public $usuario_activo;
	public $usuario_activo_nombre;

	public function mount()
	{
		$this->usuarios = User::all();
		$this->usuario_activo = 0;
		$this->usuario_activo_nombre = '';
	}

    public function render()
    {
        return view('livewire.usuarios');
    }

    public function activo($usuario_activo)
    {
    	$this->usuario_activo = $usuario_activo;
    	$this->usuario_activo_nombre = User::find($usuario_activo)->name;
    }
}
