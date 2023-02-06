<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListarPublicaciones extends Component
{
    public $publicacion;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($publicacion)
    {
        $this->publicacion = $publicacion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.listar-publicaciones');
    }
}
