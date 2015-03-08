<?php

/* usuario/confirmacion.twig */
class __TwigTemplate_f05c80fbdd72809f0f1912fe048b1971799d1b8919c2af83921916de4d0bf37f extends Twig_Template
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
        echo "<div class=\"page-header\">
\t<h1>
\t\t";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["tabla"]) ? $context["tabla"] : null), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, (isset($context["cabecera"]) ? $context["cabecera"] : null), "html", null, true);
        echo "</small>
\t</h1>

</div>
<div class=\"col-md-12\">
    <div class=\"well\">
\t\t<p>Nombre: ";
        // line 10
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "nombre", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "apellidos", array())), "html", null, true);
        echo "</p>
\t\t<p>DNI: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "dni", array()), "html", null, true);
        echo "</p>
\t\t<p>Provincia: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "provincia", array()), "html", null, true);
        echo "</p>
\t\t<p>Dirección: ";
        // line 13
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "direccion", array())), "html", null, true);
        echo "</p>
\t\t<p>Código postal: ";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "cp", array())), "html", null, true);
        echo "</p>
\t</div>\t
\t<a class=\"btn btn-primary\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, site_url("usuario/procesa_baja_usuario"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "idUsuario", array()), "html", null, true);
        echo "\">Darme de baja</a>
\t<a class=\"btn btn-default\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url("home"), "html", null, true);
        echo "\">Cancelar</a>
\t\t
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "usuario/confirmacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  69 => 16,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  46 => 10,  35 => 4,  31 => 2,  28 => 1,);
    }
}
