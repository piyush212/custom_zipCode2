<?php
namespace NewTask\PinCode\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use NewTask\PinCode\Api\Data\PinCodeInterface;
use NewTask\PinCode\Model\ResourceModel\PinCode as ResourceModel;

/**
 * Class PinCode
 */
class PinCode extends AbstractModel implements
    PinCodeInterface,
    IdentityInterface
{
    const CACHE_TAG = 'pincode_data';

    /**
     * Init
     */
    protected function _construct() // phpcs:ignore PSR2.Methods.MethodDeclaration
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getsr_no()];
    }

    public function getsr_no()
    {
        return $this->getData('sr_no');
    }
    public function getpincode()
    {
        return $this->getData('pincode');
    }
    public function setpincode($pincode)
    {
        return $this->setData('name', $pincode);
    }
    public function getcod()
    {
        return $this->getData('cod');
    }
    public function setcod($cod)
    {
        return $this->setData('cod', $cod);
    }
    public function getday()
    {
        return $this->getData('day');
    }
    public function setday($day)
    {
        return $this->setData('day', $day);
    }


}
