<?php

/* turno.view.html */
class __TwigTemplate_76acfdda1268cf7c477dee0bc94b56a113f86fde91ce80b917448fd56b79d2a1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turno.view.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Turno";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "id", array()), "html", null, true);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<h2 class=\"success\">--Ficha del Turno-- </h2>
<h3>Datos del Turno:</h3>
 
<div>
  <label for=\"Fecha\"><b>Fecha del Turno:</b>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "</label>
</div>
<br>

<div>
  <label for=\"Horario\"><b> Horario del turno: </b>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "horario_turno", array()), "html", null, true);
        echo " </label>
</div>
<br><br>

<h3>Datos del Paciente: </h3>

<div>
  <label for=\"Nombre\"><b>Nombre:</b>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "nombre", array()), "html", null, true);
        echo "   </label>
</div>
 <br>

<div>
  <label for=\"Email:\"><b>Email:</b>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "email", array()), "html", null, true);
        echo "   </label>
</div>
<br>

<div>
  <label for=\"Teléfono:\"><b>Teléfono:</b>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "telefono", array()), "html", null, true);
        echo "   </label>
</div>
<br> 

<div>
  <label for=\"Edad:\"><b>Edad:</b>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "edad", array()), "html", null, true);
        echo "   </label>
</div>
<br> 

<div>
  <label for=\"Nro de Calzado:\"><b>Nro de Calzado:</b>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "   </label>
</div>
<br> 

<div>
  <label for=\"Altura:\"><b>Altura:</b>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "altura", array()), "html", null, true);
        echo "   </label>
</div>
<br> 

<div>
  <label for=\"Color de Pelo:\"><b>Color de Pelo:</b>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()), "html", null, true);
        echo "   </label>
</div>
<br> 

<div>
  <label for=\"Fecha de Nacimiento:\"><b>Fecha de Nacimiento:</b>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "   </label>
</div>
<br> 

<h3>Diagnóstico:</h3>";
        // line 64
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "diagnostico", array()))) {
            // line 65
            echo "   <img src=";
            echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
            echo " alt=\"Diagnostico\">";
        } else {
            // line 67
            echo "  <p>No</p>";
        }
    }

    public function getTemplateName()
    {
        return "turno.view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 67,  133 => 65,  131 => 64,  124 => 59,  116 => 54,  108 => 49,  100 => 44,  92 => 39,  84 => 34,  76 => 29,  68 => 24,  58 => 17,  50 => 12,  44 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}
  Turno {{ turno.id }}
{% endblock %}

{% block main %}
<h2 class=\"success\">--Ficha del Turno-- </h2>
<h3>Datos del Turno:</h3>
 
<div>
  <label for=\"Fecha\"><b>Fecha del Turno:</b> {{turno.fecha_turno}}</label>
</div>
<br>

<div>
  <label for=\"Horario\"><b> Horario del turno: </b> {{  turno.horario_turno }} </label>
</div>
<br><br>

<h3>Datos del Paciente: </h3>

<div>
  <label for=\"Nombre\"><b>Nombre:</b>  {{ turno.nombre }}   </label>
</div>
 <br>

<div>
  <label for=\"Email:\"><b>Email:</b>  {{ turno.email }}   </label>
</div>
<br>

<div>
  <label for=\"Teléfono:\"><b>Teléfono:</b>  {{ turno.telefono }}   </label>
</div>
<br> 

<div>
  <label for=\"Edad:\"><b>Edad:</b>  {{ turno.edad }}   </label>
</div>
<br> 

<div>
  <label for=\"Nro de Calzado:\"><b>Nro de Calzado:</b>  {{ turno.talla_calzado }}   </label>
</div>
<br> 

<div>
  <label for=\"Altura:\"><b>Altura:</b>  {{ turno.altura }}   </label>
</div>
<br> 

<div>
  <label for=\"Color de Pelo:\"><b>Color de Pelo:</b>  {{ turno.color_pelo }}   </label>
</div>
<br> 

<div>
  <label for=\"Fecha de Nacimiento:\"><b>Fecha de Nacimiento:</b>  {{ turno.fecha_nacimiento }}   </label>
</div>
<br> 

<h3>Diagnóstico:</h3>
{% if turno.diagnostico is not null %}
   <img src={{ img_path }} alt=\"Diagnostico\">
{% else %}
  <p>No</p>
{% endif %}


{% endblock %}", "turno.view.html", "C:\\Users\\maria\\Documents\\4-1\\paw\\PAW-TPs-Iarza-Rapaport-Vazquez\\PAW-TP3\\Ejercicio2\\APP\\views\\turno.view.html");
    }
}
