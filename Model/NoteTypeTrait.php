<?php
namespace BlackBoxCode\Pando\Bundle\NoteBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait NoteTypeTrait
{
    use TypeTrait;
}
