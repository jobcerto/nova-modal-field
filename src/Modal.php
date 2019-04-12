<?php

namespace Jobcerto\NovaModal;

use Laravel\Nova\Fields\Field;
use NovaButton\Button;

class Modal extends Button
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-modal-field';

    public function open($view)
    {
        return $this->withMeta(['view' => $view]);
    }

    public function fields($fields)
    {
        return $this->withMeta(['fields' => $fields]);
    }

    public function modalClasses($classes)
    {
        return $this->withMeta(['modalClasses' => $classes]);
    }
}
