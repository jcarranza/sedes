<?php

namespace Sedes\ArticuloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticuloController extends Controller
{
    public function actualidadAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $articulos = $em->getRepository('ArticuloBundle:Articulo')->findAll();
        $formato = $this->get('request')->getRequestFormat();
        return $this->render('ArticuloBundle::actualidad.'.$formato.'.twig', array('articulos' => $articulos));
    }
    
    public function archivoAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $articulos = $em->getRepository('ArticuloBundle:Articulo')->find(10);
        return $this->render('ArticuloBundle::archivo.html.twig', array('articulos' => $articulos));
    }
    
    public function articuloAction($slug)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $articulo = $em->getRepository('ArticuloBundle:Articulo')->findOneByTitulo($slug);
        return $this->render('ArticuloBundle::articulo.html.twig', array('articulos' => $articulo));
    }
}
