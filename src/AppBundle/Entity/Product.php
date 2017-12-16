<?php

namespace AppBundle\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct{
    /**
     * @var bool
     */
    protected $has_discount;

    /**
     * @return bool
     */
    public function getHasDiscount(): ?bool
    {
        return $this->has_discount;
    }

    /**
     * @param bool $flag
     */
    public function setHasDiscount(?bool $has_discount): void
    {
        $this->has_discount = $has_discount;
    }

}
