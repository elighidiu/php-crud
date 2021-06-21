<?php
declare(strict_types=1);

class SchoolClass
{
    private int $id;
    private string $name;
    private string $location;
    private int $teacherId;


    public function __construct(int $id, string $name, string $location, int $teacherId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->teacherId = $teacherId;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of location
     */ 
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Get the value of teacherId
     */ 
    public function getTeacherId()
    {
        return $this->teacherId;
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
     * Set the value of location
     *
     * @return  self
     */ 
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
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