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
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "home\">Mi Tienda</a>
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

\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\"
\t\t\t\t\t\tdata-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"cesta\"><span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\tCesta ";
        // line 59
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array()) > 0)) ? ($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array())) : ("")), "html", null, true);
        echo "<span class=\"caret\"></span> </a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<!--";
        // line 61
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array())) > 0)) {
            echo "-->
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<table id=\"table_cart\" class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 67
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
            // line 70
            echo "\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "carro/verCarro\"
\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-success btn-sm pull-right\"><i
\t\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-shopping-cart\"></i> Checkout</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--";
        }
        // line 77
        echo "-->

\t\t\t\t\t\t</ul></li>

\t\t\t\t\t<li class=\"dropdown user-dropdown\"><a href=\"#\"
\t\t\t\t\t\tclass=\"dropdown-toggle\" data-toggle=\"dropdown\"><i
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-user\"></i> ";
        // line 83
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "username", array()))) ? ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "username", array())) : ("Identificate")), "html", null, true);
        // line 84
        echo "<b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/loginUsuario/\"><i
\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-log-in\"></i> Iniciar sesión</a></li>
\t\t\t\t\t\t\t<li><a
\t\t\t\t\t\t\t\thref=\"";
        // line 89
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/panelUsuario/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id_usuario", array()), "html", null, true);
        echo "\"><i
\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-th-large\"></i> Panel control</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/logout\"><i
\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-log-out\"></i> Cerrar sesión</a></li>
\t\t\t\t\t\t</ul></li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<!-- /.navbar-collapse -->
\t\t</div>
\t\t<!-- /.container -->
\t</nav>

\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<div class=\"row\">";
        // line 105
        $this->displayBlock('contenido', $context, $blocks);
        echo "</div>
\t</div>
\t<!-- /.container -->







\t";
        // line 115
        $this->displayBlock('footer', $context, $blocks);
        // line 116
        echo "




\t</div>
\t";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
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

    // line 105
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 115
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        // line 123
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.11.1.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.cleditor.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
\t<!--Load the AJAX API-->
\t<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>

\t";
        // line 133
        $this->displayBlock('script', $context, $blocks);
        // line 135
        echo " ";
    }

    // line 133
    public function block_script($context, array $blocks = array())
    {
        // line 134
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
        return array (  268 => 134,  265 => 133,  261 => 135,  259 => 133,  250 => 127,  245 => 125,  239 => 123,  236 => 122,  231 => 115,  226 => 105,  218 => 14,  213 => 12,  207 => 10,  204 => 9,  197 => 136,  195 => 122,  187 => 116,  185 => 115,  172 => 105,  156 => 92,  148 => 89,  142 => 86,  138 => 84,  136 => 83,  128 => 77,  119 => 72,  115 => 70,  104 => 67,  100 => 66,  97 => 65,  93 => 64,  87 => 61,  82 => 59,  64 => 44,  36 => 18,  34 => 9,  24 => 1,);
    }
}
