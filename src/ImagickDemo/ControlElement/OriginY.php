<?php


namespace ImagickDemo\ControlElement;


class OriginY extends ValueElement {

    protected function getDefault() {
        return 250;
    }

    protected function getMin() {
        return 0;
    }

    protected function getMax() {
        return 500;
    }

    protected function getVariableName() {
        return 'originY';
    }

    protected function getDisplayName() {
        return 'Origin Y';
    }

    function getOriginY() {
        return $this->getValue();
    }
}