<?php

namespace AppBundle\Entity\Statistic;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Absence
 *
 * @ORM\Table(name="`absence`")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Statistic\AbsenceRepository")
 */
class Absence
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
