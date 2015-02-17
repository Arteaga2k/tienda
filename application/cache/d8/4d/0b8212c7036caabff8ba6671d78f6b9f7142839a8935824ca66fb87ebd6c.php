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
\t<h1>
\t\t<small>Datos Personales</small>
\t</h1>
\t<label for=\"\"><a
\t\thref=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "usuario/editaUsuario/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "idUsuario", array()), "html", null, true);
        echo "\">Modificar
\t\t\tdatos</a></label>
\t<div class=\"well\">
\t\t<p>Nombre: ";
        // line 11
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombre", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array())), "html", null, true);
        echo "</p>
\t\t<p>DNI: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "dni", array()), "html", null, true);
        echo "</p>
\t\t<p>Dirección: ";
        // line 13
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "direccion", array())), "html", null, true);
        echo "</p>
\t\t<p>Código postal: ";
        // line 14
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
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedsNoProce"]) ? $context["pedsNoProce"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedNoProce"]) {
            // line 31
            echo "\t\t<tr>
\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "fecha_creacion", array()), "html", null, true);
            echo "</td>
\t\t\t<td>--</td>
\t\t\t<td>En proceso</td>
\t\t\t<td><a
\t\t\t\thref=\"";
            // line 37
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/factura/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "/true\">Ver</a>
\t\t\t\t| <a
\t\t\t\thref=\"";
            // line 39
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/cancelaPedido/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedNoProce"], "idPedido", array()), "html", null, true);
            echo "\"
\t\t\t\tdata-toggle=\"modal\" data-target=\"#borrarModal\" id=\"btnEliminar\"
\t\t\t\trole=\"button\"> Eliminar</a></td>

\t\t\t<!-- Modal -->
\t\t\t<div class=\"modal fade\" id=\"borrarModal\" tabindex=\"-1\" role=\"dialog\"
\t\t\t\taria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Confirmación</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">Este contacto será eliminado de la agenda,
\t\t\t\t\t\t\t¿estás seguro?</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"
\t\t\t\t\t\t\t\tdata-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"
\t\t\t\t\t\t\t\tonclick=\"eliminaContacto()\">Confirmar</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedNoProce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) ? $context["pedidos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 84
            echo "\t\t<tr>
\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "fecha_creacion", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "fecha_entrega", array()), "html", null, true);
            echo "-</td>
\t\t\t<td><a
\t\t\t\thref=\"";
            // line 89
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/factura/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "/0\"><span
\t\t\t\t\tclass=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span></a></td>
\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "estado", array()), "html", null, true);
            echo "</td>
\t\t\t<td><a
\t\t\t\thref=\"";
            // line 93
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "pedido/factura/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pedido"], "idPedido", array()), "html", null, true);
            echo "/1\">Ver</a></td>
\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t</table>


</div>

";
    }

    // line 102
    public function block_script($context, array $blocks = array())
    {
        // line 103
        echo "

<script type=\"text/javascript\">
\$(function() {
\t//twitter bootstrap script
\t \$(\"button#submit\").click(function(){
\t         \$.ajax({
\t        \t      type: \"POST\",
\t        \t      url: \"process.php\",
\t        \t      data: \$('form.contact').serialize(),
\t        \t      success: function(msg){
\t        \t    \t  \$(\"#thanks\").html(msg)
\t                      \$(\"#form-content\").modal('hide'); 
\t        \t    \t  },
\t        \t      error: function(){
\t        \t    \t  alert(\"failure\");
\t        \t      }
\t       });
\t });
});
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
        return array (  216 => 103,  213 => 102,  204 => 97,  192 => 93,  187 => 91,  180 => 89,  175 => 87,  171 => 86,  167 => 85,  164 => 84,  160 => 83,  143 => 68,  106 => 39,  99 => 37,  92 => 33,  88 => 32,  85 => 31,  81 => 30,  62 => 14,  58 => 13,  54 => 12,  48 => 11,  40 => 8,  32 => 2,  29 => 1,);
    }
}
