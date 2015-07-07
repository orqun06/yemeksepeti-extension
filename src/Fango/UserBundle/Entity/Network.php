<?php

namespace Fango\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Network
 */
class Network
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $networkId;

    /**
     * @var \DateTime
     */
    private $createdAt;


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
     * Set type
     *
     * @param string $type
     * @return Network
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set networkId
     *
     * @param integer $networkId
     * @return Network
     */
    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;

        return $this;
    }

    /**
     * Get networkId
     *
     * @return integer 
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Network
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @var \Fango\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Fango\UserBundle\Entity\User $user
     * @return Network
     */
    public function setUser(\Fango\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Fango\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var string
     */
    private $rest;


    /**
     * Set rest
     *
     * @param string $rest
     * @return Network
     */
    public function setRest($rest)
    {
        $this->rest = $rest;

        return $this;
    }

    /**
     * Get rest
     *
     * @return string 
     */
    public function getRest()
    {
        return $this->rest;
    }
    /**
     * @var string
     */
    private $display;


    /**
     * Set display
     *
     * @param string $display
     * @return Network
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return string 
     */
    public function getDisplay()
    {
        return $this->display;
    }
    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $tokenSecret;


    /**
     * Set token
     *
     * @param string $token
     * @return Network
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set tokenSecret
     *
     * @param string $tokenSecret
     * @return Network
     */
    public function setTokenSecret($tokenSecret)
    {
        $this->tokenSecret = $tokenSecret;

        return $this;
    }

    /**
     * Get tokenSecret
     *
     * @return string 
     */
    public function getTokenSecret()
    {
        return $this->tokenSecret;
    }
    /**
     * @var string
     */
    private $cppDay;

    /**
     * @var string
     */
    private $cppWeek;

    /**
     * @var string
     */
    private $cppLifetime;


    /**
     * Set cppDay
     *
     * @param string $cppDay
     * @return Network
     */
    public function setCppDay($cppDay)
    {
        $this->cppDay = $cppDay;

        return $this;
    }

    /**
     * Get cppDay
     *
     * @return string 
     */
    public function getCppDay()
    {
        return $this->cppDay;
    }

    /**
     * Set cppWeek
     *
     * @param string $cppWeek
     * @return Network
     */
    public function setCppWeek($cppWeek)
    {
        $this->cppWeek = $cppWeek;

        return $this;
    }

    /**
     * Get cppWeek
     *
     * @return string 
     */
    public function getCppWeek()
    {
        return $this->cppWeek;
    }

    /**
     * Set cppLifetime
     *
     * @param string $cppLifetime
     * @return Network
     */
    public function setCppLifetime($cppLifetime)
    {
        $this->cppLifetime = $cppLifetime;

        return $this;
    }

    /**
     * Get cppLifetime
     *
     * @return string 
     */
    public function getCppLifetime()
    {
        return $this->cppLifetime;
    }

    /**
     * @var integer
     */
    private $followersCount;

    /**
     * Set followerCount
     *
     * @param integer $followersCount
     * @return Network
     */
    public function setFollowersCount($followersCount)
    {
        $this->followersCount = $followersCount;

        return $this;
    }

    /**
     * Get followerCount
     *
     * @return integer 
     */
    public function getFollowersCount()
    {
        return $this->followersCount;
    }
}
