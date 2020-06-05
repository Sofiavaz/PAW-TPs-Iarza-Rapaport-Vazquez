<?php

/* turnos.reserved.html */
class __TwigTemplate_266a11d135cb9f13b101775e53d09f316bcc2fa5851018b45c991592f486dc6d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("turno.view.html", "turnos.reserved.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "turno.view.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Reservado";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "  <h2 class=\"success\">Turno reservado con exito.</h2>
  ";
        // line 7
        $this->displayParentBlock("main", $context, $blocks);
        echo "
  <p class=\"gracias\">Gracias por atenderse con nosotros, lo esperamos.</p>
";
    }

    public function getTemplateName()
    {
        return "turnos.reserved.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"turno.view.html\" %}

{% block title %}Reservado{% endblock %}

{% block main %}
  <h2 class=\"success\">Turno reservado con exito.</h2>
  {{ parent() }}
  <p class=\"gracias\">Gracias por atenderse con nosotros, lo esperamos.</p>
{% endblock %}", "turnos.reserved.html", "C:\\ProgWeb\\tp4-paw\\3\\app\\views\\turnos.reserved.html");
    }
}
