<?php

/* kenyLeboncoinBundle:Annonce:annonce.html.twig */
class __TwigTemplate_2094ffffb50bc0c42ed34111f4285d6a883109a7971ca3caab2d4331be7523f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("kenyLeboncoinBundle::layout.html.twig", "kenyLeboncoinBundle:Annonce:annonce.html.twig", 2);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "kenyLeboncoinBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section($context, array $blocks = array())
    {
        // line 5
        echo "          
             
              ";
        // line 8
        echo "              <form action=\"";
        echo $this->env->getExtension('routing')->getPath("keny_leboncoin_annonce");
        echo "\" method=\"post\" align=\"center\">
               <fieldset class=\"scheduler-border\"> 
                 <legend class=\"scheduler-border\"> CATHEGORIE </legend>

                   ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cathegorie", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cathegorie", array()), 'widget');
        echo "<br>
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeannonce", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeannonce", array()), 'widget');
        echo "
               </fieldset>

               <fieldset class=\"scheduler-border\"> 
               <legend class=\"scheduler-border\">LOCALISATION</legend>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
               </fieldset>
               

              <fieldset class=\"scheduler-border\"> 
               <legend class=\"scheduler-border\">VOTRE ANNONCE</legend>
               ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
               ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget');
        echo "
               ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
               ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prix", array()), 'widget');
        echo "
               </fieldset>

               <fieldset class=\"scheduler-border\"> 
               <legend class=\"scheduler-border\">VOS INFORMATIONS</legend>
               ";
        // line 33
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annonceur", array()), 'widget');
        echo "
               </fieldset>

               <fieldset class=\"scheduler-border\"> 
               <legend class=\"scheduler-border\">PHOTOS</legend>
               ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
               </fieldset>

                <fieldset class=\"scheduler-border\"> 
               <legend class=\"scheduler-border\"></legend>
                   <input type=\"submit\" value=\"VALIDER\" align=\"center\">
               </fieldset>
               


              <form>


";
    }

    public function getTemplateName()
    {
        return "kenyLeboncoinBundle:Annonce:annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  96 => 33,  86 => 27,  80 => 26,  74 => 25,  68 => 24,  59 => 18,  49 => 13,  43 => 12,  35 => 8,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# on herite du layout dans ressources view #}*/
/* {%extends "kenyLeboncoinBundle::layout.html.twig"%} */
/* */
/* {% block section %}*/
/*           */
/*              */
/*               {#formulaire de creation d'une annonce#}*/
/*               <form action="{{ path("keny_leboncoin_annonce") }}" method="post" align="center">*/
/*                <fieldset class="scheduler-border"> */
/*                  <legend class="scheduler-border"> CATHEGORIE </legend>*/
/* */
/*                    {{ form_label(form.cathegorie) }} {{ form_widget(form.cathegorie) }}<br>*/
/*                     {{ form_label(form.typeannonce) }} {{ form_widget(form.typeannonce) }}*/
/*                </fieldset>*/
/* */
/*                <fieldset class="scheduler-border"> */
/*                <legend class="scheduler-border">LOCALISATION</legend>*/
/*                 {{ form_widget(form.departement) }}*/
/*                </fieldset>*/
/*                */
/* */
/*               <fieldset class="scheduler-border"> */
/*                <legend class="scheduler-border">VOTRE ANNONCE</legend>*/
/*                {{ form_label(form.date) }} {{ form_widget(form.date) }}*/
/*                {{ form_label(form.titre) }} {{ form_widget(form.titre) }}*/
/*                {{ form_label(form.description) }} {{ form_widget(form.description) }}*/
/*                {{ form_label(form.prix) }} {{ form_widget(form.prix) }}*/
/*                </fieldset>*/
/* */
/*                <fieldset class="scheduler-border"> */
/*                <legend class="scheduler-border">VOS INFORMATIONS</legend>*/
/*                {#{{ form_rest(form) }}#}*/
/*                 {{ form_widget(form.annonceur) }}*/
/*                </fieldset>*/
/* */
/*                <fieldset class="scheduler-border"> */
/*                <legend class="scheduler-border">PHOTOS</legend>*/
/*                {{ form_widget(form.image) }}*/
/*                </fieldset>*/
/* */
/*                 <fieldset class="scheduler-border"> */
/*                <legend class="scheduler-border"></legend>*/
/*                    <input type="submit" value="VALIDER" align="center">*/
/*                </fieldset>*/
/*                */
/* */
/* */
/*               <form>*/
/* */
/* */
/* {% endblock %}*/
