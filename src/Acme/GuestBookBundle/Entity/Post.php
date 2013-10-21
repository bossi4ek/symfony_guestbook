<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 20.10.13
 * Time: 13:22
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\GuestBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column()
     * @Assert\Length(min = "4")
     */
    protected $username;

    /**
     * @ORM\Column(type="text")
     */
    protected $message;

    /**
     * @ORM\Column()
     */
    protected $email;

    /**
     * @ORM\Column(type="integer")
     */
    protected $datecreate;

    protected $randmessage;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Post
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Post
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Post
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set datecreate
     *
     * @param integer $datecreate
     * @return Post
     */
    public function setDatecreate($datecreate)
    {
        $this->datecreate = $datecreate;
    
        return $this;
    }

    /**
     * Get datecreate
     *
     * @return integer 
     */
    public function getDatecreate()
    {
        return $this->datecreate;
    }

    /**
     * @param mixed $randmessage
     */
    public function setRandmessage($randmessage)
    {
        $this->randmessage = $randmessage;
    }

    /**
     * @return mixed
     */
    public function getRandmessage()
    {
        return $this->randmessage;
    }

}