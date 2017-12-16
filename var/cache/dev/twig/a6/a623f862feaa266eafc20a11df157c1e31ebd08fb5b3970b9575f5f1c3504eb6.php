<?php

/* SyliusUiBundle:Grid/Field:nameAndDescription.html.twig */
class __TwigTemplate_964d53642b27c4e054d95121ae76034b3a50272797a5790511563abe06ab034b extends Twig_Template
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
        $__internal_976d4a8144d383b071c524a81ac17896fa7444e5a2b8fc853545f77519cb177e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976d4a8144d383b071c524a81ac17896fa7444e5a2b8fc853545f77519cb177e->enter($__internal_976d4a8144d383b071c524a81ac17896fa7444e5a2b8fc853545f77519cb177e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:nameAndDescription.html.twig"));

        $__internal_29bd224f04c46a3c9635a52539587242d18e3fb85d90c615af684c106292c4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bd224f04c46a3c9635a52539587242d18e3fb85d90c615af684c106292c4f6->enter($__internal_29bd224f04c46a3c9635a52539587242d18e3fb85d90c615af684c106292c4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:nameAndDescription.html.twig"));

        // line 1
        echo "<strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</strong>
";
        // line 2
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()), "description", array()))) {
            // line 3
            echo "    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_976d4a8144d383b071c524a81ac17896fa7444e5a2b8fc853545f77519cb177e->leave($__internal_976d4a8144d383b071c524a81ac17896fa7444e5a2b8fc853545f77519cb177e_prof);

        
        $__internal_29bd224f04c46a3c9635a52539587242d18e3fb85d90c615af684c106292c4f6->leave($__internal_29bd224f04c46a3c9635a52539587242d18e3fb85d90c615af684c106292c4f6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:nameAndDescription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<strong>{{ data.name }}</strong>
{% if data.description is not empty %}
    <p>{{ data.description }}</p>
{% endif %}
", "SyliusUiBundle:Grid/Field:nameAndDescription.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/nameAndDescription.html.twig");
    }
}
