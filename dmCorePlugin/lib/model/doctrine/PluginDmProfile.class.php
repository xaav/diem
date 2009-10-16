<?php

/**
 * PluginDmProfile
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5845 2009-06-09 07:36:57Z jwage $
 */
abstract class PluginDmProfile extends BaseDmProfile
{
  
  public function __toString()
  {
    return $this->get('User')->__toString();
  }

  public function getUsername()
  {
    return $this->get('User')->get('username');
  }
  
  public function setUsername($username)
  {
    return $this->get('User')->set('username', $username);
  }
  
  public function getEmail()
  {
    return $this->get('User')->get('email');
  }
  
  public function setEmail($email)
  {
    return $this->get('User')->set('email', $email);
  }
  
  public function getLastLogin()
  {
    return $this->get('User')->get('last_login');
  }
}