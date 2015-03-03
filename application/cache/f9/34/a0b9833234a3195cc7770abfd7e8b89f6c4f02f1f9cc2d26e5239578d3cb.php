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
            echo " <a
\t\t\thref=\"";
            // line 8
            echo twig_escape_filter($this->env, site_url("home/categoria/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "idCategoria", array()), "html", null, true);
            echo "\"
\t\t\tclass=\"list-group-item\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</div>
</div>

<div class=\"col-md-9\">


\t";
        // line 16
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

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

\t\t";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 54
            echo "\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "imagen", array()), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t<div class=\"caption\">

\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, site_url("home/producto/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "idProducto", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            // line 61
            echo "</a>
\t\t\t\t\t</h4>
                    ";
            // line 63
            if (($this->getAttribute((isset($context["moneda"]) ? $context["moneda"] : null), "nombre", array()) == "EUR")) {
                // line 64
                echo "                        ";
                $context["icono"] = "€";
                // line 65
                echo "                    ";
            } else {
                // line 66
                echo "                        ";
                $context["icono"] = "\$";
                // line 67
                echo "                    ";
            }
            // line 68
            echo "\t\t\t\t\t<h4>";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "precio", array()) * twig_round($this->getAttribute((isset($context["moneda"]) ? $context["moneda"] : null), "valor", array()), 1, "ceil")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["icono"]) ? $context["icono"] : null), "html", null, true);
            echo "</h4>

\t\t\t\t\t<p>
\t\t\t\t\t\tSee more snippets like this online store item at <a
\t\t\t\t\t\t\ttarget=\"_blank\" href=\"http://www.bootsnipp.com\">Bootsnipp -
\t\t\t\t\t\t\thttp://bootsnipp.com</a>.
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t<!-- calculando porcentaje stock -->
                    ";
            // line 77
            if (($this->getAttribute($context["producto"], "stock", array()) < 30)) {
                // line 78
                echo "                        ";
                $context["porcentaje"] = 15;
                // line 79
                echo "                        ";
                $context["estado"] = "danger";
                // line 80
                echo "                    ";
            } elseif ((($this->getAttribute($context["producto"], "stock", array()) > 30) && ($this->getAttribute($context["producto"], "stock", array()) < 100))) {
                // line 81
                echo "                      ";
                $context["porcentaje"] = 40;
                // line 82
                echo "                      ";
                $context["estado"] = "warning";
                echo "                   
                    ";
            } else {
                // line 84
                echo "                        ";
                $context["porcentaje"] = 100;
                // line 85
                echo "                        ";
                $context["estado"] = "success";
                // line 86
                echo "                    ";
            }
            // line 87
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar progress-bar-";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["estado"]) ? $context["estado"] : null), "html", null, true);
            echo "\" role=\"progressbar\"
\t\t\t\t\t\t\taria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"
\t\t\t\t\t\t\tstyle=\"width: ";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["porcentaje"]) ? $context["porcentaje"] : null), "html", null, true);
            echo "%\">
\t\t\t\t\t\t\t<span class=\"sr-only\">40% Complete (success)</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t</div>
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
        return array (  224 => 112,  197 => 91,  192 => 89,  188 => 87,  185 => 86,  182 => 85,  179 => 84,  173 => 82,  170 => 81,  167 => 80,  164 => 79,  161 => 78,  159 => 77,  144 => 68,  141 => 67,  138 => 66,  135 => 65,  132 => 64,  130 => 63,  126 => 61,  120 => 60,  113 => 56,  109 => 54,  105 => 53,  65 => 16,  57 => 10,  50 => 9,  44 => 8,  38 => 7,  31 => 2,  28 => 1,);
    }
}
