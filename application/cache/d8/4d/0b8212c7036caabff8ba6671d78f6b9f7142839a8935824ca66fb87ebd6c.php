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
\t";
        // line 4
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 5
            echo "\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>
\t";
        }
        // line 7
        echo "\t<h1>
\t\t<small>Datos Personales</small>
\t</h1>
\t<label><a
\t\thref=\"";
        // line 11
        echo twig_escape_filter($this->env, site_url("usuario/editaUsuario"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "idUsuario", array()), "html", null, true);
        echo "\">Modificar
\t\t\tdatos</a></label> |
\t<label><a
\t\thref=\"";
        // line 14
        echo twig_escape_filter($this->env, site_url("usuario/editaPassword"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "idUsuario", array()), "html", null, true);
        echo "\">Modificar
\t\t\tcontraseña</a></label>
\t<div class=\"well\">
\t\t<p>Nombre: ";
        // line 17
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombre", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array())), "html", null, true);
        echo "</p>
\t\t<p>DNI: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "dni", array()), "html", null, true);
        echo "</p>
\t\t<p>Provincia: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "provincia", array()), "html", null, true);
        echo "</p>
\t\t<p>Dirección: ";
        // line 20
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "direccion", array())), "html", null, true);
        echo "</p>
\t\t<p>Código postal: ";
        // line 21
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "cp", array())), "html", null, true);
        echo "</p>
\t</div>


\t<h1>
\t\t<small>Pedidos en proceso</small>
\t</h1>
\t<table class=\"table table-hover\">
\t\t<tr>

\t\t\t<th>Código</th>
\t\t\t<th>Fecha creación</th>
\t\t\t<th>Fecha entrega</th>
\t\t\t<th>Estado Actual</th>
\t\t\t<th>Operaciones</th>
\t\t</tr>
\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedsNoProce"]) ? $context["pedsNoProce"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedNoProce"]) {
            // line 38
            echo "\t\t<tr>
\t\t\t<form
\t\t\t\taction=\"";
            // line 40
            echo twig_escape_filter($this->env, site_url("pedido/cancelaPedido"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "\">


\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "fecha_creacion", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>--</td>
\t\t\t\t<td>Pendiente de procesar</td>
\t\t\t\t<td><a class=\"btn btn-default\"
\t\t\t\t\thref=\"";
            // line 48
            echo twig_escape_filter($this->env, site_url("pedido/factura"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "\">Ver</a>
\t\t\t\t\t<!-- Button trigger modal -->
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-toggle=\"modal\"
\t\t\t\t\t\tdata-target=\"#borrarModal\">Eliminar</button></td>

\t\t\t\t<!-- Modal -->
\t\t\t\t<div class=\"modal fade\" id=\"borrarModal\" tabindex=\"-1\" role=\"dialog\"
\t\t\t\t\taria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Confirmación</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\">Este pedido será eliminado, ¿estás
\t\t\t\t\t\t\t\tseguro?</div>
\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"
\t\t\t\t\t\t\t\t\tdata-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"\"
\t\t\t\t\t\t\t\t\tid=\"confirmacion\">Confirmar</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedNoProce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t</table>


\t<h1>
\t\t<small>Historial pedidos</small>
\t</h1>
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
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 95
            echo "\t\t<tr>
\t\t\t<td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "fecha_creacion", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "fecha_entrega", array()), "html", null, true);
            echo "-</td>
\t\t\t<td><a
\t\t\t\thref=\"";
            // line 100
            echo twig_escape_filter($this->env, site_url("pedido/factura"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "/0\"><span
\t\t\t\t\tclass=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span></a></td>
\t\t\t<td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "estado", array()), "html", null, true);
            echo "</td>
\t\t\t<td><a
\t\t\t\thref=\"";
            // line 104
            echo twig_escape_filter($this->env, site_url("pedido/factura"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "/1\">Ver</a></td>
\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t</table>


</div>

";
    }

    // line 113
    public function block_script($context, array $blocks = array())
    {
        // line 114
        echo "

<script type=\"text/javascript\">

</script>
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
        return array (  242 => 114,  239 => 113,  230 => 108,  218 => 104,  213 => 102,  206 => 100,  201 => 98,  197 => 97,  193 => 96,  190 => 95,  186 => 94,  169 => 79,  130 => 48,  123 => 44,  119 => 43,  111 => 40,  107 => 38,  103 => 37,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  66 => 17,  58 => 14,  50 => 11,  44 => 7,  38 => 5,  36 => 4,  32 => 2,  29 => 1,);
    }
}
