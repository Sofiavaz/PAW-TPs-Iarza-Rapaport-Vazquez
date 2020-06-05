<?php

/* base.html */
class __TwigTemplate_db8238d1d2cee88693f19bfb69ec087f3e08fdaad64b925e5a59cb4ccc8f4bf4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "</head>
<body>
    <header>";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "    </header>
    <main>";
        // line 23
        $this->displayBlock('main', $context, $blocks);
        echo "</main>
    <footer>";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "    </footer>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"../../public/css/style.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Quicksand\" rel=\"stylesheet\"> 
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        // line 16
        echo "        <nav>";
        // line 17
        $this->displayBlock('nav', $context, $blocks);
        // line 20
        echo "        </nav>";
    }

    // line 17
    public function block_nav($context, array $blocks = array())
    {
        // line 18
        echo twig_include($this->env, $context, "partials/nav.html");
    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "            <h4 class=\"footer-h4\">Desarrollado por:</h4>
            <a href=\"mailto:juancreal1@gmail.com\"><p class=\"footer-p\">Juan Cruz Real</p></a>
            <a href=\"mailto:victorioskfati@gmail.com\"><p class=\"footer-p\">Victorio Scafati</p></a>";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  98 => 25,  93 => 23,  89 => 18,  86 => 17,  82 => 20,  80 => 17,  78 => 16,  75 => 15,  66 => 10,  59 => 5,  56 => 4,  50 => 30,  48 => 25,  44 => 23,  41 => 22,  39 => 15,  35 => 12,  33 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    {% block head %}
        <meta charset=\"utf-8\">
        <meta name=\"keywords\" content=\"PAW,2018,Templates,PHP\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"../../public/css/style.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Quicksand\" rel=\"stylesheet\"> 
        <title>{% block title %}{% endblock %}</title>
    {% endblock %}
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
        {% block footer %}
            <h4 class=\"footer-h4\">Desarrollado por:</h4>
            <a href=\"mailto:juancreal1@gmail.com\"><p class=\"footer-p\">Juan Cruz Real</p></a>
            <a href=\"mailto:victorioskfati@gmail.com\"><p class=\"footer-p\">Victorio Scafati</p></a>
        {% endblock %}
    </footer>
</body>
</html>", "base.html", "C:\\xampp\\htdocs\\3\\3\\app\\views\\base.html");
    }
}
