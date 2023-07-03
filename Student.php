<?php


class Student
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private array $grades = array();
    
    public function __constructor(string $firstName, string $lastName, sting $email)
    {
        $id = -1;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    
    public function getId() : int
    {
        return $this->id;
    }
    
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    
    public function getLastName() : string
    {
        return $this->lastName;
    }
    
    public function getEmail() : string
    {
        return $this->email;
    }
    
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }
    
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }
    
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    public function setId(string $id) : void
    {
        $this->id = $id;
    }
    
    public function getFullName() : string //getFullName qui ne prend pas de paramètrres et renvoie une string. La string de retour contient le nom complet du Student.
    {
        return $this->firstName." ".$this.lastName;
    }
    
    public function addGrade(int $grade) //addGrade qui prend un int en paramètre, le rajoute au tableau grades et renvoie le tableau grades.
    {
        array_push($this->grades, $grade);
        return $this->grades;
    }
    
    public function removeGrade(int $grade) //removeGrade qui prend un int en paramètre, le retire au tableau grades et renvoie le tableau grades.
    {
        array_pop($this->grades, $grade);
        return $this->grades;
    }
    
    public function getAverage() : float //getAverage qui ne prend pas de paramètres et renvoie un float qui représente la moyenne des notes du Student.
    {
        $average = 0.0;
        foreach($this->grades as $note)
        {
            $average = $average + $note;
        }
        return $average / count($this->grades);
    }
    
};


?>