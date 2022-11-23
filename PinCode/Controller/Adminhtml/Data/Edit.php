<?php

namespace NewTask\PinCode\Controller\Adminhtml\Data;

use Magento\Framework\Controller\ResultFactory;

class Edit extends \Magento\Backend\App\Action
{

    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend((__('pincode_data')));
        return $resultPage;
    }
}

