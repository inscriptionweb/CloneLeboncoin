<?php

/* kenyLeboncoinBundle:Help:help.html.twig */
class __TwigTemplate_d848eb26f491e25496318ea23fa341a9e6fe5d7b94bd5ae4b84018e6c9467164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "kenyLeboncoinBundle:Help:help.html.twig", 2);
        $this->blocks = array(
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

    public function getTemplateName()
    {
        return "kenyLeboncoinBundle:Help:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }
}
/* {# on herite du layout #}*/
/* {%extends "::layout.html.twig"%}*/
/* */
/* */
