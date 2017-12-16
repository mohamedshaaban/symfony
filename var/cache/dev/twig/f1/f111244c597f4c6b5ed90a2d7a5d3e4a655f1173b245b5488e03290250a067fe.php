<?php

/* SyliusResourceBundle:Twig:sorting.html.twig */
class __TwigTemplate_f74481516b2642eee22efa05f325304880c3c39618139bc3dfe2a08709f0c926 extends Twig_Template
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
        $__internal_bc4853103f51c889880c5a2653334c29c1f1a60beda7e9a1f8360accff794f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4853103f51c889880c5a2653334c29c1f1a60beda7e9a1f8360accff794f89->enter($__internal_bc4853103f51c889880c5a2653334c29c1f1a60beda7e9a1f8360accff794f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:sorting.html.twig"));

        $__internal_07c98fc51118fbc7bc77aaf6657cd922ab49d6784d683bc753860157301f97d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c98fc51118fbc7bc77aaf6657cd922ab49d6784d683bc753860157301f97d7->enter($__internal_07c98fc51118fbc7bc77aaf6657cd922ab49d6784d683bc753860157301f97d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:sorting.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
    ";
        // line 3
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            if (((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new Twig_Error_Runtime('Variable "currentOrder" does not exist.', 4, $this->getSourceContext()); })()) == "desc")) {
                // line 5
                echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
            } else {
                // line 7
                echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
            }
        }
        // line 10
        echo "</a>
";
        
        $__internal_bc4853103f51c889880c5a2653334c29c1f1a60beda7e9a1f8360accff794f89->leave($__internal_bc4853103f51c889880c5a2653334c29c1f1a60beda7e9a1f8360accff794f89_prof);

        
        $__internal_07c98fc51118fbc7bc77aaf6657cd922ab49d6784d683bc753860157301f97d7->leave($__internal_07c98fc51118fbc7bc77aaf6657cd922ab49d6784d683bc753860157301f97d7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  41 => 7,  38 => 5,  36 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ url }}\">
    {{ label }}
    {% if icon -%}
        {%- if currentOrder == 'desc' -%}
            <i class=\"glyphicon glyphicon-chevron-down\"></i>
        {%- else -%}
            <i class=\"glyphicon glyphicon-chevron-up\"></i>
        {%- endif %}
    {%- endif %}
</a>
", "SyliusResourceBundle:Twig:sorting.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/views/Twig/sorting.html.twig");
    }
}
