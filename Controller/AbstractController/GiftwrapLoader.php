<?php

namespace Excellence\Giftwrap\Controller\AbstractController;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Registry;

class GiftwrapLoader implements GiftwrapLoaderInterface
{
    /**
     * @var \Excellence\Giftwrap\Model\GiftwrapFactory
     */
    protected $giftwrapFactory;

    /**
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * @var \Magento\Framework\UrlInterface
     */
    protected $url;

    /**
     * @param \Excellence\Giftwrap\Model\GiftwrapFactory $giftwrapFactory
     * @param OrderViewAuthorizationInterface $orderAuthorization
     * @param Registry $registry
     * @param \Magento\Framework\UrlInterface $url
     */
    public function __construct(
        \Excellence\Giftwrap\Model\GiftwrapFactory $giftwrapFactory,
        Registry $registry,
        \Magento\Framework\UrlInterface $url
    ) {
        $this->giftwrapFactory = $giftwrapFactory;
        $this->registry = $registry;
        $this->url = $url;
    }

    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return bool
     */
    public function load(RequestInterface $request, ResponseInterface $response)
    {
        $id = (int)$request->getParam('id');
        if (!$id) {
            $request->initForward();
            $request->setActionName('noroute');
            $request->setDispatched(false);
            return false;
        }

        $giftwrap = $this->giftwrapFactory->create()->load($id);
        $this->registry->register('current_giftwrap', $giftwrap);
        return true;
    }
}
