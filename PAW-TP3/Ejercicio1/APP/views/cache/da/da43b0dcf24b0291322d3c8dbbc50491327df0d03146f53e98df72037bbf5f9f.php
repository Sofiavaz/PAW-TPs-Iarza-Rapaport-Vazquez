<?php

/* base.html */
class __TwigTemplate_482ae55752bbeb72d826b2775a911d583ffc09a84c353225a4402fc796fc65eb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Sistema de turnos</title> 
</head>
<body>
    <header>";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "    </header>
    <main>";
        // line 16
        $this->displayBlock('main', $context, $blocks);
        echo "</main>
    <footer>
    </footer>
</body>
</html>";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "        <nav>";
        // line 10
        $this->displayBlock('nav', $context, $blocks);
        // line 13
        echo "        </nav>";
    }

    // line 10
    public function block_nav($context, array $blocks = array())
    {
        // line 11
        echo twig_include($this->env, $context, "partials/nav.html");
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  62 => 11,  59 => 10,  55 => 13,  53 => 10,  51 => 9,  48 => 8,  39 => 16,  36 => 15,  34 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Sistema de turnos</title> 
</head>
<body>
    <header>
        {% block header %}
        <nav>
            {% block nav %}
                {{ include('partials/nav.html') }}
            {% endblock %}
        </nav>
        {% endblock %}
    </header>
    <main>{% block main %}{% endblock %}</main>
    <footer>
    </footer>
</body>
</html>", "base.html", "C:\\xampp\\htdocs\\3\\3\\APP\\views\\base.html");
    }
}
