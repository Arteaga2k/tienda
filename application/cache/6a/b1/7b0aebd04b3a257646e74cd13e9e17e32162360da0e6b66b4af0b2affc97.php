<?php

/* pedido/datos_pedido.twig */
class __TwigTemplate_6ab17b0aebd04b3a257646e74cd13e9e17e32162360da0e6b66b4af0b2affc97 extends Twig_Template
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
\t\t<h3>Contenido del carrito</h3>
\t\t<hr />
\t\t<table class=\"table table-bordered\">
\t\t\t<tr>

\t\t\t\t<th>Código</th>
\t\t\t\t<th>Concepto</th>
\t\t\t\t<th>Precio</th>
\t\t\t\t<th>Unidades</th>
\t\t\t\t<th>Total</th>


\t\t\t</tr>

\t\t\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 20
            echo "\t\t\t<tr>
\t\t\t\t<td>1</td>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "€</td>
\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "cantidad", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, ($this->getAttribute($context["producto"], "precio", array()) * $this->getAttribute($context["producto"], "cantidad", array())), "html", null, true);
            echo "€</td>

\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<td>Total</td>
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "articulos_total", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carrito"]) ? $context["carrito"] : null), "precio_total", array()), "html", null, true);
        echo "€</td>
\t\t\t</tr>
\t\t</table>

\t\t<h3>Datos de envío</h3>
\t\t<hr />
\t\t";
        // line 40
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_direccion", array());
        echo "
\t\t<div
\t\t\tclass=\"form-group ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\"
\t\t\t\t\tvalue=\"";
        // line 46
        echo twig_escape_filter($this->env, set_value("nombre"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array());
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"form-group ";
        // line 50
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"apellidos\" class=\"col-sm-2 control-label\">Apellidos</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"apellidos\"
\t\t\t\t\tid=\"apellidos\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, set_value("apellidos"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array());
        // line 55
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 60
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"dni\" class=\"col-sm-2 control-label\">DNI</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"dni\" id=\"dni\"
\t\t\t\t\tvalue=\"";
        // line 64
        echo twig_escape_filter($this->env, set_value("dni"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 69
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"direccion\" class=\"col-sm-2 control-label\">Dirección</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"direccion\"
\t\t\t\t\tid=\"direccion\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, set_value("direccion"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group \">
\t\t\t<label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<select class=\"form-control\" name=\"provincia\" id=\"provincia\"> ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["provincia"]) {
            // line 82
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "idProvincia", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "nombre", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provincia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 89
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"cp\" class=\"col-sm-2 control-label\">Código Postal</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"cp\" id=\"cp\"
\t\t\t\t\tvalue=\"";
        // line 93
        echo twig_escape_filter($this->env, set_value("cp"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 98
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"cp\" class=\"col-sm-2 control-label\">Descripción</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<textarea class=\"form-control\" rows=\"5\" id=\"descripcion\"
\t\t\t\t\tvalue=\"";
        // line 102
        echo twig_escape_filter($this->env, set_value("descripcion"), "html", null, true);
        echo "\"></textarea>
\t\t\t\t<span>";
        // line 103
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label> <input type=\"checkbox\" id=\"copiaDatos\"> Copiar datos
\t\t\t\t\t\tusuario
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "idUsuario", array()), "html", null, true);
        echo "\" name=\"id\" />

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</div>
\t<div class=\"row\"></div>
</div>


";
    }

    // line 130
    public function block_script($context, array $blocks = array())
    {
        // line 131
        echo "

<script type=\"text/javascript\">

\t\$(document).ready(function(){

\t\t\$('#copiaDatos').click(function(){\t
\t\t\t if(\$(this).is(\":checked\")){
\t\t\t\t    \$('#nombre').val('";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "nombre", array()), "html", null, true);
        echo "');
\t\t\t\t\t\$('#apellidos').val('";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "apellidos", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#dni').val('";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "dni", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#direccion').val('";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "direccion", array()), "html", null, true);
        echo "');\t\t
\t\t\t\t\t\$('#cp').val('";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "cp", array()), "html", null, true);
        echo "');\t
\t\t\t\t\t\$('#provincia').val('";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), "idProvincia", array()), "html", null, true);
        echo "');\t\t
\t            }
\t            else if(\$(this).is(\":not(:checked)\")){
\t            \t\$('#nombre').val('');
\t\t\t\t\t\$('#apellidos').val('');
\t\t\t\t\t\$('#dni').val('');
\t\t\t\t\t\$('#direccion').val('');
\t\t\t\t\t\$('#cp').val('');
\t\t\t\t\t\$('#provincia').val('1');
\t            }\t
\t\t\t\t
\t\t\t\t
\t\t});
\t\t\t

\t\t\$('#cantidad').click(function(){
\t\t\t if (\$('#formAdd').hasClass('form-group has-error')){\t\t    \t
\t\t    \t \$('#formAdd').removeClass('form-group has-error').addClass('form-group');
\t\t    \t \$('#errorCantidad').text('');
\t\t\t}
\t\t});\t
\t\t
\t});



</script>
";
    }

    public function getTemplateName()
    {
        return "pedido/datos_pedido.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 144,  299 => 143,  295 => 142,  291 => 141,  287 => 140,  283 => 139,  273 => 131,  270 => 130,  252 => 117,  235 => 103,  231 => 102,  222 => 98,  212 => 93,  203 => 89,  196 => 84,  185 => 82,  181 => 80,  171 => 73,  162 => 69,  152 => 64,  143 => 60,  136 => 55,  132 => 54,  123 => 50,  114 => 46,  105 => 42,  100 => 40,  91 => 34,  87 => 33,  81 => 29,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 20,  51 => 19,  32 => 2,  29 => 1,);
    }
}
