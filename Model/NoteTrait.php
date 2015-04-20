<?php
namespace BlackBoxCode\Pando\Bundle\NoteBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

trait NoteTrait
{
    use IdTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=false)
     */
    private $note;

    /**
     * @var NoteTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="NoteType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @var UserInterface
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $createdBy;
    
    
    /**
     * {@inheritdoc}
     */
    public function getNote()
    {
        return $this->note;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setNote($note)
    {
        $this->note = $note;
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType(NoteTypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedBy(UserInterface $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }
}
