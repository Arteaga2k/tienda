<?php

/* home/index.twig */
class __TwigTemplate_f934a0b9833234a3195cc7770abfd7e8b89f6c4f02f1f9cc2d26e5239578d3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_templates/base.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_contenido($context, array $blocks = array())
    {
        // line 2
        echo "

<div class=\"col-md-3\">
\t<p class=\"lead\">Tienda Virtual</p>
\t<div class=\"list-group\">
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "home/index/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "idCategoria", array()), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            // line 8
            echo "</a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</div>
</div>

<div class=\"col-md-9\">


\t\t\t";
        // line 15
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
\t\t    
\t<!-- <div class=\"row carousel-holder\">

\t\t <div class=\"col-md-12\">
\t\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\"
\t\t\t\tdata-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\"
\t\t\t\t\t\tclass=\"active\"></li>
\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t<img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a class=\"left carousel-control\" href=\"#carousel-example-generic\"
\t\t\t\t\tdata-slide=\"prev\"> <span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t\t</a> <a class=\"right carousel-control\"
\t\t\t\t\thref=\"#carousel-example-generic\" data-slide=\"next\"> <span
\t\t\t\t\tclass=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t</div>-->

\t<div class=\"row\">
\t
\t\t";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productosDest"]) ? $context["productosDest"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 53
            echo "\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "imagen", array()), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"#\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</h4>
\t\t\t\t
\t\t\t\t\t<h4>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo " €</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\tSee more snippets like this online store item at <a
\t\t\t\t\t\t\ttarget=\"_blank\" href=\"http://www.bootsnipp.com\">Bootsnipp -
\t\t\t\t\t\t\thttp://bootsnipp.com</a>.\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<!-- <div class=\"ratings\">
\t\t\t\t\t<p class=\"pull-right\">15 reviews</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t</p>
\t\t\t\t</div> -->
\t\t\t</div>
\t\t</div>\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
\t\t<!--  <div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"http://placehold.it/320x150\" alt=\"\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4 class=\"pull-right\">\$24.99</h4>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"#\">First Product</a>
\t\t\t\t\t</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\tSee more snippets like this online store item at <a
\t\t\t\t\t\t\ttarget=\"_blank\" href=\"http://www.bootsnipp.com\">Bootsnipp -
\t\t\t\t\t\t\thttp://bootsnipp.com</a>.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t<p class=\"pull-right\">15 reviews</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"http://placehold.it/320x150\" alt=\"\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4 class=\"pull-right\">\$64.99</h4>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"#\">Second Product</a>
\t\t\t\t\t</h4>
\t\t\t\t\t<p>This is a short description. Lorem ipsum dolor sit amet,
\t\t\t\t\t\tconsectetur adipiscing elit.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t<p class=\"pull-right\">12 reviews</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"http://placehold.it/320x150\" alt=\"\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4 class=\"pull-right\">\$74.99</h4>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"#\">Third Product</a>
\t\t\t\t\t</h4>
\t\t\t\t\t<p>This is a short description. Lorem ipsum dolor sit amet,
\t\t\t\t\t\tconsectetur adipiscing elit.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t<p class=\"pull-right\">31 reviews</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"http://placehold.it/320x150\" alt=\"\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4 class=\"pull-right\">\$84.99</h4>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"#\">Fourth Product</a>
\t\t\t\t\t</h4>
\t\t\t\t\t<p>This is a short description. Lorem ipsum dolor sit amet,
\t\t\t\t\t\tconsectetur adipiscing elit.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t<p class=\"pull-right\">6 reviews</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star-empty\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"http://placehold.it/320x150\" alt=\"\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4 class=\"pull-right\">\$94.99</h4>
\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"#\">Fifth Product</a>
\t\t\t\t\t</h4>
\t\t\t\t\t<p>This is a short description. Lorem ipsum dolor sit amet,
\t\t\t\t\t\tconsectetur adipiscing elit.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t<p class=\"pull-right\">18 reviews</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star\"></span> <span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>-->
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 83,  123 => 62,  117 => 59,  110 => 55,  106 => 53,  102 => 52,  62 => 15,  54 => 9,  48 => 8,  38 => 7,  31 => 2,  28 => 1,);
    }
}
