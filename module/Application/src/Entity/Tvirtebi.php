<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a registered user.
 * @ORM\Entity()
 * @ORM\Table(name="tvirtebi")
 */
class Tvirtebi {

    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     *
     * @ORM\Column(name="mode")
     */
    protected $mode;

    /**
     *
     * @ORM\Column(name="status_id")
     */
    protected $status_id;

    /**
     * @ORM\ManyToOne(targetEntity="\Application\Entity\Tvirtebistatuses", inversedBy="tvirtebi_statuses")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;

    /**
     *
     * @ORM\Column(name="type_id")
     */
    protected $type_id;

    /**
     * @ORM\ManyToOne(targetEntity="\Application\Entity\Tvirtebitypes", inversedBy="tvirtebi_types")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    protected $type;

    /**
     *
     * @ORM\Column(name="user_id")
     */
    protected $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="\Application\Entity\User", inversedBy="users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     *
     * @ORM\Column(name="transporter_id")
     */
    protected $transporter_id;

    /**
     * @ORM\ManyToOne(targetEntity="\Application\Entity\User", inversedBy="users")
     * @ORM\JoinColumn(name="transporter_id", referencedColumnName="id")
     */
    protected $transporter;

    /**
     *
     * @ORM\Column(name="inner_type_id")
     */
    protected $inner_type_id;

    /**
     * @ORM\ManyToOne(targetEntity="\Application\Entity\Innertypes", inversedBy="inner_types")
     * @ORM\JoinColumn(name="inner_type_id", referencedColumnName="id")
     */
    protected $Innertype;

    /**
     *
     * @ORM\Column(name="truck_type_id")
     */
    protected $truck_type_id;

    /**
     *
     * @ORM\Column(name="weight")
     */
    protected $weight;

    /**
     *
     * @ORM\Column(name="volume")
     */
    protected $volume;

    /**
     *
     * @ORM\Column(name="lenght_km")
     */
    protected $lenght_km;

    /**
     *
     * @ORM\Column(name="trace")
     */
    protected $trace;

    /**
     *
     * @ORM\Column(name="start_direction")
     */
    protected $start_direction;

    /**
     *
     * @ORM\Column(name="end_direction")
     */
    protected $end_direction;

    /**
     *
     * @ORM\Column(name="add_date")
     */
    protected $add_date;

    /**
     *
     * @ORM\Column(name="distance")
     */
    protected $distance;

    /**
     *
     * @ORM\Column(name="load_date")
     */
    protected $load_date;

    /**
     *
     * @ORM\Column(name="comment")
     */
    protected $comment;

    public function getID() {
        return $this->id;
    }

    public function getMode() {
        return $this->mode;
    }

    public function getUser() {
        return $this->user;
    }

    public function getInnertype() {
        return $this->Innertype;
    }

    public function getAddDate() {
        return $this->add_date;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getLenght_km() {
        return $this->lenght_km;
    }

    public function getComment() {
        return $this->comment;
    }

    /**
     * Sets associated post.
     * @param \Application\Entity\User
     */
    public function setUser($user) {
        $this->user = $user;
    }

}

/*
id
mode
status_id
type_id
user_id
transporter_id
inner_type_id
truck_type_id
weight
volume
lenght_km
trace
start_direction
end_direction
distance
add_date
load_date
comment

 */