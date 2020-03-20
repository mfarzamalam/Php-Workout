<?php



    // Q1. Write a php program containing Human Class having name, father name, age, gender. Create object 
    // of human and print all the properties of human.



    class Human {
        public $Name;
        public $Fathername;
        public $Age;
        public $Gender;
    
    function __construct($name,$fathername,$age,$gender)
        {
            $this->Name = $name;
            $this->Fathername = $fathername;
            $this->Age = $age;
            $this->Gender = $gender;
        }
    }

    Echo"<h1>Print all the value of Human class </h1>";

    $pehla_human = New Human("Aslam","Achariya","54","Male");

    foreach ($pehla_human as $aam_admi){
        echo $aam_admi."<br>";
    }



    //Q2. Create another Class Student that is the child class of human having special properties like course,
    // fees, Enrollment no and also having a method that print all the details about the student like student 
    // name, age, course etc.



    class Student extends Human {
        public $Course;
        public $Fees;
        public $Enrollment;

    // function __construct($name,$age,$course,$fees,$enrollment)
    //     {
    //         $this->Age = $age;
    //         $this->Name = $name;
    //         $this->Course = $course;
    //         $this->Fees = $fees;
    //         $this->Enrollment = $enrollment;
    //     }
    
    function StudentDetails($course,$fees,$enrollment) {
            $this->Course = $course;
            $this->Fees = $fees;
            $this->Enrollment = $enrollment;
            echo "Student name is <i>{$this->Name}</i> <br>
            Student Age is <i>{$this->Age}</i> <br>
            Student Course is <i>{$this->Course}</i> <br>";
        }
        
    }

    Echo"<h1>Print Name , Age and Course </h1>";

    
    // $pehla_student = New Student("Talib elim","umer","Php","2400","1130251");
    // $pehla_student->StudentDetails();

    
    $pehla_student = New Student("Arsalan","Anjuman","21","Female");
    $pehla_student->StudentDetails("Php",2500,"212234");



    // Q3. Define types of inheritance with Example.

    
    // A) Single inheritance 
    
    class Father1 {}

    class child1 extends Father1{}


    // B) Multi-Level inheritance 
    
    class GrandFather2 {}

    class Father2 extends GrandFather2{}
    
    class Child2 extends Father2 {}


    // C) Hierarchial Inheritance

    class Father3 {}

    class child3 extends Father3{}
    
    class child3b extends Father3{}
    
    class child3c extends Father3{}

?>