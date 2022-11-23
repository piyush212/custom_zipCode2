<?php

namespace NewTask\PinCode\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface PinCodeInterface extends ExtensibleDataInterface
{

    public function getsr_no();

    public function getpincode();


    public function setpincode($pincode);


    public function getcod();


    public function setcod($cod);


    public function getday();

    public function setday($day);

}
