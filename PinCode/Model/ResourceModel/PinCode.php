<?php

namespace NewTask\PinCode\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PinCode extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('pincode_data', 'sr_no');
    }
}
