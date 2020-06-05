<?php

/* partials/nav.html */
class __TwigTemplate_bbe4a72da1951c38efd61304b56a292c1648b28f164ba0c9e609b234455e055b extends Twig_Template
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
</ul>", "partials/nav.html", "C:\\ProgWeb\\tp4-paw\\3\\app\\views\\partials\\nav.html");
    }
}
