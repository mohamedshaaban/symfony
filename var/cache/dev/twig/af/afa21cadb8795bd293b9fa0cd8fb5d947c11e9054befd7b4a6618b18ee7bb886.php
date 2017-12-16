<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b6d4ef2cbfa08219357fa552b0d9bc9691e6f9f5444c78c2a4e81b8b15772870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53383d2180df65a2cc78e5445759b7bf05242cd0a9999ff80915569046b7fc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53383d2180df65a2cc78e5445759b7bf05242cd0a9999ff80915569046b7fc8f->enter($__internal_53383d2180df65a2cc78e5445759b7bf05242cd0a9999ff80915569046b7fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e4ac4ac9903ad26cb1e03a590f1dd445a6190a30b30bc0b8a9fcb228a3c45776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ac4ac9903ad26cb1e03a590f1dd445a6190a30b30bc0b8a9fcb228a3c45776->enter($__internal_e4ac4ac9903ad26cb1e03a590f1dd445a6190a30b30bc0b8a9fcb228a3c45776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_53383d2180df65a2cc78e5445759b7bf05242cd0a9999ff80915569046b7fc8f->leave($__internal_53383d2180df65a2cc78e5445759b7bf05242cd0a9999ff80915569046b7fc8f_prof);

        
        $__internal_e4ac4ac9903ad26cb1e03a590f1dd445a6190a30b30bc0b8a9fcb228a3c45776->leave($__internal_e4ac4ac9903ad26cb1e03a590f1dd445a6190a30b30bc0b8a9fcb228a3c45776_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
