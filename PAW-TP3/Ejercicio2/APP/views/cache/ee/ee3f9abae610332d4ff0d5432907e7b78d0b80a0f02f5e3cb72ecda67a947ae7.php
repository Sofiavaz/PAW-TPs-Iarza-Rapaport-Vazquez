<?php

/* partials/nav.html */
class __TwigTemplate_6fa54c3fd000a7844049f4b6155fe5b3147f5281f09cbb9b6134d2f9747fb6c1 extends Twig_Template
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
  <li><a href=\"/turno/create\">Sacar Turno</a></li>
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
  <li><a href=\"/turno/create\">Sacar Turno</a></li>
  <li><a href=\"/turno/view/all\">Ver Turnos</a></li>
</ul>", "partials/nav.html", "C:\\Users\\maria\\Documents\\4-1\\paw\\PAW-TPs-Iarza-Rapaport-Vazquez\\PAW-TP3\\Ejercicio2\\APP\\views\\partials\\nav.html");
    }
}
