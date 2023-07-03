<?php
class School {
    private int $id;
    private $teacher;
    private array $students;

    public function __construct(string $teacher) {
        $this->teacher = $teacher;
        $this->id = -1;
        $this->students = [];
        
    }
    
    private function getTeacher() : string
    {
        return $this->teacher;
    }
    
    private function getId() : int
    {
        return $this->id;
    }
    
    private function getStudents()
    {
        return $this->students;
    }
    
    private function setTeacher(string $teacher) : void
    {
        $this->teacher = $teacher;
    }
    
    private function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    private function setStudents(array $students) : void
    {
        $this->students = students;
    }

    public function addStudent(Student $student)
    {
        array_push($this->students, $student);
        return $this->students;
    }
    
    public function removeStudent(Student $student)
    {
        array_pop($this->students, $student);
        return $this->students;
    }
}

?>