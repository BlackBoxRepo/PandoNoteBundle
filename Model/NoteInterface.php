<?php
namespace BlackBoxCode\Pando\Bundle\NoteBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;
use BlackBoxCode\Pando\Bundle\UserBundle\Model\UserInterface;

interface NoteInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getNote();

    /**
     * @param string $note
     * @return $this
     */
    public function setNote($note);

    /**
     * @return NoteTypeInterface
     */
    public function getType();

    /**
     * @param NoteTypeInterface $type
     * @return $this
     */
    public function setType(NoteTypeInterface $type);

    /**
     * @return UserInterface
     */
    public function getCreatedBy();

    /**
     * @param UserInterface $createdBy
     * @return $this
     */
    public function setCreatedBy(UserInterface $createdBy);
}
