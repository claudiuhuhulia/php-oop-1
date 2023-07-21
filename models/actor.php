<?php

class Actor
{
    public $first_name;
    public $last_name;
    public $job;
    public $id;
    public function __construct($first_name, $last_name, $job, $id)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->id = $id;
        $this->job = $job;
    }
}
