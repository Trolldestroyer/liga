<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partidos
 *
 * @ORM\Table(name="partidos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartidosRepository")
 */
class Partidos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="first_team", type="string", length=255)
     */
    private $firstTeam;

    /**
     * @var string
     *
     * @ORM\Column(name="second_team", type="string", length=255)
     */
    private $secondTeam;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_play", type="datetime")
     */
    private $date_play;

    /**
     * @var int
     *
     * @ORM\Column(name="first_result", type="integer")
     */
    private $firstResult;

    /**
     * @var string
     *
     * @ORM\Column(name="second_result", type="string", length=255)
     */
    private $secondResult;

    /**
     * @var string
     *
     * @ORM\Column(name="winner", type="string", length=255)
     */
    private $winner;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Partidos
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Partidos
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Partidos
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set firstTeam
     *
     * @param string $firstTeam
     *
     * @return Partidos
     */
    public function setFirstTeam($firstTeam)
    {
        $this->firstTeam = $firstTeam;

        return $this;
    }

    /**
     * Get firstTeam
     *
     * @return string
     */
    public function getFirstTeam()
    {
        return $this->firstTeam;
    }

    /**
     * Set secondTeam
     *
     * @param string $secondTeam
     *
     * @return Partidos
     */
    public function setSecondTeam($secondTeam)
    {
        $this->secondTeam = $secondTeam;

        return $this;
    }

    /**
     * Get secondTeam
     *
     * @return string
     */
    public function getSecondTeam()
    {
        return $this->secondTeam;
    }

    /**
     * @return \DateTime
     */
    public function getDatePlay()
    {
        return $this->date_play;
    }

    /**
     * @param \DateTime $date_play
     */
    public function setDatePlay($date_play)
    {
        $this->date_play = $date_play;
    }


    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Partidos
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set firstResult
     *
     * @param integer $firstResult
     *
     * @return Partidos
     */
    public function setFirstResult($firstResult)
    {
        $this->firstResult = $firstResult;

        return $this;
    }

    /**
     * Get firstResult
     *
     * @return int
     */
    public function getFirstResult()
    {
        return $this->firstResult;
    }

    /**
     * Set secondResult
     *
     * @param string $secondResult
     *
     * @return Partidos
     */
    public function setSecondResult($secondResult)
    {
        $this->secondResult = $secondResult;

        return $this;
    }

    /**
     * Get secondResult
     *
     * @return string
     */
    public function getSecondResult()
    {
        return $this->secondResult;
    }

    /**
     * Set winner
     *
     * @param string $winner
     *
     * @return Partidos
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return string
     */
    public function getWinner()
    {
        return $this->winner;
    }
}

