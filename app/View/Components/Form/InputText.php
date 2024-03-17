<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;

class InputText extends Input
{
    public $type, $placeholder, $min, $max, $step, $pattern;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $id = null, $value = null, $required = false, $disabled = false, $type = "text", $placeholder = null, $min = null, $max = null, $step = null, $pattern = null)
    {
        parent::__construct($name, $id, $value, $required, $disabled);
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->min = $min;
        $this->max = $max;
        $this->step = $step;
        $this->pattern = $pattern;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-text');
    }
}
