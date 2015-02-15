<?php

/* usuario/alta_formulario.twig */
class __TwigTemplate_b7c6a093d214d296b9b8d72ee56da7a804d83eabceedafff39ed3c51f24bbdfe extends Twig_Template
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

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "

<div class=\"col-md-12\"> 
    ";
        // line 6
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array()))) {
            // line 7
            echo "    
    <div class=\"alert alert-danger\" role=\"alert\">";
            // line 8
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "error", array());
            echo "</div>
    
    ";
        }
        // line 11
        echo "\t<div class=\"col-md-5\">
\t
\t<h3>";
        // line 13
        echo ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()))) ? ((("Editando Usuario") ? ("Nuevo Usuario") : (""))) : (""));
        echo "</h3>
\t<hr />
       ";
        // line 15
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "form_alta", array());
        echo "\t\t
         <div class=\"form-group ";
        // line 16
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()))) {
            echo "has-error";
        }
        echo "\">
                  
            <label for=\"username\" class=\"col-sm-2 control-label\">Username</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, set_value("username"), "html", null, true);
        echo "\">
                <span>";
        // line 21
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array());
        echo "</span>
            </div>          
         </div>
         
          <div class=\"form-group ";
        // line 25
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"email\" class=\"col-sm-2 co ntrol-label\">Email</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, set_value("email"), "html", null, true);
        echo "\">
                <span>";
        // line 29
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array());
        echo "</span>
            </div>
           
          </div>
          
          <div class=\"form-group ";
        // line 34
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"password\" class=\"col-sm-2 control-label\">Password</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\">
                <span>";
        // line 38
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array());
        echo "</span>
            </div>
          </div> 
                    
           <div class=\"form-group ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passconf", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"passconf\" class=\"col-sm-2 control-label\">Confirmar Password</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"passconf\" id=\"passconf\" placeholder=\"Password\">
                <span>";
        // line 46
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "passconf", array());
        echo "</span>
            </div>
          </div> 
                  
          <hr />
           <div class=\"form-group ";
        // line 51
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"nombre\" class=\"col-sm-2 control-label\">Nombre</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"nombre\" id=\"nombre\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, set_value("nombre"), "html", null, true);
        echo "\">
               <span>";
        // line 55
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array());
        echo "</span>
            </div>
          </div>
           <div class=\"form-group ";
        // line 58
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"apellidos\" class=\"col-sm-2 control-label\">Apellidos</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"apellidos\" id=\"apellidos\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, set_value("apellidos"), "html", null, true);
        echo "\">
               <span>";
        // line 62
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellidos", array());
        echo "</span>
            </div>
          </div>
          
          <div class=\"form-group ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"dni\" class=\"col-sm-2 control-label\">DNI</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"dni\" id=\"dni\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, set_value("dni"), "html", null, true);
        echo "\">
               <span>";
        // line 70
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dni", array());
        echo "</span>
            </div>
          </div>
          
          <div class=\"form-group ";
        // line 74
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "direccion", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"direccion\" class=\"col-sm-2 control-label\">Dirección</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"direccion\" id=\"direccion\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, set_value("direccion"), "html", null, true);
        echo "\">
            </div>
          </div>
          
          <div class=\"form-group \">
\t\t  <label for=\"provincia\" class=\"col-sm-2 control-label\">Provincia</label>
    \t\t  <div class=\"col-sm-10\">
    \t\t\t<select class=\"form-control\" name=\"provincia\" id=\"provincia\">
    \t\t\t\t";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["provincia"]) {
            // line 86
            echo "    \t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "idProvincia", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincia"], "nombre", array()), "html", null, true);
            // line 87
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provincia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "    \t\t\t</select>
    \t\t  </div>
\t      </div>
          
           <div class=\"form-group ";
        // line 92
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array()))) {
            echo "has-error";
        }
        echo "\">
            <label for=\"cp\" class=\"col-sm-2 control-label\">Código Postal</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cp\" id=\"cp\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, set_value("cp"), "html", null, true);
        echo "\">
               <span>";
        // line 96
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cp", array());
        echo "</span>
            </div>
          </div>
          
          <input type=\"hidden\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "token", array()), "html", null, true);
        echo "\" name=\"token\" />
           ";
        // line 101
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()))) {
            // line 102
            echo "                 <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), "html", null, true);
            echo "\" name=\"id\" />
            ";
        }
        // line 104
        echo "         
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
            </div>
          </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "usuario/alta_formulario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 104,  254 => 102,  252 => 101,  248 => 100,  241 => 96,  237 => 95,  229 => 92,  223 => 88,  217 => 87,  212 => 86,  208 => 85,  197 => 77,  189 => 74,  182 => 70,  178 => 69,  170 => 66,  163 => 62,  159 => 61,  151 => 58,  145 => 55,  141 => 54,  133 => 51,  125 => 46,  116 => 42,  109 => 38,  100 => 34,  92 => 29,  88 => 28,  80 => 25,  73 => 21,  69 => 20,  60 => 16,  56 => 15,  51 => 13,  47 => 11,  41 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
