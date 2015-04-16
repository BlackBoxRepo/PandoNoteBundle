<?php
namespace BlackBoxCode\Pando\Bundle\NoteBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\HasIdTrait;
use Doctrine\ORM\Mapping as ORM;

trait NoteTrait
{
    use HasIdTrait;

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
