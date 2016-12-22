<?php

namespace AppBundle\Entity\Statistic;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Delay
 *
 * @ORM\Table(name="`delay`")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Statistic\DelayRepository")
 */
class Delay
{
    /**
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }
}
