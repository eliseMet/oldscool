<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Formgroup extends Component
{
    public $id, $required, $label, $error;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $required = false, $label = null, $error = null)
    {
        $this->id = $id;
        $this->required = $required;
        $this->label = $label;
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.formgroup');
    }
}
