<?php

namespace NewTask\PinCode\Model\ResourceModel\PinCode;

use NewTask\PinCode\Model\PinCode;
use NewTask\PinCode\Model\ResourceModel\PinCode as PinCodeResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PinCode::class, PinCodeResourceModel::class);
    }
}
