<?php

/* _templates/base.twig */
class __TwigTemplate_95911e2dd9518a7dc924bf27858b6082b23cb7ebcc5d03b71b8e8f3aae106111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'contenido' => array($this, 'block_contenido'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"es\">
<head>
<meta charset=\"UTF-8\" />
<title>Tienda virtual</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- Estilos css -->
";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "



<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->



</head>
<body>
\t<!-- Navigation -->
\t<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"container\">
\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
\t\t\t\t\tdata-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> <span
\t\t\t\t\t\tclass=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
\t\t\t\t\t\tclass=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Mi Tienda</a>
\t\t\t</div>
\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t<div class=\"collapse navbar-collapse\"
\t\t\t\tid=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">

\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\"
\t\t\t\t\t\tdata-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Cesta
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t
\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<table id=\"table_cart\" class=\"table\">\t
\t\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 65
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€ x ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"";
        // line 71
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "home/verCarro\" class=\"btn btn-primary\">Ver Carrito</a>\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<!-- /.navbar-collapse -->
\t\t</div>
\t\t<!-- /.container -->
\t</nav>

\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<div class=\"row\">";
        // line 84
        $this->displayBlock('contenido', $context, $blocks);
        echo "</div>
\t</div>
\t<!-- /.container -->







\t";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "




\t</div>
\t";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "</body>
</html>

";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "<link href=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/bootstrap.min.css\"
\ttype=\"text/css\" rel=\"stylesheet\" />


<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/shop-homepage.css\" />
";
    }

    // line 84
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        echo "\t
\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.11.1.min.js\"
\t\ttype=\"text/javascript\"></script>\t
\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.cleditor.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
\t<!--Load the AJAX API-->
\t<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
\t
\t ";
        // line 112
        $this->displayBlock('script', $context, $blocks);
        // line 115
        echo "\t

\t";
    }

    // line 112
    public function block_script($context, array $blocks = array())
    {
        // line 113
        echo "\t <!-- bloques scripts que heredarán cada pag -->
\t ";
    }

    public function getTemplateName()
    {
        return "_templates/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 113,  219 => 112,  213 => 115,  211 => 112,  202 => 106,  197 => 104,  192 => 102,  187 => 101,  182 => 94,  177 => 84,  171 => 15,  162 => 10,  159 => 9,  152 => 118,  150 => 101,  142 => 95,  140 => 94,  127 => 84,  111 => 71,  107 => 69,  96 => 67,  92 => 66,  89 => 65,  85 => 64,  36 => 17,  34 => 9,  24 => 1,);
    }
}
