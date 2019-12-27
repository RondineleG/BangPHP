<?php

class Login
{
    private $email;
    private $password;

       public function getEmail()
    {
        return $this->email;
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


$login = new Login();
$login->setEmail("rondinel()()(eg@gmail.com");
$login->setPassword(12345);
$login->LogInto();

print("<br>");

print $login->getEmail();
print("<br>");
print $login->getPassword();
