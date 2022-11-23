<?php

namespace NewTask\PinCode\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use NewTask\PinCode\Api\Data\PinCodeInterface;

interface PinCodeRepositoryInterface
{
    /**
     * @param int $sr_no
     * @return \NewTask\PinCode\Api\Data\PinCodeInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($sr_no);

    /**
     * @param \NewTask\PinCode\Api\Data\PinCodeInterface $PinCode
     * @return \NewTask\PinCode\Api\Data\PinCodeInterface
     */
    public function save(PinCodeInterface $PinCode);

    /**
     * @param \NewTask\PinCode\Api\Data\PinCodeInterface $PinCode
     * @return void
     */
    public function delete(PinCodeInterface $PinCode);

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \NewTask\PinCode\Api\Data\PinCodeSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
     public function deleteById($d);
}