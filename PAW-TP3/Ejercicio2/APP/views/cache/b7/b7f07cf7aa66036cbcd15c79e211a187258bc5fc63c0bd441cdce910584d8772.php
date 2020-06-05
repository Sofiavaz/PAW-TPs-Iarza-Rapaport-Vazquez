<?php

/* turno.reserved.html */
class __TwigTemplate_e1fb8490317d6c390955570e46a599c77a7ec33fd178e2a4945a5cb2419fa972 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("base.html", "turno.reserved.html", 2);
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Turno";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "id", array()), "html", null, true);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <h2 class=\"success\">--Información del turno-- </h2>
  <h3>Datos del Turno:</h3>
   
  <div>
    <label for=\"Fecha\"><b>Fecha del Turno:</b>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "</label>
  </div>
  <br>

  <div>
    <label for=\"Horario\"><b> Horario del turno: </b>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "horario_turno", array()), "html", null, true);
        echo " </label>
  </div>
  <br><br>

  <h3>Datos del Paciente: </h3>
  
  <div>
    <label for=\"Nombre\"><b>Nombre:</b>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "nombre", array()), "html", null, true);
        echo "   </label>
  </div>
   <br>

  <div>
    <label for=\"Email:\"><b>Email:</b>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "email", array()), "html", null, true);
        echo "   </label>
  </div>
  <br>

  <div>
    <label for=\"Teléfono:\"><b>Teléfono:</b>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "telefono", array()), "html", null, true);
        echo "   </label>
  </div>
  <br> 
 
  <div>
    <label for=\"Edad:\"><b>Edad:</b>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "edad", array()), "html", null, true);
        echo "   </label>
  </div>
  <br> 

  <div>
    <label for=\"Nro de Calzado:\"><b>Nro de Calzado:</b>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "   </label>
  </div>
  <br> 

  <div>
    <label for=\"Altura:\"><b>Altura:</b>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "altura", array()), "html", null, true);
        echo "   </label>
  </div>
  <br> 

  <div>
    <label for=\"Color de Pelo:\"><b>Color de Pelo:</b>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()), "html", null, true);
        echo "   </label>
  </div>
  <br> 
 
  <div>
    <label for=\"Fecha de Nacimiento:\"><b>Fecha de Nacimiento:</b>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "   </label>
  </div>
  <br> 

  <h3>Diagnóstico:</h3>";
        // line 65
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "diagnostico", array()))) {
            // line 66
            echo "     <img src=";
            echo twig_escape_filter($this->env, ($context["img_path"] ?? null), "html", null, true);
            echo ">";
        } else {
            // line 68
            echo "    <p>No</p>";
        }
    }

    public function getTemplateName()
    {
        return "turno.reserved.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 68,  133 => 66,  131 => 65,  124 => 60,  116 => 55,  108 => 50,  100 => 45,  92 => 40,  84 => 35,  76 => 30,  68 => 25,  58 => 18,  50 => 13,  44 => 9,  41 => 8,  36 => 5,  33 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"base.html\" %}

{% block title %}
Turno {{ turno.id }}
{% endblock %}

{% block main %}
  <h2 class=\"success\">--Información del turno-- </h2>
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
     <img src={{ img_path }}>
  {% else %}
    <p>No</p>
  {% endif %}

{% endblock %}


", "turno.reserved.html", "C:\\Users\\maria\\Documents\\4-1\\paw\\PAW-TPs-Iarza-Rapaport-Vazquez\\PAW-TP3\\Ejercicio2\\APP\\views\\turno.reserved.html");
    }
}
