<?php

/* _templates/correcto.twig */
class __TwigTemplate_036bab43e5e5bebbc174d7621461dd6fcf52b3ae0cce3b48aaa0e85d30a6eaab extends Twig_Template
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
\t\t<small>Operación realizada con éxito</small>
\t</h1>
\t<div class=\"alert alert-success\" role=\"alert\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
        echo "</div>\t  

</div>
\t<a class=\"btn btn-default btn-lg btn-block\"
\t\thref=\"";
        // line 10
        echo twig_escape_filter($this->env, site_url("home/"), "html", null, true);
        echo "\">Aceptar</a>
";
    }

    public function getTemplateName()
    {
        return "_templates/correcto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  37 => 6,  31 => 2,  28 => 1,);
    }
}
