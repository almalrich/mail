<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 09:41
 */

class mail
{
    private $title;
    private $message;
    private $users;

    public function setTitle($title){
        $this->title = $title;
    }
    public function setMessage($message){
        $this->message = $message;
    }
    public function setUsers($users){
        $this->users = $users;
    }

    public function send(){
        $header = 'From:almalrich16@gmail.com'. "\r\n" .
            'Reply-To:almalrich16@gmail.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($this->users, $this->title, $this->message, $header);
    echo "mail envoyé";

    }





}