<?php
//
//
//namespace NewTask\PinCode\Model;
//
//use NewTask\PinCode\Model\ResourceModel\PinCode\CollectionFactory;;
//
//class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
//{
//    /**
//     * @var array
//     */
//    protected $_loadedData;
//    public function __construct(
//        $name,
//        $primaryFieldName,
//        $requestFieldName,
//        CollectionFactory $collectionFactory,
//        array $meta = [],
//        array $data = []
//    ) {
//        $this->collection = $collectionFactory->create();
//        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
//    }
//    public function getData()
//    {
//
//        if (isset($this->_loadedData)) {
//
//            return $this->_loadedData;
//        }
//        $items = $this->collection->getItems();
//
//
//        foreach ($items as $data) {
//            $this->_loadedData[$data->getsr_no()]['addpin']= $data->getData();
//        }
//        return $this->_loadedData;
//    }
//}




namespace NewTask\PinCode\Model;

use NewTask\PinCode\Model\ResourceModel\PinCode\CollectionFactory;

;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var array
     */
    protected $_loadedData;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    )
    {
        $this->collection = $collectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->_loadedData)) {

            return $this->_loadedData;
        }
        $items = $this->collection->getItems();

        foreach ($items as $data) {
            $this->_loadedData[$data->getsr_no()] = $data->getData();
        }

        return $this->_loadedData;
    }
}
