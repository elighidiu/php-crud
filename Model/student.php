<?php
declare(strict_types=1);

class Student extends Teacher
{

    private int $teacherId;

    public function __construct(int $teacherId)
    {
            parent::__construct();
            $this->teacherId = $teacherId;
    }
    
    
    /**
     * Get the value of teacherId
     */ 
    public function getTeacherId()
    {
        return $this->teacherId;
    }

    /**
     * Set the value of teacherId
     *
     * @return  self
     */ 
    public function setTeacherId($teacherId)
    {
        $this->teacherId = $teacherId;

        return $this;
    }
}
