<?php

namespace MyVendor\StoreInventory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Bewertung extends AbstractEntity
{

    /**
     * The name of the product
     *
     * @var string
     **/
    protected $autor = '';

    /**
     * The description of the product
     *
     * @var string
     **/
    protected $description = '';

    /**
     * Product constructor.
     *
     * @param string $autor
     * @param string $description
     */
    public function __construct($autor = '', $description = '')
    {
        $this->setAutor($autor);
        $this->setDescription($description);
    }

    /**
     * Sets the autor of the bewertung
     *
     * @param string $autor
     */
    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    /**
     * Gets the name of the product
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Sets the description of the product
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Gets the description of the product
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

}
