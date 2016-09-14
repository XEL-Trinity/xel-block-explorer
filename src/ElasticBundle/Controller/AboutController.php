<?php

namespace ElasticBundle\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AboutController
 * @package ElasticBundle\Controller
 */
class AboutController extends ExtendController
{
    public function showAction(Request $request)
    {

        $elasticManager = $this->get('elastic.manager.elastic');
        $blockchainStatus = $elasticManager->getBlockchainStatus();

        return $this->render('ElasticBundle:About:index.html.twig',[
            'blockchainStatus' => $blockchainStatus
        ]);
    }
}