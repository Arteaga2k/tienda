<?php

/* usuario/panel_usuario.twig */
class __TwigTemplate_d84d0b8212c7036caabff8ba6671d78f6b9f7142839a8935824ca66fb87ebd6c extends Twig_Template
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
<div class=\"col-md-12\">
    <h1><small>Datos Personales</small></h1><label for=\"\"><a href=\"\">Modificar datos</a></label>

    <p>Carlos Arteaga Virella</p>
    <p>Avenida Huelva 6</p>
    
    
\t<h1><small>Pedidos en proceso</small></h1>\t
\t<table class=\"table table-hover\">
\t\t<tr>

\t\t\t<th>Código</th>
\t\t\t<th>Fecha creación</th>
\t\t\t<th>Fecha entrega</th>
\t\t\t<th>Factura</th>
\t\t\t<th>Estado Actual</th>
\t\t\t<th>Operaciones</th>
\t\t</tr>
\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedsNoProce"]) ? $context["pedsNoProce"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedNoProce"]) {
            // line 22
            echo "\t\t<tr>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "fecha_creacion", array()), "html", null, true);
            echo "</td>
\t\t\t<td>--</td>
\t\t\t<td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/factura/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span></a></td>
\t\t\t<td>En proceso</td>
\t\t\t<td><a href=\"\">Ver</a> | <a href=\"\">Cancelar</a></td>
\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedNoProce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t</table>


\t\t<h4>Mis pedidos</h4>
\t\t<hr />
\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "usuario/panel_usuario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  89 => 37,  82 => 32,  68 => 26,  63 => 24,  59 => 23,  56 => 22,  52 => 21,  31 => 2,  28 => 1,);
    }
}
