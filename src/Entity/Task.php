<?php

namespace App\Entity;

class Task
{
    protected $task;
    protected $note;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getNote()
    {
        return $this->note;
    }
    public function setNote($note)
    {
        $this->note = $note;
    }
}