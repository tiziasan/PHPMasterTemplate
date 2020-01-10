<?php

class Component {
    protected $file;
    protected $values = array();

    public function __construct($file) {
        $this->file = $file;
    }

    public function set($key, $value) {
        $this->values[$key] = $value;
    }

    public function output() {
        if (!file_exists($this->file)) {
            return "Error loading file($this->file).<br/>";
        }
        $output = file_get_contents($this->file);
        foreach ($this->values as $key => $value) {
            $tagToReplace = "#$key";
            $output = str_replace($tagToReplace, $value, $output);
        }

        return $output;
    }

    static public function merge($components, $separator = "\n") {
        $output = "";

        foreach ($components as $component) {
            $content = (get_class($component) !== "Component")
                ? "Error, incorrect type, expected Component."
                : $component->output();
            $output .= $content . $separator;
        }

        return $output;
    }
}
