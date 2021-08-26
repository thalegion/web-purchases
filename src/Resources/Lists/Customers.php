<?php

namespace Wowmaking\WebPurchases\Resources\Lists;

use Wowmaking\WebPurchases\Interfaces\ResourcesList;
use Wowmaking\WebPurchases\Resources\Entities\Customer;

class Customers implements ResourcesList
{
    /** @var Customer[] */
    protected $list = [];

    /**
     * @return Customer[]
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * @param array $list
     */
    public function setList(array $list): void
    {
        $this->list = $list;
    }
}