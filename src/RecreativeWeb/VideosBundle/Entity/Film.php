<?php

namespace RecreativeWeb\VideosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="films")
 * @ORM\Entity(repositoryClass="RecreativeWeb\VideosBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255, nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="realisateur", type="string", length=255, nullable=true)
     */
    private $realisateur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee", type="datetime", nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(name="cover", type="string", nullable=true)
     */
    private $cover;

    /**
     * @ORM\Column(name="bigcover", type="string", nullable=true)
     */
    private $bigCover;

    /**
     * @ORM\Column(name="synopsis", type="text", nullable=true)
     */
    private $synopsis;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Film
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set realisateur
     *
     * @param string $realisateur
     *
     * @return Film
     */
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    /**
     * Get realisateur
     *
     * @return string
     */
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     *
     * @return Film
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set cover
     *
     * @param string $cover
     *
     * @return Film
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Film
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set bigCover
     *
     * @param string $bigCover
     *
     * @return Film
     */
    public function setBigCover($bigCover)
    {
        $this->bigCover = $bigCover;

        return $this;
    }

    /**
     * Get bigCover
     *
     * @return string
     */
    public function getBigCover()
    {
        return $this->bigCover;
    }
}
