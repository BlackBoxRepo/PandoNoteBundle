<?php
namespace BlackBoxCode\Pando\NoteBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait NoteTypeTrait
{
    use TypeTrait;
}
