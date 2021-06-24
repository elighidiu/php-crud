<?php
declare(strict_types=1);

class Student
{
    private int $id;
    private string $name;
    private $email;
    private int $classId;
    //private int $teacherId;


    public function __construct(int $id, $name, $email, int $classId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->classId = $classId;
        //$this->teacherId = $teacherId;
    }

    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of classId
     */ 
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Set the value of classId
     *
     * @return  self
     */ 
    public function setClassId($classId)
    {
        $this->classId = $classId;

        return $this;
    }

    /**
     * Get the value of teacherId
     */ 
    // public function getTeacherId()
    // {
    //     return $this->teacherId;
    // }

    // /**
    //  * Set the value of teacherId
    //  *
    //  * @return  self
    //  */ 
    // public function setTeacherId($teacherId)
    // {
    //     $this->teacherId = $teacherId;

    //     return $this;
    // }
}
