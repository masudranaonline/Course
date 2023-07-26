<?php

    /**
     * Teacher class
     */

     class Teacher
     {
        private $id;
        private $name;
        private $number;
        private $education;
        private $subject;
        private $address;

        public function add($Data)
        {
            $this->name      = $Data['name'];
            $this->number    = $Data['number'];
            $this->education = $Data['education'];
            $this->subject   = $Data['subject'];
            $this->address   = $Data['address'];

            $Query = "INSERT INTO teachers(name, number, education, subject, address)";
            $Query .= " VALUES('$this->name', '$this->number', '$this->education', '$this->subject', '$this->address')";
            $Db = new Db();
            $Db->execute($Query);
            $Db->close();
        }

        public function edit($Data, $id)
        {
            $this->id = $id;
            $this->name      = $Data['name'];
            $this->number    = $Data['number'];
            $this->education = $Data['education'];
            $this->subject   = $Data['subject'];
            $this->address   = $Data['address  '];

            $Query = "UPDATE teachers SET name = '$this->name', number = '$this->number', education = '$this->education', subject = '$this->subject', address = '$this->address'";
            $Query .= " WHERE id = $this->id";

            $Db = new Db();
            $Result = $Db->execute($Query);
            $Db->close();
        }

        public function delete($id)
        {
            $this->id = $id;
            $Query = "DELETE FROM teachers WHERE id = $this->id";

            $Db = new Db();
            $Result = $Db->fetchData($Query);
            $Db->close();
            return $Result;
        }

        
     }

?>