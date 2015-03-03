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
        // line 18
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
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, site_url("home"), "html", null, true);
        echo "\">Mi Tienda</a>
\t\t\t</div>
\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t<div class=\"collapse navbar-collapse\"
\t\t\t\tid=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t<li><a href=\"#\">About</a></li>
\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\"
\t\t\t\t\t\tdata-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-flag\"></i> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moneda"]) ? $context["moneda"] : null), "nombre", array()), "html", null, true);
        echo "<span
\t\t\t\t\t\t\tclass=\"caret\"></span> </a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">\t
\t\t\t\t\t\t<li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, site_url("home/moneda_de_uso/EUR"), "html", null, true);
        echo "\">EUR</a></li> 
\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monedas"]) ? $context["monedas"] : null));
        foreach ($context['_seq'] as $context["moneda"] => $context["value"]) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, site_url("home/moneda_de_uso"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $context["moneda"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["moneda"], "html", null, true);
            echo "</a></li> 
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['moneda'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul></li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">

\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\"
\t\t\t\t\t\tdata-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"cesta\"><span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\tCesta ";
        // line 69
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array()) > 0)) ? ($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array())) : ("")), "html", null, true);
        echo "<span class=\"caret\"></span> </a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<table id=\"table_cart\" class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€ x ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 82
        echo twig_escape_filter($this->env, site_url("carro/verCarro/"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-success btn-sm pull-right\"><i
\t\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-shopping-cart\"></i> Checkout</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t\t\t</ul></li>

\t\t\t\t\t<li class=\"dropdown user-dropdown\"><a href=\"#\"
\t\t\t\t\t\tclass=\"dropdown-toggle\" data-toggle=\"dropdown\"><i
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-user\"></i> ";
        // line 93
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "username", array()))) ? ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "username", array())) : ("Identificate")), "html", null, true);
        // line 94
        echo "<b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
        // line 96
        if ((null === $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "username", array()))) {
            // line 97
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, site_url("usuario/loginUsuario/"), "html", null, true);
            echo "\"><i
\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-log-in\"></i> Iniciar sesión</a></li>
\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t<li><a
\t\t\t\t\t\t\t\thref=\"";
        // line 101
        echo twig_escape_filter($this->env, site_url("usuario/panelUsuario"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id_usuario", array()), "html", null, true);
        echo "\"><i
\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-th-large\"></i> Panel control</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t";
        // line 104
        if ((!(null === $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "username", array())))) {
            // line 105
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, site_url("usuario/logout/"), "html", null, true);
            echo "\"><i
\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-log-out\"></i> Cerrar sesión</a></li>
\t\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t\t</ul></li>
\t\t\t\t</ul>
\t\t\t</div>\t\t\t

\t\t\t<!-- /.navbar-collapse -->
\t\t</div>
\t\t<!-- /.container -->
\t</nav>

\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<div class=\"row\">";
        // line 119
        $this->displayBlock('contenido', $context, $blocks);
        echo "</div>
\t</div>
\t<!-- /.container -->
\t";
        // line 122
        $this->displayBlock('footer', $context, $blocks);
        // line 123
        echo "\t</div>
\t";
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
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
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/shop-homepage.css\"
\ttype=\"text/css\" rel=\"stylesheet\" />
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/tienda.css\" type=\"text/css\"
\trel=\"stylesheet\" />

";
    }

    // line 119
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 122
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        // line 125
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.11.1.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.cleditor.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
\t<!--Load the AJAX API-->
\t<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>

\t";
        // line 135
        $this->displayBlock('script', $context, $blocks);
        // line 137
        echo " ";
    }

    // line 135
    public function block_script($context, array $blocks = array())
    {
        // line 136
        echo "\t<!-- bloques scripts que heredarán cada pag -->
\t";
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
        return array (  295 => 136,  292 => 135,  288 => 137,  286 => 135,  277 => 129,  272 => 127,  266 => 125,  263 => 124,  258 => 122,  253 => 119,  245 => 14,  240 => 12,  234 => 10,  231 => 9,  224 => 138,  222 => 124,  219 => 123,  217 => 122,  211 => 119,  198 => 108,  191 => 105,  189 => 104,  181 => 101,  178 => 100,  171 => 97,  169 => 96,  165 => 94,  163 => 93,  149 => 82,  145 => 80,  134 => 77,  130 => 76,  127 => 75,  123 => 74,  115 => 69,  105 => 61,  93 => 59,  87 => 58,  83 => 57,  77 => 54,  64 => 44,  36 => 18,  34 => 9,  24 => 1,);
    }
}
