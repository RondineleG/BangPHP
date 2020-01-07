<?php

class Login
{
    private $email;
    private $password;
    private $name;


    public function __construct($email, $password, $name)
    {
        $this->name= $name;
        $this->setEmail($email);
        $this->setPassword($password);
    }
       public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setEmail($email)
    {
        $emailValid = filter_var($email,FILTER_SANITIZE_EMAIL);
        $this->email = $emailValid;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function LogInto()
    {
        if($this->email =="rondineleg@gmail.com" && $this->password ==12345)
        {
             print "Login successfuly !";
        }
        else
        {
            print "Error: Invalid credential";
        }
    }
    
 
}


$login = new Login("rondineleg@gmail.com","12345","rondinele"); 
print("<br>");
$login->LogInto();
print("<br>");
print($login->getName());
