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


\t
\t <h2>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["cabecera"]) ? $context["cabecera"] : null), "html", null, true);
        echo "</h2>

\t<div class=\"row\">
   
\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 22
            echo "\t\t<div class=\"col-sm-4 col-lg-4 col-md-4\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "imagen", array()), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t<div class=\"caption\">

\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, site_url("home/producto/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "idProducto", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            // line 29
            echo "</a>
\t\t\t\t\t</h4>
                    ";
            // line 31
            if (($this->getAttribute((isset($context["moneda"]) ? $context["moneda"] : null), "nombre", array()) == "EUR")) {
                // line 32
                echo "                        ";
                $context["icono"] = "€";
                // line 33
                echo "                    ";
            } else {
                // line 34
                echo "                        ";
                $context["icono"] = "\$";
                // line 35
                echo "                    ";
            }
            // line 36
            echo "\t\t\t\t\t<h4>";
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["producto"], "precio", array()) * $this->getAttribute((isset($context["moneda"]) ? $context["moneda"] : null), "valor", array())), 1), "html", null, true);
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
            // line 45
            if (($this->getAttribute($context["producto"], "stock", array()) < 30)) {
                // line 46
                echo "                        ";
                $context["porcentaje"] = 15;
                // line 47
                echo "                        ";
                $context["estado"] = "danger";
                // line 48
                echo "                    ";
            } elseif ((($this->getAttribute($context["producto"], "stock", array()) > 30) && ($this->getAttribute($context["producto"], "stock", array()) < 100))) {
                // line 49
                echo "                      ";
                $context["porcentaje"] = 40;
                // line 50
                echo "                      ";
                $context["estado"] = "warning";
                echo "                   
                    ";
            } else {
                // line 52
                echo "                        ";
                $context["porcentaje"] = 100;
                // line 53
                echo "                        ";
                $context["estado"] = "success";
                // line 54
                echo "                    ";
            }
            // line 55
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar progress-bar-";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["estado"]) ? $context["estado"] : null), "html", null, true);
            echo "\" role=\"progressbar\"
\t\t\t\t\t\t\taria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"
\t\t\t\t\t\t\tstyle=\"width: ";
            // line 59
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
        // line 80
        echo "\t\t
\t</div>
\t";
        // line 82
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
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
        return array (  196 => 82,  192 => 80,  165 => 59,  160 => 57,  156 => 55,  153 => 54,  150 => 53,  147 => 52,  141 => 50,  138 => 49,  135 => 48,  132 => 47,  129 => 46,  127 => 45,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  100 => 32,  98 => 31,  94 => 29,  88 => 28,  81 => 24,  77 => 22,  73 => 21,  66 => 17,  57 => 10,  50 => 9,  44 => 8,  38 => 7,  31 => 2,  28 => 1,);
    }
}
