<?php

/* home/producto.twig */
class __TwigTemplate_eeb03ebad762e882318efcc14bff2f449876324508ff545657aa8673e716dbc7 extends Twig_Template
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
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "home/categoria/";
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
\t<div class=\"row\">
\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 16
            echo "
\t\t<h1>
\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "home/producto/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "idProducto", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            // line 19
            echo "</a>
\t\t</h1>
\t\t<hr>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">
\t\t\t<img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "imagen", array()), "html", null, true);
            echo "\" alt=\"\">
\t\t</div>
\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">
\t\t\t<address>
\t\t\t\t<strong>Código Producto:</strong> <span>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "codigo", array()), "html", null, true);
            echo "</span><br />
\t\t\t\t<strong>Stock:</strong> <span>En Stock</span><br />
\t\t\t</address>
\t\t</div>
\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">
\t\t\t<h2>
\t\t\t\t<strong>Precio: €";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "</strong> <small>Iva incluído:
\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "iva", array()), "html", null, true);
            echo "%</small><br /> <br />
\t\t\t</h2>
\t\t</div>
\t\t<div class=\"col-sm-6 col-lg-6 col-md-6\">\t\t\t
\t\t\t";
            // line 41
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_open", array());
            echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"cantidad\">Unidades</label> <input type=\"text\"
\t\t\t\t\t\tclass=\"form-control\" id=\"cantidad\" name=\"cantidad\" placeholder=\"1\">
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Comprar</button>
\t\t\t </form>
\t\t</div>
\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "home/producto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  114 => 41,  107 => 37,  103 => 36,  94 => 30,  87 => 26,  78 => 19,  72 => 18,  68 => 16,  64 => 15,  57 => 10,  50 => 9,  44 => 8,  38 => 7,  31 => 2,  28 => 1,);
    }
}
