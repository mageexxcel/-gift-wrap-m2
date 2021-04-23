<?php

namespace Excellence\Giftwrap\Controller\AbstractController;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ResponseInterface;

interface GiftwrapLoaderInterface
{
    /**
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return \Excellence\Giftwrap\Model\Giftwrap
     */
    public function load(RequestInterface $request, ResponseInterface $response);
}
