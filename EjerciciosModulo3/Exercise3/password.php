<?php

Class Password{
    private $length;
    private $password;
    //Constructor
    public function __construct($length){
        $this->length = $length;
    } 
    //Getters
    public function getLength(){
        return $this->length;
    }
    public function getPassword(){
        return $this->password;
    }
    //Setters
    public function setLength($length){
        $this->length = $length;
    }
    //Methods
    //Generates password
    public function generate(){
        $this->password = ''; 
        for ($i = 0; $i < $this->length; $i++){
            $type = rand(1,3);

            if ($type == 1) {
                $this->password .= chr(rand(65, 90));
            }
            elseif ($type == 2) {
                $this->password .= chr(rand(97, 122));
            }
            else {
                $this->password .= chr(rand(48, 57));  
            }
        }
    }
    //Verification
    public function verify(){
        $upper = 0;
        $lower = 0;
        $number = 0;
        for ($i = 0; $i < strlen($this ->password); $i++){
            $char = $this->password[$i];
            if (ctype_lower($char)) {
                $lower++;
            } 
            elseif (ctype_upper($char)) {
                $upper++;
            }
            elseif (ctype_digit($char)) {
                $number++;
            }
        }
        if ($number >= 5 && $upper >= 2 && $lower >= 1){
            echo 'Password is secure. <br>';
        }
        else {
            echo 'Password is not secure. <br>';
        }
    }
}
?>