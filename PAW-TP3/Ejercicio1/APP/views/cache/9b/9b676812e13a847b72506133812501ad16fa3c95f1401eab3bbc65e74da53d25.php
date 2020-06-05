<?php

/* turno.view.html */
class __TwigTemplate_c252442d6f75847d79191d6bd047841c823ead8e6b3dad1bae55375ecb7d21d4 extends Twig_Template
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
        echo "Turno ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "id", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<section class='info-persona'>
  <h3>DATOS PERSONALES</h3>
  <h5>Nombre: </h5>
  <p> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "nombre", array()), "html", null, true);
        echo "</p>
  <h5>Email:</h5>
  <p> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "email", array()), "html", null, true);
        echo "</p>
  <h5>Teléfono:</h5>
  <p> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "telefono", array()), "html", null, true);
        echo "</p>
  <h5>Edad:</h5>
  <p> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "edad", array()), "html", null, true);
        echo "</p>
  <h5>Talla de calzado:</h5>
  <p> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "talla_calzado", array()), "html", null, true);
        echo "</p>
  <h5>Altura: </h5>
  <p> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "altura", array()), "html", null, true);
        echo "</p>
  <h5>Color de pelo: </h5>
  <p> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "color_pelo", array()), "html", null, true);
        echo "</p>
  <h5>Fecha de nacimiento:</h5>
  <p> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_nacimiento", array()), "html", null, true);
        echo " </p>
</section>
<section class='info-turno'>
  <h3>TURNO</h3>
  <h5>Fecha:</h5>
  <p> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "fecha_turno", array()), "html", null, true);
        echo " </p>
  <h5>Horario:</h5>
  <p> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "horario_turno", array()), "html", null, true);
        echo " </p>
</section>
<section class=\"diagnostico\">
  <h3>Diagnostico</h3>
  ";
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "diagnostico", array()))) {
            // line 37
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, (("/" . twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "target_dir", array())) . twig_get_attribute($this->env, $this->source, ($context["turno"] ?? null), "diagnostico", array())), "html", null, true);
            echo "\" alt=\"Diagnostico\">
  ";
        } else {
            // line 39
            echo "    <p>No</p>
  ";
        }
        // line 41
        echo "</section>
";
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
        return array (  118 => 41,  114 => 39,  108 => 37,  106 => 36,  99 => 32,  94 => 30,  86 => 25,  81 => 23,  76 => 21,  71 => 19,  66 => 17,  61 => 15,  56 => 13,  51 => 11,  46 => 8,  43 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}
Turno {{ turno.id }}
{% endblock %}

{% block main %}
<section class='info-persona'>
  <h3>DATOS PERSONALES</h3>
  <h5>Nombre: </h5>
  <p> {{ turno.nombre }}</p>
  <h5>Email:</h5>
  <p> {{ turno.email }}</p>
  <h5>Teléfono:</h5>
  <p> {{  turno.telefono }}</p>
  <h5>Edad:</h5>
  <p> {{  turno.edad }}</p>
  <h5>Talla de calzado:</h5>
  <p> {{  turno.talla_calzado }}</p>
  <h5>Altura: </h5>
  <p> {{  turno.altura }}</p>
  <h5>Color de pelo: </h5>
  <p> {{  turno.color_pelo }}</p>
  <h5>Fecha de nacimiento:</h5>
  <p> {{  turno.fecha_nacimiento }} </p>
</section>
<section class='info-turno'>
  <h3>TURNO</h3>
  <h5>Fecha:</h5>
  <p> {{  turno.fecha_turno  }} </p>
  <h5>Horario:</h5>
  <p> {{  turno.horario_turno }} </p>
</section>
<section class=\"diagnostico\">
  <h3>Diagnostico</h3>
  {% if turno.diagnostico is not null %}
    <img src=\"{{\"/\" ~ turno.target_dir ~ turno.diagnostico }}\" alt=\"Diagnostico\">
  {% else %}
    <p>No</p>
  {% endif %}
</section>
{% endblock %}", "turno.view.html", "C:\\ProgWeb\\tp4-paw\\3\\app\\views\\turno.view.html");
    }
}
