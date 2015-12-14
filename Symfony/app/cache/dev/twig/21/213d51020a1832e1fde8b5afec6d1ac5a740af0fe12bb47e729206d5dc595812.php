<?php

/* kenyLeboncoinBundle:Accueil:accueil.html.twig */
class __TwigTemplate_5e499d01d5428cc64e7e4591aa95429a5b7b411d5c1bf42e3a66e216d1c9fe36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "kenyLeboncoinBundle:Accueil:accueil.html.twig", 2);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section($context, array $blocks = array())
    {
        // line 5
        echo "<h2> BIENVENU </h2> <br>
<h3><marquee>  CECI EST UN CLONE DU SITE LEBONCOIN.FR A DES FINS PUREMENT EDUCATIVES</marquee> <h3>
<img src=\" \"></h1>
";
    }

    public function getTemplateName()
    {
        return "kenyLeboncoinBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# on herite du layout #}*/
/* {%extends "::layout.html.twig"%}*/
/* */
/* {% block section %}*/
/* <h2> BIENVENU </h2> <br>*/
/* <h3><marquee>  CECI EST UN CLONE DU SITE LEBONCOIN.FR A DES FINS PUREMENT EDUCATIVES</marquee> <h3>*/
/* <img src=" "></h1>*/
/* {% endblock %}*/
/* */
/* */
