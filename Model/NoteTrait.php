<?php
namespace BlackBoxCode\Pando\Bundle\NoteBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait NoteTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $createdBy;

    /**
     * @ORM\ManyToOne(targetEntity="NoteType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;
}
