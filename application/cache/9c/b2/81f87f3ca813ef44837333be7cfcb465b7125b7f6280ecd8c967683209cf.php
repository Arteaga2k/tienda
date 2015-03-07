<?php

/* usuario/usuario_editapwd_formulario.twig */
class __TwigTemplate_9cb281f87f3ca813ef44837333be7cfcb465b7125b7f6280ecd8c967683209cf extends Twig_Template
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

<div class=\"row\">
\t";
        // line 5
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 6
            echo "\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>
\t";
        }
        // line 8
        echo "\t
\t<div class=\"col-md-8\">
\t\t<h3>Cambio de contraseña</h3>
\t\t<hr />
\t\t";
        // line 12
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_edicion_pwd", array());
        echo "

\t\t<div
\t\t\tclass=\"form-group ";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passvieja", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"passvieja\" class=\"col-sm-2 control-label\">Actual contraseña</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passvieja\"
\t\t\t\t\tname=\"passvieja\"  value=\"\" placeholder=\"\"> <span>";
        // line 19
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passvieja", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 24
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passnueva", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"passnueva\" class=\"col-sm-2 control-label\">Nueva contraseña</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passnueva\"
\t\t\t\t\tname=\"passnueva\" value=\"\" placeholder=\"\"> <span>";
        // line 28
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passnueva", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<div
\t\t\tclass=\"form-group ";
        // line 33
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passconf", array()))) {
            echo "has-error";
        }
        echo "\">
\t\t\t<label for=\"passconf\" class=\"col-sm-2 control-label\">Confirmar
\t\t\t\tcontraseña</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"passconf\"
\t\t\t\t\tid=\"passconf\" placeholder=\"\"> <span>";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passconf", array());
        echo "</span>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), "html", null, true);
        echo "\" name=\"token\" /> <input
\t\t\ttype=\"hidden\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), "html", null, true);
        echo "\" name=\"id\" />

\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "usuario/usuario_editapwd_formulario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  107 => 42,  100 => 38,  90 => 33,  82 => 28,  73 => 24,  65 => 19,  56 => 15,  50 => 12,  44 => 8,  38 => 6,  36 => 5,  31 => 2,  28 => 1,);
    }
}
