<?php

namespace Eternus\BookInfo\Controller\Book;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Eternus\BookInfo\Model\Book;
use Eternus\BookInfo\Model\ResourceModel\Book as BookResource;

class Add extends Action
{
    /**
     * @var Book
     */
    private $book;
    /**
     * @var BookResource
     */
    private $bookResource;

    /**
     * Add constructor.
     * @param Context $context
     * @param Book $book
     * @param BookResource $bookResource
     */
    public function __construct(
        Context $context,
        Book $book,
        BookResource $bookResource
    )
    {
        parent::__construct($context);
        $this->book = $book;
        $this->bookResource = $bookResource;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        /* Get the post data */
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $bookModel = $this->book;
        $bookModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->bookResource->save($bookModel);
            $this->messageManager->addSuccessMessage("Book information saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving book information"));
        }

        
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('bookinfo');
        return $redirect;
    }
}