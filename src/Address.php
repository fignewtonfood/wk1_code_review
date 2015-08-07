<?php
  //establish Address class
    class Address
    {
      //setting properties to private
        private $name;
        private $phone;
        private $street;
        private $city;
        private $state;
        private $zip;

  //constructor for Car class
    function __construct()
    {
        $this->name = $name;
        $this->price = $price;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

  //getters for Car properties
    function getName()
    {
        return $this->name;
    }
    }
?>
