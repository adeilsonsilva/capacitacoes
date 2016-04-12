<?php

class Person {

    public $id;
    public $name;
    public $age;
    public $height;
    public $course;
    public $phrase;

    function __construct($attributes = array())
    {
        if (!empty($attributes)) {
            $this->name = array_key_exists('name', $attributes) ? $attributes['name'] : '';
            $this->age = array_key_exists('age', $attributes) ? $attributes['age'] : '';
            $this->height = array_key_exists('height', $attributes) ? $attributes['height'] : '';
            $this->course = $this->translateCourse($attributes['course']);
            $this->phrase = array_key_exists('phrase', $attributes) ? $attributes['phrase'] : '';
        }
    }

    private function translateCourse($courseNumber)
    {
    	switch ($courseNumber) {
    		case 1:
    			return "Ciência da Computação";
    			break;
    		case 2:
    			return "Sistemas de Informação";
    			break;
    		case 3:
    			return "Licenciatura em Computação";
    			break;
    		case 4:
    			return "BI Ciência e Tecnologia";
    			break;
    		default:
    			return "Outro";
    			break;
    	}
    }

}
