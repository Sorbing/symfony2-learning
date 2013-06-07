<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Acme\DemoBundle\Model\AuthorQuery;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        $author = \Acme\DemoBundle\Model\AuthorQuery::create()->findOneById(1);
        echo "<pre>"; print_r($author->toArray(\BasePeer::TYPE_FIELDNAME)); echo "</pre>";
        exit;

        // \BasePeer::TYPE_PHPNAME   >> CamelCase
        // \BasePeer::TYPE_COLNAME   >> table.column_name
        // \BasePeer::TYPE_FIELDNAME >> column_name

        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        return $this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }
}
