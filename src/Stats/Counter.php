<?php


namespace Stats;


class Counter {

    private $name;

    private $value;

    private $measure_time;

    private $source;

    function __construct($name, $value, $source, $measureTime = null) {
        $this->name = $name;
        $this->value = $value;
        $this->source = $source;
        $this->measureTime = $measureTime;
    }

    function convertToArray() {
        $array = [
            "name" => $this->name,
            "value" => $this->value,
            "source" => $this->source,
        ];
        if ($this->measure_time != null) {
            $array['measure_time'] = $this->measure_time;
        }

        return $array;
    }
}

 