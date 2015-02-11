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
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 43
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
\t\t\t\t\t\tdata-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><span
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\tCesta <span class=\"caret\"></span> </a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<table id=\"table_cart\" class=\"table\">
\t\t\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 62
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€ x ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"";
        // line 68
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "carro/verCarro\" class=\"btn btn-primary\">Ver
\t\t\t\t\t\t\t\tCarrito</a>
\t\t\t\t\t\t</ul></li>

\t\t\t\t\t<li class=\"dropdown user-dropdown\"><a href=\"#\"
\t\t\t\t\t\tclass=\"dropdown-toggle\" data-toggle=\"dropdown\"><i
\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-user\"></i> ";
        // line 74
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "username", array()))) ? ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "username", array())) : ("Identificate")), "html", null, true);
        // line 75
        echo "<b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a
\t\t\t\t\t\t\t\thref=\"";
        // line 78
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/loginUsuario/\"><i
\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-log-in\"></i> Iniciar sesión</a></li>
\t\t\t\t\t\t\t<li><a
\t\t\t\t\t\t\t\thref=\"";
        // line 81
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/editaUsuario/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "id_usuario", array()), "html", null, true);
        echo "\"><i
\t\t\t\t\t\t\t\t\tclass=\"glyphicon glyphicon-pencil\"></i> Editar</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 84
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
        // line 97
        $this->displayBlock('contenido', $context, $blocks);
        echo "</div>
\t</div>
\t<!-- /.container -->







\t";
        // line 107
        $this->displayBlock('footer', $context, $blocks);
        // line 108
        echo "




\t</div>
\t";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
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

    // line 97
    public function block_contenido($context, array $blocks = array())
    {
    }

    // line 107
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-1.11.1.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.cleditor.min.js\"
\t\ttype=\"text/javascript\"></script>
\t<script src=\"//code.jquery.com/ui/1.11.2/jquery-ui.js\"></script>
\t<!--Load the AJAX API-->
\t<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>

\t";
        // line 125
        $this->displayBlock('script', $context, $blocks);
        // line 127
        echo " ";
    }

    // line 125
    public function block_script($context, array $blocks = array())
    {
        // line 126
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
        return array (  248 => 126,  245 => 125,  241 => 127,  239 => 125,  230 => 119,  225 => 117,  219 => 115,  216 => 114,  211 => 107,  206 => 97,  200 => 15,  191 => 10,  188 => 9,  181 => 128,  179 => 114,  171 => 108,  169 => 107,  156 => 97,  140 => 84,  132 => 81,  126 => 78,  121 => 75,  119 => 74,  110 => 68,  107 => 67,  96 => 64,  92 => 63,  89 => 62,  85 => 61,  64 => 43,  36 => 17,  34 => 9,  24 => 1,);
    }
}
