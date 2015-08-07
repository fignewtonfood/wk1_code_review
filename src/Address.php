<?php
  //establish Contact class
    class Contact
    {
      //setting properties to private
        private $name;
        private $phone;
        private $street;
        private $city;
        private $state;
        private $zip;

      //constructor for Contact class
        function __construct()
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->street = $street;
            $this->city = $city;
            $this->state = $state;
            $this->zip = $zip;
        }

      //getters for Contact properties
        function getName()
        {
            return $this->name;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function getStreet()
        {
            return $this->street;
        }

        function getCity()
        {
            return $this->city;
        }

        function getState()
        {
            return $this->state;
        }

        function getZip()
        {
            return $this->zip;
        }

      //setters for Contact properties
        function setName($new_name)
        {
            if (is_string($new_name)){
                $this->name = $new_name;
            }
        }

        function setPhone($new_phone)
        {
            $this->phone = $new_phone;
        }

        function setStreet($new_street)
        {
            if (is_string($new_street)){
                $this->street = $new_street;
            }
        }

        function setCity($new_city)
        {
            if (is_string($new_city)){
                $this->city = $new_city;
            }
        }

        function setState($new_state)
        {
            if (is_string($new_state)){
                $this->state = $new_state;
            }
        }

        function setZip($new_zip)
        {
            $int_zip = (int) $new_zip;
            if ($int_zip != 0){
                $this->zip = $int_zip;
            }
        }


    }
?>
