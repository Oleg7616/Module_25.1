<?php

class Child extends Family {
    public $age = '9';
    public $sex = 'female';
    public $name;

    public function play() {
        return 'plays';
    }

    public function study() {
        return 'goes to school';
    }
}