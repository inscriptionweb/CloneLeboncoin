<?php

/* ::layout.html.twig */
class __TwigTemplate_7ea238e95fab23560b87053cc95515d61bf6e92403466709e29149359269174d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'recherche' => array($this, 'block_recherche'),
            'leftright' => array($this, 'block_leftright'),
            'nextleftright' => array($this, 'block_nextleftright'),
            'section' => array($this, 'block_section'),
            'ala_une' => array($this, 'block_ala_une'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo " 
        </title>
        ";
        // line 12
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "      
    </head>

<body>
    <div class=\"container\"> ";
        // line 23
        echo "      <header class=\"row\">
         <div class=\"col-lg-3\">
          <img class=\"logo\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" align=\"left\"></img>
         </div>
         <div class =\"col-lg-3\">
            <p>ANNONCES  <br>CHAMPAGNE-ARDENNE</p>
          </div> 
         <div class=\"col-lg-6\" align=\"right\" id=\"conn\">
            EMAIL:<input type=\"text\">
             Password:<input type=\"text\">
         </div>
      </header>
      
      <div class=\"navigation\">
        <nav class=\"row\"> ";
        // line 38
        echo "          <ul id=\"menu\">
          <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("keny_leboncoin_accueil");
        echo "\">ACCUEIL</a></li>
          <li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("keny_leboncoin_annonce");
        echo "\">DEPOSER UNE ANNONCE</a></li>
          <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("keny_leboncoin_offre");
        echo "\">OFFRES</a></li>
          <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("keny_leboncoin_demande");
        echo "\">DEMANDES</a></li>
          <li><a href=\"#\">MES ANNONCES</a></li>
          <li><a href=\"#\">BOUTIQUES</a></li>
          <li><a href=\"#\">MON COMPTE</a></li>
          <li><a href=\"#\">AIDE</a></li>       
          </ul>
        </nav> 
      </div>
      
        
        <div class=\"row\">
          <div class=\"recherche\" >
            ";
        // line 54
        $this->displayBlock('recherche', $context, $blocks);
        // line 56
        echo "          
          </div>
        </div> 

        <div class=\"row\" >
        ";
        // line 61
        $this->displayBlock('leftright', $context, $blocks);
        // line 64
        echo "        </div>
       

        <div class=\"row\" >
          ";
        // line 68
        $this->displayBlock('nextleftright', $context, $blocks);
        // line 71
        echo "        </div>
        

        <div class=\"row\" > 

          <div class=\"annonce\">
          <section class=\"col-lg-9\">
            
           ";
        // line 79
        $this->displayBlock('section', $context, $blocks);
        // line 82
        echo "           

          </section>
          </div>

          
          <div class=\"col-lg-3\" id=\"section-right\">
          ";
        // line 89
        $this->displayBlock('ala_une', $context, $blocks);
        // line 92
        echo "          </div>

    </div> ";
        // line 95
        echo "

</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " 
            INCENTEEV TEST SYMFONY 
            ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "          <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
          <link rel=\"stylesheet\"  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
         

        ";
    }

    // line 54
    public function block_recherche($context, array $blocks = array())
    {
        // line 55
        echo "             
            ";
    }

    // line 61
    public function block_leftright($context, array $blocks = array())
    {
        echo " 

        ";
    }

    // line 68
    public function block_nextleftright($context, array $blocks = array())
    {
        echo " 
         
          ";
    }

    // line 79
    public function block_section($context, array $blocks = array())
    {
        // line 80
        echo "
          ";
    }

    // line 89
    public function block_ala_une($context, array $blocks = array())
    {
        // line 90
        echo "            
          ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 90,  209 => 89,  204 => 80,  201 => 79,  193 => 68,  185 => 61,  180 => 55,  177 => 54,  169 => 14,  164 => 13,  161 => 12,  153 => 7,  144 => 95,  140 => 92,  138 => 89,  129 => 82,  127 => 79,  117 => 71,  115 => 68,  109 => 64,  107 => 61,  100 => 56,  98 => 54,  83 => 42,  79 => 41,  75 => 40,  71 => 39,  68 => 38,  53 => 25,  49 => 23,  43 => 18,  40 => 12,  36 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>*/
/*             {% block title %} */
/*             INCENTEEV TEST SYMFONY */
/*             {% endblock %} */
/*         </title>*/
/*         {# on declare dans ce bloc les links vers nos feuilles de styles#}*/
/*         {% block stylesheets %}*/
/*           <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />*/
/*           <link rel="stylesheet"  href="{{asset('css/style.css')}}" />*/
/*          */
/* */
/*         {% endblock %}*/
/*       */
/*     </head>*/
/* */
/* <body>*/
/*     <div class="container"> {# debut div container#}*/
/*       <header class="row">*/
/*          <div class="col-lg-3">*/
/*           <img class="logo" src="{{asset('img/logo.png')}}" align="left"></img>*/
/*          </div>*/
/*          <div class ="col-lg-3">*/
/*             <p>ANNONCES  <br>CHAMPAGNE-ARDENNE</p>*/
/*           </div> */
/*          <div class="col-lg-6" align="right" id="conn">*/
/*             EMAIL:<input type="text">*/
/*              Password:<input type="text">*/
/*          </div>*/
/*       </header>*/
/*       */
/*       <div class="navigation">*/
/*         <nav class="row"> {# debut div nav#}*/
/*           <ul id="menu">*/
/*           <li><a href="{{ path("keny_leboncoin_accueil") }}">ACCUEIL</a></li>*/
/*           <li><a href="{{ path("keny_leboncoin_annonce") }}">DEPOSER UNE ANNONCE</a></li>*/
/*           <li><a href="{{ path("keny_leboncoin_offre") }}">OFFRES</a></li>*/
/*           <li><a href="{{ path("keny_leboncoin_demande") }}">DEMANDES</a></li>*/
/*           <li><a href="#">MES ANNONCES</a></li>*/
/*           <li><a href="#">BOUTIQUES</a></li>*/
/*           <li><a href="#">MON COMPTE</a></li>*/
/*           <li><a href="#">AIDE</a></li>       */
/*           </ul>*/
/*         </nav> */
/*       </div>*/
/*       */
/*         */
/*         <div class="row">*/
/*           <div class="recherche" >*/
/*             {% block recherche %}*/
/*              */
/*             {%endblock%}          */
/*           </div>*/
/*         </div> */
/* */
/*         <div class="row" >*/
/*         {% block leftright %} */
/* */
/*         {% endblock %}*/
/*         </div>*/
/*        */
/* */
/*         <div class="row" >*/
/*           {% block nextleftright %} */
/*          */
/*           {% endblock %}*/
/*         </div>*/
/*         */
/* */
/*         <div class="row" > */
/* */
/*           <div class="annonce">*/
/*           <section class="col-lg-9">*/
/*             */
/*            {% block section %}*/
/* */
/*           {% endblock %}*/
/*            */
/* */
/*           </section>*/
/*           </div>*/
/* */
/*           */
/*           <div class="col-lg-3" id="section-right">*/
/*           {% block ala_une %}*/
/*             */
/*           {% endblock %}*/
/*           </div>*/
/* */
/*     </div> {# fin div container#}*/
/* */
/* */
/* </body>*/
/* */
/* </html>*/
/* */
