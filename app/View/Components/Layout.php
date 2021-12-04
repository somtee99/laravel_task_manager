<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Layout extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if(Auth::check()){
            return view('layouts.app');
        }else{
            return view('layouts.guest');
        }    
    }
}
