<?php
namespace NewTask\PinCode\Controller\Edit;

    use Magento\Framework\App\Action\Action;
    use Magento\Framework\App\Action\Context;
    use Magento\Framework\Exception\CouldNotSaveException;
    use Magento\Framework\Exception\LocalizedException;
    use Magento\Framework\Exception\NoSuchEntityException;
    use Magento\Framework\View\Result\PageFactory;

    use NewTask\PinCode\Api\PinCodeRepositoryInterface;
    use NewTask\PinCode\Api\Data\PinCodeInterface;

    class Edit extends Action
    {
        protected $_pageFactory;
        protected $_PinCodeRepository;
        protected $_PinCodeModel;

        public function __construct(
            Context $context,
            PageFactory $pageFactory,
            PinCodeRepositoryInterface $PinCodeRepository,
            PinCodeInterface $PinCodeInterface
        ) {
            $this->_pageFactory = $pageFactory;
            $this->_PinCodeRepository=$PinCodeRepository;
            $this->_PinCodeModel = $PinCodeInterface;
            return parent::__construct($context);
        }

        public function execute()
        {
            $id = $_GET;
            try {
                $emp = $this->_PinCodeRepository->getById($id);
                echo "sr_no = " . $emp->getsr_no() . "<br>";
                echo "Email = " . $emp->getpincode();
                $emp->setpincode("This is the updated title");
                $emp->setcod("This is the updated Description");
                $this->_PinCodeRepository->save($emp);
            } catch (NoSuchEntityException $e) {
                echo "No such entity exception - " . $e->getMessage();
            } catch (LocalizedException $e) {
                echo "Localized Exception" . $e->getMessage();
            }

        }
    }
