<?php

/* kenyLeboncoinBundle::layout.html.twig */
class __TwigTemplate_a2aea154599c0cdff306a26147cef79591ace18767ccbd5fecb45d48cec71da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "kenyLeboncoinBundle::layout.html.twig", 1);
        $this->blocks = array(
            'recherche' => array($this, 'block_recherche'),
            'leftright' => array($this, 'block_leftright'),
            'nextleftright' => array($this, 'block_nextleftright'),
            'section' => array($this, 'block_section'),
            'ala_une' => array($this, 'block_ala_une'),
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

    // line 3
    public function block_recherche($context, array $blocks = array())
    {
    }

    // line 6
    public function block_leftright($context, array $blocks = array())
    {
    }

    // line 9
    public function block_nextleftright($context, array $blocks = array())
    {
    }

    // line 12
    public function block_section($context, array $blocks = array())
    {
    }

    // line 15
    public function block_ala_une($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "kenyLeboncoinBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  47 => 12,  42 => 9,  37 => 6,  32 => 3,  11 => 1,);
    }
}
/* {%extends "::layout.html.twig"%}*/
/* */
/* {% block recherche %}*/
/* {% endblock %}*/
/* */
/* {% block leftright %}*/
/* {% endblock %}*/
/* */
/* {% block nextleftright %}*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/* {% endblock %}*/
/* */
/* {% block ala_une %}*/
/* {% endblock %}*/
/* */
