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

    public function open($view, $options)
    {
        return $this->withMeta(['view' => $view, 'modalOptions' => $options]);
    }
}
