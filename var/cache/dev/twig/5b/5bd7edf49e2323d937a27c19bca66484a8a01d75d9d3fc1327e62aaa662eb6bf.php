<?php

/* SyliusAdminBundle:Channel/Grid/Field:code.html.twig */
class __TwigTemplate_c1d2428281371e3e50b42209f9d2401cd61a1b91108df12081023995ac8bae24 extends Twig_Template
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
        $__internal_08f5ac77d0543dd5b98c3cba9c056a1376d8048445f292e4fdf91f8aecfb8059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f5ac77d0543dd5b98c3cba9c056a1376d8048445f292e4fdf91f8aecfb8059->enter($__internal_08f5ac77d0543dd5b98c3cba9c056a1376d8048445f292e4fdf91f8aecfb8059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel/Grid/Field:code.html.twig"));

        $__internal_66d7f532206ce4ea7ba332c76b7a365aea8bb3ee820aeae6639f72c3309d67a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d7f532206ce4ea7ba332c76b7a365aea8bb3ee820aeae6639f72c3309d67a9->enter($__internal_66d7f532206ce4ea7ba332c76b7a365aea8bb3ee820aeae6639f72c3309d67a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel/Grid/Field:code.html.twig"));

        // line 1
        echo "<span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "color", array()), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "
";
        
        $__internal_08f5ac77d0543dd5b98c3cba9c056a1376d8048445f292e4fdf91f8aecfb8059->leave($__internal_08f5ac77d0543dd5b98c3cba9c056a1376d8048445f292e4fdf91f8aecfb8059_prof);

        
        $__internal_66d7f532206ce4ea7ba332c76b7a365aea8bb3ee820aeae6639f72c3309d67a9->leave($__internal_66d7f532206ce4ea7ba332c76b7a365aea8bb3ee820aeae6639f72c3309d67a9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Channel/Grid/Field:code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ data.color }}\"></span> {{ data.code }}
", "SyliusAdminBundle:Channel/Grid/Field:code.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Channel/Grid/Field/code.html.twig");
    }
}
