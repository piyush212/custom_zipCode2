<?php

namespace NewTask\PinCode\Controller\Adminhtml\Data;
class Save extends \Magento\Backend\App\Action
{

    var $pincodeFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \NewTask\PinCode\Model\PinCodeFactory $dataFactory
    ) {
        parent::__construct($context);
        $this->dataFactory = $dataFactory;
    }

    public function execute()
    {

        $data = $this->getRequest()->getPostValue();

        if (!$data) {
            $this->_redirect('data/data/edit');
            return;
        }
        try {
            $rowData = $this->dataFactory->create();
            $rowData->setData($data);
            if (isset($data['sr_no'])) {
                $rowData->setId($data['sr_no']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('pincode/data');
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('NewTask_PinCode::save');
    }
}
