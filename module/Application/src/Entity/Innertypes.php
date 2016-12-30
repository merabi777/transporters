<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a registered user.
 * @ORM\Entity()
 * @ORM\Table(name="inner_types")
 */
class Innertypes {

    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(name="inner_type")
     */
    protected $inner_type;
    
    public function getInnerTypeName(){
        return $this->inner_type;
    }

}
