<?php


namespace ImagickDemo\ControlElement;


class EndY extends ValueElement {

    protected function getDefault() {
        return 400;
    }

    protected function getMin() {
        return 0;
    }

    protected function getMax() {
        return 500;
    }

    protected function getVariableName() {
        return 'endY';
    }

    protected function getDisplayName() {
        return 'End Y';
    }

    function getEndY() {
        return $this->getValue();
    }
}