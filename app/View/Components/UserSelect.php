<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserSelect extends Component
{
    public $id;
    public $name;
    public $label;
    public $multiple;
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = 'user_select', $name = 'user_ids[]', $label = 'Select Users', $multiple = false, $placeholder = 'Search and select users...')
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->multiple = $multiple;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-select');
    }
}
