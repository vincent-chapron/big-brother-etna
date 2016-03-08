<?php

namespace AppBundle\Entity\Statistic;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Attendance
 *
 * @ORM\Table(name="`attendance`")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Statistic\AttendanceRepository")
 */
class Attendance
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
