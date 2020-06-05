<?php

/* turnos.create.html */
class __TwigTemplate_dc508ad57aee236fbb7074da7109cfdd3bbe23af054abb07ad0c0b07df5c6389 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnos.create.html", 1);
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
        echo "Nuevo Turno";
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <h1>Formulario Medico</h1>";
        // line 10
        if ((($context["error"] ?? null) != "")) {
            // line 11
            echo "    <p>Campos con errores:";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>";
        }
        // line 13
        echo "  <form action=\"/turno/reserved\" method=\"post\" name=\"formulario\" enctype=\"multipart/form-data\">
      <h3>Datos del Paciente</h3>

        <label class=\"required\" for=\"nombre\">Nombre: </label>
        <input name=\"nombre\" type=\"text\" required=\"required\" maxlength=30 value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "nombre", array()), "html", null, true);
        echo "\" />
        <br><br>

        <label class=\"required\" for=\"email\" >Email: </label>
        <input name=\"email\" type=\"email\" required=\"required\"  value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "email", array()), "html", null, true);
        echo "\"/>
        <br><br>
      

        <label class=\"required\" for=\"telefono\" >Teléfono: </label>
        <input name=\"telefono\" type=\"tel\" required=\"required\"value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "telefono", array()), "html", null, true);
        echo "\"/>
        <br><br>
      
        <label for=\"edad\" >Edad: </label>
        <input name=\"edad\" type=\"number\" min=0 max=130 value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "edad", array()), "html", null, true);
        echo "\">
        <br><br>
      

        <label for=\"talla-calzado\" >Nro Calzado: </label>
        <input name=\"talla-calzado\" type=\"number\" min=20 max=45  value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "\">
        <br><br>
      

        <label for=\"altura\" >Altura: </label>
        <input name=\"altura\" type=\"range\"  id=\"height\" min=\"100\" max=\"230\"  value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "altura", array()), "html", null, true);
        echo "\">
        <br><br>
      

        <label class=\"required\" for=\"fecha-nacimiento\">Fecha de nacimiento: </label>
        <input name=\"fecha-nacimiento\" type=\"date\" required=\"required\"  value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "\">
        <br><br>
      
 
        <label for=\"color-pelo\" >Color de pelo: </label>
        <select name=\"color-pelo\" >
          <option";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == null)) {
            echo " selected=\"selected\"";
        }
        echo " value=\"null\">No especifica</option>
          <option";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "Castaño")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"Castaño\">Castaño</option>
          <option";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "Morocho")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"Morocho\">Morocho</option>
          <option";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "Rubio")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"Rubio\">Rubio</option>
          <option";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "Pelirrojo")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"Pelirrojo\">Pelirrojo</option>
          <option";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "Calvo")) {
            echo " selected=\"selected\"";
        }
        echo " value=\"Calvo\">Calvo</option>
        </select>
        <br><br>
      
      <h3>Datos del Turno</h3>
      

        <label class=\"required\" for=\"fecha-turno\">Dia Turno: </label>
        <input name=\"fecha-turno\" type=\"date\" required=\"required\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "\">
        <br><br>
      

        <label class=\"required\" for=\"horario-turno\" > Hora turno: </label>
        <input name=\"horario-turno\" type=\"time\" required=\"required\" step=\"900\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "horario_turno", array()), "html", null, true);
        echo "\">
        <br><br>
      

        <label for=\"diagnostico\"> Diagnóstico: </label>
        <input name=\"diagnostico\" type=\"file\" accept=\"image/jpeg, image/x-png\"/ value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "diagnostico", array()), "html", null, true);
        echo "\">
        <br><br>
      
      <input  class=\"controls\" type=\"submit\" value=\"Enviar\" name=\"submit\">
      <input  class=\"controls\" type=\"reset\" value=\"Borrar Campos\">
  </form>";
    }

    public function getTemplateName()
    {
        return "turnos.create.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 74,  163 => 69,  155 => 64,  142 => 56,  136 => 55,  130 => 54,  124 => 53,  118 => 52,  112 => 51,  103 => 45,  95 => 40,  87 => 35,  79 => 30,  72 => 26,  64 => 21,  57 => 17,  51 => 13,  46 => 11,  44 => 10,  42 => 9,  39 => 8,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}


{% block title %}Nuevo Turno{% endblock %}



{% block main %}
  <h1>Formulario Medico</h1>
  {% if error != \"\" %}
    <p>Campos con errores: {{ error }}</p>
  {% endif %}
  <form action=\"/turno/reserved\" method=\"post\" name=\"formulario\" enctype=\"multipart/form-data\">
      <h3>Datos del Paciente</h3>

        <label class=\"required\" for=\"nombre\">Nombre: </label>
        <input name=\"nombre\" type=\"text\" required=\"required\" maxlength=30 value=\"{{turno.nombre}}\" />
        <br><br>

        <label class=\"required\" for=\"email\" >Email: </label>
        <input name=\"email\" type=\"email\" required=\"required\"  value=\"{{turno.email}}\"/>
        <br><br>
      

        <label class=\"required\" for=\"telefono\" >Teléfono: </label>
        <input name=\"telefono\" type=\"tel\" required=\"required\"value=\"{{turno.telefono}}\"/>
        <br><br>
      
        <label for=\"edad\" >Edad: </label>
        <input name=\"edad\" type=\"number\" min=0 max=130 value=\"{{turno.edad}}\">
        <br><br>
      

        <label for=\"talla-calzado\" >Nro Calzado: </label>
        <input name=\"talla-calzado\" type=\"number\" min=20 max=45  value=\"{{turno.talla_calzado}}\">
        <br><br>
      

        <label for=\"altura\" >Altura: </label>
        <input name=\"altura\" type=\"range\"  id=\"height\" min=\"100\" max=\"230\"  value=\"{{turno.altura}}\">
        <br><br>
      

        <label class=\"required\" for=\"fecha-nacimiento\">Fecha de nacimiento: </label>
        <input name=\"fecha-nacimiento\" type=\"date\" required=\"required\"  value=\"{{turno.fecha_nacimiento}}\">
        <br><br>
      
 
        <label for=\"color-pelo\" >Color de pelo: </label>
        <select name=\"color-pelo\" >
          <option {% if (turno.color_pelo == null) %} selected=\"selected\" {% endif %} value=\"null\">No especifica</option>
          <option {% if (turno.color_pelo == \"Castaño\") %} selected=\"selected\" {% endif %} value=\"Castaño\">Castaño</option>
          <option {% if (turno.color_pelo == \"Morocho\") %} selected=\"selected\" {% endif %} value=\"Morocho\">Morocho</option>
          <option {% if (turno.color_pelo == \"Rubio\") %} selected=\"selected\" {% endif %} value=\"Rubio\">Rubio</option>
          <option {% if (turno.color_pelo == \"Pelirrojo\") %} selected=\"selected\" {% endif %} value=\"Pelirrojo\">Pelirrojo</option>
          <option {% if (turno.color_pelo == \"Calvo\") %} selected=\"selected\" {% endif %} value=\"Calvo\">Calvo</option>
        </select>
        <br><br>
      
      <h3>Datos del Turno</h3>
      

        <label class=\"required\" for=\"fecha-turno\">Dia Turno: </label>
        <input name=\"fecha-turno\" type=\"date\" required=\"required\" value=\"{{turno.fecha_turno}}\">
        <br><br>
      

        <label class=\"required\" for=\"horario-turno\" > Hora turno: </label>
        <input name=\"horario-turno\" type=\"time\" required=\"required\" step=\"900\" value=\"{{turno.horario_turno}}\">
        <br><br>
      

        <label for=\"diagnostico\"> Diagnóstico: </label>
        <input name=\"diagnostico\" type=\"file\" accept=\"image/jpeg, image/x-png\"/ value=\"{{turno.diagnostico}}\">
        <br><br>
      
      <input  class=\"controls\" type=\"submit\" value=\"Enviar\" name=\"submit\">
      <input  class=\"controls\" type=\"reset\" value=\"Borrar Campos\">
  </form>
{% endblock %}", "turnos.create.html", "C:\\xampp\\htdocs\\3\\3\\APP\\views\\turnos.create.html");
    }
}
