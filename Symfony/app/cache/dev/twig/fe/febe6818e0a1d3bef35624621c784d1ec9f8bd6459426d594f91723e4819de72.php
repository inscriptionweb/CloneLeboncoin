<?php

/* kenyLeboncoinBundle:Offre:offre.html.twig */
class __TwigTemplate_79fdf8991687d184fb72162e43ad668980191838d9f113fd7a87bc88dd6f0f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("kenyLeboncoinBundle::layout.html.twig", "kenyLeboncoinBundle:Offre:offre.html.twig", 2);
        $this->blocks = array(
            'recherche' => array($this, 'block_recherche'),
            'leftright' => array($this, 'block_leftright'),
            'section' => array($this, 'block_section'),
            'ala_une' => array($this, 'block_ala_une'),
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

    // line 3
    public function block_recherche($context, array $blocks = array())
    {
        // line 4
        echo "<form >
              Recherche:<input type =\"text\">
              <select>
                <option>CHAMPAGNE-ARDENNE</option>
                <option>ILE DE FRANCE</option>
                <option>Bourgogne</option>
              </select>
              <select>
                <option>Marne</option>
                <option>Ardennes</option>
                <option>Aube</option>
                <option>Haute-Marne</option>
              </select>
              <input type =\"text\" placeholder=\"Villes ou Codes Postaux\">
              <br><br>
                <input type=\"checkbox\">
                 <a href=\"#\">Recherche dans le titre uniquement</a> 
              <br> <br>
              <div align =\"right\" >
                 <input type=\"checkbox\">
                 <a href=\"#\">Annonces * Urgente uniquement</a> 
                  <input type=\"submit\" value=\"CHERCHER\">
              </div>
            </form>   
";
    }

    // line 30
    public function block_leftright($context, array $blocks = array())
    {
        // line 31
        echo "          <div class=\"gauche\" ><a href=\"#\" class=\"col-lg-6\" >Recherchedans le titre uniquement</a> </div>
          <div class=\"droite\" ><a href=\"#\" class=\"col-lg-6\">Recherchedans le titre uniquement</a>  </div>
";
    }

    // line 36
    public function block_section($context, array $blocks = array())
    {
        // line 37
        echo "          
          ";
    }

    // line 40
    public function block_ala_une($context, array $blocks = array())
    {
        // line 41
        echo " <marquee><h2>LISTE DE NOS OFFRES </h2></marquee>
";
    }

    public function getTemplateName()
    {
        return "kenyLeboncoinBundle:Offre:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 41,  79 => 40,  74 => 37,  71 => 36,  65 => 31,  62 => 30,  34 => 4,  31 => 3,  11 => 2,);
    }
}
/* {# on herite du layout dans ressources view #}*/
/* {%extends "kenyLeboncoinBundle::layout.html.twig"%} */
/* {% block recherche %}*/
/* <form >*/
/*               Recherche:<input type ="text">*/
/*               <select>*/
/*                 <option>CHAMPAGNE-ARDENNE</option>*/
/*                 <option>ILE DE FRANCE</option>*/
/*                 <option>Bourgogne</option>*/
/*               </select>*/
/*               <select>*/
/*                 <option>Marne</option>*/
/*                 <option>Ardennes</option>*/
/*                 <option>Aube</option>*/
/*                 <option>Haute-Marne</option>*/
/*               </select>*/
/*               <input type ="text" placeholder="Villes ou Codes Postaux">*/
/*               <br><br>*/
/*                 <input type="checkbox">*/
/*                  <a href="#">Recherche dans le titre uniquement</a> */
/*               <br> <br>*/
/*               <div align ="right" >*/
/*                  <input type="checkbox">*/
/*                  <a href="#">Annonces * Urgente uniquement</a> */
/*                   <input type="submit" value="CHERCHER">*/
/*               </div>*/
/*             </form>   */
/* {% endblock %}*/
/* */
/* {% block leftright %}*/
/*           <div class="gauche" ><a href="#" class="col-lg-6" >Recherchedans le titre uniquement</a> </div>*/
/*           <div class="droite" ><a href="#" class="col-lg-6">Recherchedans le titre uniquement</a>  </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block section %}*/
/*           */
/*           {% endblock %}*/
/* */
/* {% block ala_une %}*/
/*  <marquee><h2>LISTE DE NOS OFFRES </h2></marquee>*/
/* {% endblock %}*/
