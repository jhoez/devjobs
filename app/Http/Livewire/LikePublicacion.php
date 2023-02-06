<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class LikePublicacion extends Component
{
    public $publicacion;
    public $isLike;
    public $likes;

    /**
     * metodo que se ejecuta por defecto
     * similar a un constructor
    */
    public function mount($publicacion)
    {
        $this->isLike = $publicacion->checkLike( auth()->user() );
        $this->likes = $publicacion->likes->count();
    }

    public function like()
    {
        /**
         * comprueba si el usuario dio like a la publicacion y elimina el like
         * de lo contrario crea el like.
        */
        if ( $this->publicacion->checkLike( auth()->user() ) ) {
            $this->publicacion->likes()->where([
                'user_id'=>auth()->user()->id,
                'publicacion_id'=>$this->publicacion->id
            ])->delete();
            $this->isLike = false;
            $this->likes--;
        } else {
            $this->publicacion->likes()->create([
                'user_id'=> auth()->user()->id
            ]);
            $this->isLike = true;
            $this->likes++;
        }
        
    }

    public function render()
    {
        //$user = User::where('username',$this->usuario)->first();

        return view('livewire.like-publicacion');
    }
}
