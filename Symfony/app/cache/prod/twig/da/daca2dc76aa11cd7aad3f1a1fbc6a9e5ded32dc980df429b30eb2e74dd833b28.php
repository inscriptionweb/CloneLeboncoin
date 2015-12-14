<?php

/* kenyLeboncoinBundle:Accueil:accueil.html.twig */
class __TwigTemplate_5e7e89acc80ce9274f846a81b9d6cb78bf1ffe8462b8f303e125052ad703570f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
          <li><a href=\"#\">ACCUEIL</a></li>
          <li><a href=\"#\">DEPOSER UNE ANNONCE</a></li>
          <li><a href=\"#\">OFFRES</a></li>
          <li><a href=\"#\">DEMANDES</a></li>
          <li><a href=\"#\">MES ANNONCES</a></li>
          <li><a href=\"#\">BOUTIQUES</a></li>
          <li><a href=\"#\">MON COMPTE</a></li>
          <li><a href=\"#\">AIDE</a></li>       
          </ul>
        </nav> 
      </div>

      <div class=\"row\">
          <div class=\"recherche\" >
            <form >
              Recherche:<input type =\"text\">
              <select>
                <option>CHAMPAGNE-ARDENNE</option>
                <option>ILE DE FRANCE</option>
                <option>keny</option>
              </select>
              <select>
                <option>Marne</option>
                <option>keny</option>
                <option>keny</option>
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
          </div>
      </div> 

        <div class=\"row\" > 
          <div class=\"gauche\" ><a href=\"#\" class=\"col-lg-6\" >Recherchedans le titre uniquement</a> </div>
          <div class=\"droite\" ><a href=\"#\" class=\"col-lg-6\">Recherchedans le titre uniquement</a>  </div>
        </div>
        <div class=\"row\" > 
          <div class=\"col-lg-3\" ><a href=\"#\"> TOUTES 1-45</a> </div>
          <div class=\"col-lg-3\"><a href=\"#\"> PARTICULIERS</a>  </div>
          <div class=\"col-lg-3\" ><a href=\"#\"> PROFESSIONNELS</a> </div>
          <div class=\"col-lg-3\" >             
                          <a href=\"#\"> cacher les photos | trier par prix</a>
                        
          </div>
        </div>

        <div class=\"row\" > 
          <section class=\"col-lg-9\">
            <div class=\"annonce\">
              <a href=\"#\"> aujourdhui <img class=\"logo\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/medecin.png"), "html", null, true);
        echo "\" align=\"center\"></img> infos annonces</a>

            </div>


          </section>
          <div class=\"col-lg-3\" id=\"section-right\">
            <h2>dkgdkdgdf</h2>


          </aside>
          
        </div>

    </div> ";
        // line 111
        echo "

</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " 
             MEDISEN_SYMFONY2  
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/tuto.css"), "html", null, true);
        echo "\" />
         

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
        return array (  165 => 14,  160 => 13,  157 => 12,  149 => 7,  140 => 111,  123 => 96,  63 => 38,  48 => 25,  44 => 23,  38 => 18,  35 => 12,  31 => 9,  29 => 7,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>*/
/*             {% block title %} */
/*              MEDISEN_SYMFONY2  */
/*             {% endblock %} */
/*         </title>*/
/*         {# on declare dans ce bloc les links vers nos feuilles de styles#}*/
/*         {% block stylesheets %}*/
/*           <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />*/
/*           <link rel="stylesheet"  href="{{asset('bootstrap/css/tuto.css')}}" />*/
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
/*           <li><a href="#">ACCUEIL</a></li>*/
/*           <li><a href="#">DEPOSER UNE ANNONCE</a></li>*/
/*           <li><a href="#">OFFRES</a></li>*/
/*           <li><a href="#">DEMANDES</a></li>*/
/*           <li><a href="#">MES ANNONCES</a></li>*/
/*           <li><a href="#">BOUTIQUES</a></li>*/
/*           <li><a href="#">MON COMPTE</a></li>*/
/*           <li><a href="#">AIDE</a></li>       */
/*           </ul>*/
/*         </nav> */
/*       </div>*/
/* */
/*       <div class="row">*/
/*           <div class="recherche" >*/
/*             <form >*/
/*               Recherche:<input type ="text">*/
/*               <select>*/
/*                 <option>CHAMPAGNE-ARDENNE</option>*/
/*                 <option>ILE DE FRANCE</option>*/
/*                 <option>keny</option>*/
/*               </select>*/
/*               <select>*/
/*                 <option>Marne</option>*/
/*                 <option>keny</option>*/
/*                 <option>keny</option>*/
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
/*             </form>           */
/*           </div>*/
/*       </div> */
/* */
/*         <div class="row" > */
/*           <div class="gauche" ><a href="#" class="col-lg-6" >Recherchedans le titre uniquement</a> </div>*/
/*           <div class="droite" ><a href="#" class="col-lg-6">Recherchedans le titre uniquement</a>  </div>*/
/*         </div>*/
/*         <div class="row" > */
/*           <div class="col-lg-3" ><a href="#"> TOUTES 1-45</a> </div>*/
/*           <div class="col-lg-3"><a href="#"> PARTICULIERS</a>  </div>*/
/*           <div class="col-lg-3" ><a href="#"> PROFESSIONNELS</a> </div>*/
/*           <div class="col-lg-3" >             */
/*                           <a href="#"> cacher les photos | trier par prix</a>*/
/*                         */
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row" > */
/*           <section class="col-lg-9">*/
/*             <div class="annonce">*/
/*               <a href="#"> aujourdhui <img class="logo" src="{{asset('img/medecin.png')}}" align="center"></img> infos annonces</a>*/
/* */
/*             </div>*/
/* */
/* */
/*           </section>*/
/*           <div class="col-lg-3" id="section-right">*/
/*             <h2>dkgdkdgdf</h2>*/
/* */
/* */
/*           </aside>*/
/*           */
/*         </div>*/
/* */
/*     </div> {# fin div container#}*/
/* */
/* */
/* </body>*/
/* */
/* </html>*/
/* */
