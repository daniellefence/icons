<?php

namespace Daniellefence\Icons\Components;
use Illuminate\View\Component;

class Icon extends Component
{

    public $icon;
    public $class;

    public function __construct($icon,$class='') {
        $this->icon = $icon;
        $this->class = $class;
    }

    public function render()
    {
        return view('df::components.icon');
    }
}