<?php

namespace ElasticBundle\Controller;
use ElasticBundle\Service\Elastic\ElasticManager;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PeerController
 * @package ElasticBundle\Controller
 */
class PeerController extends AbstractBaseController
{
    public function indexAction(Request $request)
    {

        $elasticManager = $this->get('elastic.manager.elastic');
        $peers = $elasticManager->getPeers(true, false);

        return $this->render('ElasticBundle:Peer:index.html.twig',[
            'peers' => $peers,
        ]);
    }
}
