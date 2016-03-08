<?php

namespace AppBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Device
 *
 * @ORM\Table(name="`device`")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Device\DeviceRepository")
 */
class Device
{
    /**
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @ORM\Column(name="beacon_uuid", type="guid")
     */
    protected $beaconUuid;

    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getBeaconUuid()
    {
        return $this->beaconUuid;
    }

    /**
     * @param mixed $beaconUuid
     */
    public function setBeaconUuid($beaconUuid)
    {
        $this->beaconUuid = $beaconUuid;
    }
}
