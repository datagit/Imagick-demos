<?php


namespace ImagickDemo\ControlElement;

use ImagickDemo\Framework\VariableMap;


class WhitePoint extends ValueElement {

    private $defaultWhitePoint;

    function __construct(VariableMap $variableMap, $defaultWhitePoint = 10) {
        $this->defaultWhitePoint = $defaultWhitePoint;
        parent::__construct($variableMap);
    }
    
    
    protected function getDefault() {
        return $this->defaultWhitePoint;
    }

    protected function getMin() {
        return 0;
    }

    protected function getMax() {
        return 255;
    }

    protected function getVariableName() {
        return 'whitePoint';
    }

    protected function getDisplayName() {
        return 'WhitePoint';
    }

    function getWhitePoint() {
        return $this->getValue();
    }
}