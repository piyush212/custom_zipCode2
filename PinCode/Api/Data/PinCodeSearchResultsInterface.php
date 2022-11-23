<?php
namespace NewTask\PinCode\Api\Data;
interface PinCodeSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get PinCode list.
     * @return \NewTask\PinCode\Api\Data\PinCodeInterface[]
     */
    
    public function getItems();

    /**
     * Set pincode list.
     * @param \NewTask\PinCode\Api\Data\PinCodeInterface[] $items
     * @return $this
     */
    
    public function setItems(array $items);
}
