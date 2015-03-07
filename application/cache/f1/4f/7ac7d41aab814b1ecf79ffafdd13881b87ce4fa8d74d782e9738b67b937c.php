<?php

/* carro/detalle_carro.twig */
class __TwigTemplate_f14f7ac7d41aab814b1ecf79ffafdd13881b87ce4fa8d74d782e9738b67b937c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_templates/base.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'script' => array($this, 'block_script'),
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
<div class=\"col-md-12\">

\t<div class=\"row\">
\t\t";
        // line 6
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 7
            echo "
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 8
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>

\t\t";
        }
        // line 11
        echo "
\t\t<h2>Contenido del Carrito de la Compra</h2>
\t\t<hr />
\t\t ";
        // line 14
        if (($this->getAttribute((isset($context["moneda"]) ? $context["moneda"] : null), "nombre", array()) == "EUR")) {
            // line 15
            echo "                    ";
            $context["icono"] = "€";
            // line 16
            echo "                ";
        } else {
            // line 17
            echo "                    ";
            $context["icono"] = "\$";
            // line 18
            echo "                ";
        }
        // line 19
        echo "
\t\t<table class=\"table table-bordered\">
\t\t\t<tr>
\t\t\t\t<th>Código</th>
\t\t\t\t<th>Concepto</th>
\t\t\t\t<th>Precio</th>
\t\t\t\t<th>Unidades</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th>Opciones</th>
\t\t\t</tr>

\t\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["key"] => $context["producto"]) {
            // line 31
            echo "\t\t\t<tr>
\t\t\t\t";
            // line 32
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_carro", array());
            echo "

\t\t\t\t\t<input type=\"hidden\" name=\"idProducto\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" />
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["icono"]) ? $context["icono"] : null), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><input type=\"text\" name=\"cantidad\"
\t\t\t\t\t\tvalue=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "\" /><span>";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cantidad", array());
            // line 40
            echo "</span></td>
\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "precio", array()) * $this->getAttribute($context["producto"], "cantidad", array())), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["icono"]) ? $context["icono"] : null), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><input type=\"hidden\" name=\"idProducto\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" /></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"submit\" name=\"actualizar\" class=\"btn btn-default\">Actualizar</button>
\t\t\t\t\t\t<a class=\"btn btn-default\"
\t\t\t\t\t\thref=\"";
            // line 46
            echo twig_escape_filter($this->env, site_url("carro/eliminaItem/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">Eliminar</a>
\t\t\t\t\t</td>
\t\t\t\t</form>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td>Total</td>
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "precio_total", array()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["icono"]) ? $context["icono"] : null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</table>
\t\t<p>
\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, site_url("carro/vaciaCarro"), "html", null, true);
        echo "\" class=\"btn btn-default\">Vaciar
\t\t\t\tCarrito</a> <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, site_url("pedido/preparaPedido"), "html", null, true);
        echo "\"
\t\t\t\tclass=\"btn btn-primary\">Realizar pedido</a>
\t\t\t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, site_url("home"), "html", null, true);
        echo "\"
\t\t\t\tclass=\"btn btn-success pull-right\">Seguir comprando</a>
\t\t</p>
\t</div>
</div>


";
    }

    // line 70
    public function block_script($context, array $blocks = array())
    {
        // line 71
        echo "

<script type=\"text/javascript\">

\t



</script>
";
    }

    public function getTemplateName()
    {
        return "carro/detalle_carro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 71,  182 => 70,  170 => 63,  165 => 61,  161 => 60,  153 => 56,  149 => 55,  143 => 51,  130 => 46,  123 => 42,  118 => 41,  115 => 40,  111 => 39,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  88 => 32,  85 => 31,  81 => 30,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  54 => 14,  49 => 11,  43 => 8,  40 => 7,  38 => 6,  32 => 2,  29 => 1,);
    }
}
