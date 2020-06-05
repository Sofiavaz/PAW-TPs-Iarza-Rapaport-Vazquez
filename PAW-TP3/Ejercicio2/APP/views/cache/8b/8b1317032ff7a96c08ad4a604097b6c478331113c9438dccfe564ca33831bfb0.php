<?php

/* partials/nav.html */
class __TwigTemplate_80fb864dae849f42ac98897774734cfc09429fcf003ed1599aa02ee40a7b8fcc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul>
  <li><a href=\"/turno/create\">Registrar Formulario</a></li>
  <li><a href=\"/turno/view/all\">Ver Turnos</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "partials/nav.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
  <li><a href=\"/turno/create\">Registrar Formulario</a></li>
  <li><a href=\"/turno/view/all\">Ver Turnos</a></li>
</ul>", "partials/nav.html", "C:\\xampp\\htdocs\\3\\3\\app\\views\\partials\\nav.html");
    }
}
