<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public $type;
    public $message;
    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$message,$class)
    {
        $this->type = $type;
        $this->message = $message;
        $this->class = $class;
    }

    public function isDeleting(array $types)
    {
        return "starting";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
