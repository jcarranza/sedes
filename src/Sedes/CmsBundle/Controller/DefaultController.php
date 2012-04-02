<?php

namespace Sedes\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
$url_web = fopen ("http://sedes/Symfony/web/app_dev.php/actualidad", "r"); 
if (!$url_web) { echo "<p>Error obteniendo codigo fuente de la web.\n"; exit; } 

$contenido = "";
while (!feof ($url_web))  
{ 
    $contenido .= fgets ($url_web); 
    //echo "$contenido"; 
}
        return $this->render('CmsBundle:Default:index.html.twig', array('name' => $contenido));
    }
}
