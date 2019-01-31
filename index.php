<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 09:39
 */
require "classe/mail.php";

$seb = new mail();

$seb->setMessage("hello");

$seb->setTitle("bonjour");

$seb->setUsers("seb-bastos16@live.fr");

$seb->send();





