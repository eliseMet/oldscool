<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{

    public $id, $name, $value, $required, $disabled;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $id = null, $value = null, $required = false, $disabled = false)
    {
        $this->name = $name;
        $this->id = isset($id) ? $id : $name; // if id is notnull return id else return name
        $this->value = $value;
        $this->required = $required;
        $this->disabled = $disabled;
    }

    public function render()
    {
    }
}
