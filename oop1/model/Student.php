<?php

    /**
     * Student class
     */
    class Student
    {
        private $id;
        private $name;
        private $roll;
        private $number;
        private $subject;
        private $address;

        public function add($Data)
        {

            $this->name    = $Data['name'];
            $this->roll    = $Data['roll'];
            $this->number  = $Data['number'];
            $this->subject = $Data['subject'];
            $this->address = $Data['address'];

            $Query = "INSERT INTO students(name, roll, number, subject, address)";
            $Query .= " VALUES('$this->name', '$this->roll', '$this->number', '$this->subject', '$this->address')";

            $Db = new Db();
            $Db->execute($Query);
            $Db->close();
        }

        public function edit($Data, $id)
        {
            
            $this->name    = $Data['name'];
            $this->roll    = $Data['roll'];
            $this->number  = $Data['number'];
            $this->subject = $Data['subject'];
            $this->address = $Data['address'];
            $this->id = $id;

            $Query = "UPDATE students SET name = '$this->name', roll = '$this->roll', number = '$this->number' subject = '$this->subject', address = '$this->address'";
            $Query .= "WHERE id = $this->id";

            $Db = new Db();
            $Db->execute($Query);
            $Db->close();
        }

        public function delete($id)
        {
            $this->id = $id;
            $Query = "DELETE FROM students WHERE id = $this->id";
            $Db = new Db();
            $Result = $Db->execute($Query);
            $Db->close();
            return $Result;
        }

        public function getAll()
        {
            $Query = "SELECT * FROM students";
            $Db = new Db();
            $Data = $Db->fetchData($Query);
            $Db->close();
            return $Data;
        }

    }

?>