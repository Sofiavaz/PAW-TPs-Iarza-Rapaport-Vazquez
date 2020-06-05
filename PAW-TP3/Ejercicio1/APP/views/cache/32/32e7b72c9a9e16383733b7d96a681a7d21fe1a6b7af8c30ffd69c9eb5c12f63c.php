<?php

/* turnos.create.html */
class __TwigTemplate_618e71471c0368b7e031aa004dba5e11e2b969de11d6e0a28f17c692af730a71 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turnos.create.html", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " 
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Nuevo Turno";
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "  <h1>Formulario Medico</h1>
  ";
        // line 12
        if ((($context["error"] ?? null) != "")) {
            // line 13
            echo "    <p>Campos con errores: ";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
  ";
        }
        // line 15
        echo "  <form action=\"/turno/reserved\" method=\"post\" name=\"formulario\" enctype=\"multipart/form-data\">
    <fieldset>
      <legend>Datos personales</legend>
      <div class=\"field\">
        <label class=\"required\" for=\"nombre\">Nombre: </label>
        <input name=\"nombre\" type=\"text\" required=\"required\" placeholder=\"Nombre\" maxlength=30 value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "nombre", array()), "html", null, true);
        echo "\" />
      </div>
      <div class=\"field\">
        <label class=\"required\" for=\"email\" >Email: </label>
        <input name=\"email\" type=\"email\" required=\"required\" placeholder=\"E-Mail\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "email", array()), "html", null, true);
        echo "\"/>
      </div>
      <div class=\"field\">
        <label class=\"required\" for=\"telefono\" >Teléfono: </label>
        <input name=\"telefono\" type=\"tel\" required=\"required\" placeholder=\"Telefono\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "telefono", array()), "html", null, true);
        echo "\"/>
      </div>
      <div class=\"field\">
        <label for=\"edad\" >Edad: </label>
        <input name=\"edad\" type=\"number\" min=0 max=130 placeholder=\"Edad\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "edad", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"field\">
        <label for=\"talla-calzado\" >Talla de calzado: </label>
        <input name=\"talla-calzado\" type=\"number\" min=20 max=45 placeholder=\"Calzado\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"field\">
        <label for=\"altura\" >Altura: </label>
        <input name=\"altura\" type=\"number\" placeholder=\"Altura\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "altura", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"field\">
        <label class=\"required\" for=\"fecha-nacimiento\">Ingrese su fecha de nacimiento: </label>
        <input name=\"fecha-nacimiento\" type=\"date\" required=\"required\" placeholder=\"Fecha nacim\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"field\">
        <label for=\"color-pelo\" >Ingrese su color de pelo: </label>
        <select name=\"color-pelo\" placeholder=\"Color de pelo\">
          <option ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == null)) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"null\">No especifica</option>
          <option ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "marron")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"marron\">Marrón</option>
          <option ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "negro")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"negro\">Negro</option>
          <option ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "amarillo")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"amarillo\">Amarillo</option>
          <option ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "rojo")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"rojo\">Rojo</option>
          <option ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()) == "calvo")) {
            echo " selected=\"selected\" ";
        }
        echo " value=\"calvo\">Calvo</option>
        </select>
      </div>
    </fieldset>
    <fieldset>
      <legend>Turno</legend>
      <div class=\"field\">
        <label class=\"required\" for=\"fecha-turno\">Seleccione una fecha para el turno: </label>
        <input name=\"fecha-turno\" type=\"date\" required=\"required\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_turno", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"field\">
        <label class=\"required\" for=\"horario-turno\" >Seleccione un horario para el turno: </label>
        <input name=\"horario-turno\" type=\"time\" required=\"required\" step=\"900\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "horario_turno", array()), "html", null, true);
        echo "\">
      </div>
      <div class=\"field\">
        <label for=\"diagnostico\">Adjuntar diagnostico: </label>
        <input name=\"diagnostico\" type=\"file\" accept=\"image/jpeg, image/x-png\"/ value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "diagnostico", array()), "html", null, true);
        echo "\">
      </div>
      <input  class=\"controls\" type=\"submit\" value=\"Enviar\" name=\"submit\">
      <input  class=\"controls\" type=\"reset\" value=\"Resetear\">
    </fieldset>
  </form>
";
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
        return array (  180 => 70,  173 => 66,  166 => 62,  153 => 54,  147 => 53,  141 => 52,  135 => 51,  129 => 50,  123 => 49,  115 => 44,  108 => 40,  101 => 36,  94 => 32,  87 => 28,  80 => 24,  73 => 20,  66 => 15,  60 => 13,  58 => 12,  55 => 11,  52 => 10,  46 => 8,  39 => 5,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block head %}
    {# Esto es un comentario. Lo dejo para recordad que se puede usar parent() #}
    {{ parent() }} 
{% endblock %}

{% block title %}Nuevo Turno{% endblock %}

{% block main %}
  <h1>Formulario Medico</h1>
  {% if error != \"\" %}
    <p>Campos con errores: {{ error }}</p>
  {% endif %}
  <form action=\"/turno/reserved\" method=\"post\" name=\"formulario\" enctype=\"multipart/form-data\">
    <fieldset>
      <legend>Datos personales</legend>
      <div class=\"field\">
        <label class=\"required\" for=\"nombre\">Nombre: </label>
        <input name=\"nombre\" type=\"text\" required=\"required\" placeholder=\"Nombre\" maxlength=30 value=\"{{turno.nombre}}\" />
      </div>
      <div class=\"field\">
        <label class=\"required\" for=\"email\" >Email: </label>
        <input name=\"email\" type=\"email\" required=\"required\" placeholder=\"E-Mail\" value=\"{{turno.email}}\"/>
      </div>
      <div class=\"field\">
        <label class=\"required\" for=\"telefono\" >Teléfono: </label>
        <input name=\"telefono\" type=\"tel\" required=\"required\" placeholder=\"Telefono\" value=\"{{turno.telefono}}\"/>
      </div>
      <div class=\"field\">
        <label for=\"edad\" >Edad: </label>
        <input name=\"edad\" type=\"number\" min=0 max=130 placeholder=\"Edad\" value=\"{{turno.edad}}\">
      </div>
      <div class=\"field\">
        <label for=\"talla-calzado\" >Talla de calzado: </label>
        <input name=\"talla-calzado\" type=\"number\" min=20 max=45 placeholder=\"Calzado\" value=\"{{turno.talla_calzado}}\">
      </div>
      <div class=\"field\">
        <label for=\"altura\" >Altura: </label>
        <input name=\"altura\" type=\"number\" placeholder=\"Altura\" value=\"{{turno.altura}}\">
      </div>
      <div class=\"field\">
        <label class=\"required\" for=\"fecha-nacimiento\">Ingrese su fecha de nacimiento: </label>
        <input name=\"fecha-nacimiento\" type=\"date\" required=\"required\" placeholder=\"Fecha nacim\" value=\"{{turno.fecha_nacimiento}}\">
      </div>
      <div class=\"field\">
        <label for=\"color-pelo\" >Ingrese su color de pelo: </label>
        <select name=\"color-pelo\" placeholder=\"Color de pelo\">
          <option {% if (turno.color_pelo == null) %} selected=\"selected\" {% endif %} value=\"null\">No especifica</option>
          <option {% if (turno.color_pelo == \"marron\") %} selected=\"selected\" {% endif %} value=\"marron\">Marrón</option>
          <option {% if (turno.color_pelo == \"negro\") %} selected=\"selected\" {% endif %} value=\"negro\">Negro</option>
          <option {% if (turno.color_pelo == \"amarillo\") %} selected=\"selected\" {% endif %} value=\"amarillo\">Amarillo</option>
          <option {% if (turno.color_pelo == \"rojo\") %} selected=\"selected\" {% endif %} value=\"rojo\">Rojo</option>
          <option {% if (turno.color_pelo == \"calvo\") %} selected=\"selected\" {% endif %} value=\"calvo\">Calvo</option>
        </select>
      </div>
    </fieldset>
    <fieldset>
      <legend>Turno</legend>
      <div class=\"field\">
        <label class=\"required\" for=\"fecha-turno\">Seleccione una fecha para el turno: </label>
        <input name=\"fecha-turno\" type=\"date\" required=\"required\" value=\"{{turno.fecha_turno}}\">
      </div>
      <div class=\"field\">
        <label class=\"required\" for=\"horario-turno\" >Seleccione un horario para el turno: </label>
        <input name=\"horario-turno\" type=\"time\" required=\"required\" step=\"900\" value=\"{{turno.horario_turno}}\">
      </div>
      <div class=\"field\">
        <label for=\"diagnostico\">Adjuntar diagnostico: </label>
        <input name=\"diagnostico\" type=\"file\" accept=\"image/jpeg, image/x-png\"/ value=\"{{turno.diagnostico}}\">
      </div>
      <input  class=\"controls\" type=\"submit\" value=\"Enviar\" name=\"submit\">
      <input  class=\"controls\" type=\"reset\" value=\"Resetear\">
    </fieldset>
  </form>
{% endblock %}", "turnos.create.html", "C:\\ProgWeb\\tp4-paw\\3\\app\\views\\turnos.create.html");
    }
}
