<?php

namespace Vadim\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Vadim\HomeBundle\MyDbMails;
Use Vadim\HomeBundle\Entity\Mails;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
       $mailer = $this->get("vadim_home.exampler");
       $mailer->sendMail($name);
        return array('name' => $name);

    }
}
