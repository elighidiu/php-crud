<?php
declare(strict_types=1);

class Teacher
{
    private int $id;
    private string $name;
    private string $email;
    private int $classId;


    public function __construct(int $id, string $name, string $email, int $classId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->classId = $classId;
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
}