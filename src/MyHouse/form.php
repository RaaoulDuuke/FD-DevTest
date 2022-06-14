<?php

class Form
{

    private $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    private function getValue(string $index)
    {
        return isset($this->data[$index]) ?
            $this->data[$index]
            : null;
    }

    public function input(string $name, string $id, string $type, string $label, string $placeholder, array $options = [])
    {
        $attributes = '';

        foreach ($options as $attribute => $value) {
            $attributes .= "{$attribute}='{$value}' ";
        }

        return ("<div class='field'>
            <label for={$id}>{$label}</label>
            <input name='{$name}' type='{$type}' placeholder='{$placeholder}' value='{$this->getValue($name)}' {$attributes}>
        </div>"
        );
    }

    public function submit($value)
    {
        return "<button type='submit' id='Submit'>{$value}</button>";
    }
}
