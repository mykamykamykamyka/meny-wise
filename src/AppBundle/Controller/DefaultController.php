<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    /*public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }*/
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $liens = $em->getRepository('AppBundle:homelinks')->findByType('lien');
        $serviceEmploi = $this->getServiceEmploi();
        $slides = $em->getRepository('AppBundle:homelinks')->findByType('slide');
        $socialNetwork = $this->getSocialNetwork();
        $publications = $this->getPublications();
        return $this->render('AppBundle:Home:home.html.twig', array(
            'liens'=>$liens,
            'serviceEmploi'=>$serviceEmploi,
            'slides'=>$slides,
            'socialNetwork'=>$socialNetwork,
            'publications'=>$publications,
            ));
    }

    private function getServiceEmploi()
    {
        $serviceEmploi[] = array('title'=>'Services emploi', 'icon'=>'et-circle-compass', 'link'=>'#');
        $serviceEmploi[] = array('title'=>'Services emploi', 'icon'=>'et-piechart', 'link'=>'#');
        $serviceEmploi[] = array('title'=>'Services emploi', 'icon'=>'et-strategy', 'link'=>'#');
        $serviceEmploi[] = array('title'=>'Services emploi', 'icon'=>'et-streetsign', 'link'=>'#');
        return $serviceEmploi;
    }
    private function getSocialNetwork()
    {
        $socialNetwork[] = array('title'=>'twitter', 'link'=>'#', 'icon'=>'fa fa-twitter', 'iconColor'=>'aqua', 'text'=>'Follow Us');
        $socialNetwork[] = array('title'=>'facebook', 'link'=>'#', 'icon'=>'fa fa-facebook', 'iconColor'=>'blue', 'text'=>'Be Our Friend');
        $socialNetwork[] = array('title'=>'youtube', 'link'=>'#', 'icon'=>'fa fa-youtube', 'iconColor'=>'red', 'text'=>'Our Videos');
        $socialNetwork[] = array('title'=>'linkedin', 'link'=>'#', 'icon'=>'fa fa-linkedin-square', 'iconColor'=>'blue', 'text'=>'Check Our Identity');
        $socialNetwork[] = array('title'=>'instagram', 'link'=>'#', 'icon'=>'fa fa-instagram', 'iconColor'=>'yellow', 'text'=>'See Our Images');
        $socialNetwork[] = array('title'=>'viadeo', 'link'=>'#', 'icon'=>'fa fa-viadeo', 'iconColor'=>'warning', 'text'=>'Viadeo text');
        return $socialNetwork;
    }
    private function getPublications()
    {
        $publications[] = array('user'=>'myka1' ,'title'=>'marary', 'image'=>'assets/images/demo/451x300/24-min.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.', 'link'=>'#');
        $publications[] = array('user'=>'myka2' ,'title'=>'lorem', 'image'=>'assets/images/demo/451x300/17-min.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.', 'link'=>'#');
        $publications[] = array('user'=>'myka3' ,'title'=>'ipsum', 'image'=>'assets/images/demo/451x300/30-min.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.', 'link'=>'#');
        $publications[] = array('user'=>'myka4' ,'title'=>'dolor', 'image'=>'assets/images/demo/451x300/26-min.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.', 'link'=>'#');
        $publications[] = array('user'=>'myka5' ,'title'=>'sit amet', 'image'=>'assets/images/demo/451x300/18-min.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.', 'link'=>'#');
        $publications[] = array('user'=>'myka6' ,'title'=>'constectetur', 'image'=>'assets/images/demo/451x300/34-min.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.', 'link'=>'#');
        $publications[] = array('user'=>'myka' ,'title'=>'ipsata', 'image'=>'assets/images/demo/451x300/37-min.jpg', 'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.', 'link'=>'#');
        return $publications;
    }
}
