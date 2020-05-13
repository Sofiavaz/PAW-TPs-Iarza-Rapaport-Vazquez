<?php

/* turno.table.html */
class __TwigTemplate_0bd25b8893e122e69b9e2ccf922836766e38f3b5d7387e5f08fc89a9a9782f53 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html", "turno.table.html", 1);
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
        echo "Turnos";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "  <h1>Tabla de Turnos</h1>";
        // line 7
        if ((twig_length_filter($this->env, ($context["turnos"] ?? null)) > 0)) {
            // line 8
            echo "    <table>
      <thead>
        <th>Id</th>
        <th>Fecha Turno</th>
        <th>Hora Turno </th>
        <th>Paciente</th>
        <th>Teléfono</th>
        <th>E-mail</th>
        <th>Ficha</th>
      </thead>
      <tbody>";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["turnos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["turno"]) {
                // line 20
                echo "        <tr>
          <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "fecha_turno", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "horario_turno", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "nombre", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "telefono", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "email", array()), "html", null, true);
                echo "</td>
          <td><a href=\"/turno/get/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["turno"], "id", array()), "html", null, true);
                echo "\">Ficha </a></td>
        </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['turno'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      </tbody>
    </table>";
        } else {
            // line 33
            echo "    <span>No hay turnos registrados.</span>";
        }
    }

    public function getTemplateName()
    {
        return "turno.table.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  97 => 30,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  62 => 20,  58 => 19,  46 => 8,  44 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html\" %}

{% block title %}Turnos{% endblock %}

{% block main %}
  <h1>Tabla de Turnos</h1>
  {% if turnos|length > 0 %}
    <table>
      <thead>
        <th>Id</th>
        <th>Fecha Turno</th>
        <th>Hora Turno </th>
        <th>Paciente</th>
        <th>Teléfono</th>
        <th>E-mail</th>
        <th>Ficha</th>
      </thead>
      <tbody>
        {% for turno in turnos %}
        <tr>
          <td> {{ turno.id }}</td>
          <td> {{ turno.fecha_turno }}</td>
          <td> {{ turno.horario_turno }}</td>
          <td> {{ turno.nombre }}</td>
          <td> {{ turno.telefono }}</td>
          <td> {{ turno.email }}</td>
          <td><a href=\"/turno/get/{{turno.id}}\">Ficha </a></td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  {% else %}
    <span>No hay turnos registrados.</span>
  {% endif %}
{% endblock %}", "turno.table.html", "C:\\Users\\maria\\Documents\\4-1\\paw\\PAW-TPs-Iarza-Rapaport-Vazquez\\PAW-TP3\\Ejercicio1\\APP\\views\\turno.table.html");
    }
}
