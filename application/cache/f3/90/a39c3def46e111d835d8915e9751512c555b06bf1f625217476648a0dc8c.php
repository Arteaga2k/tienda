<?php

/* ficheros/upload_formulario.twig */
class __TwigTemplate_f390a39c3def46e111d835d8915e9751512c555b06bf1f625217476648a0dc8c extends Twig_Template
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
\t";
        // line 5
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 6
            echo "\t   <div class=\"alert alert-danger\" role=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>
\t";
        }
        // line 8
        echo "\t<div class=\"col-md-5\">

\t\t<h3>Importar archivos</h3>
\t\t<hr />
\t\t";
        // line 12
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_upload", array());
        echo "
\t\t<div
\t\t\tclass=\"form-group ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()))) {
            echo "has-error";
        }
        echo "\">

\t\t\t<label for=\"username\" class=\"col-sm-2 control-label\">Username</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"filename\"
\t\t\t\t\tname=\"filename\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, set_value("filename"), "html", null, true);
        echo "\"> <span>";
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "filename", array());
        // line 20
        echo "</span>
\t\t\t</div>
\t\t</div>\t
\t\t
\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Subir</button>
\t\t\t</div>
\t\t</div>
\t\t</form>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "ficheros/upload_formulario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  65 => 19,  55 => 14,  50 => 12,  44 => 8,  38 => 6,  36 => 5,  31 => 2,  28 => 1,);
    }
}
