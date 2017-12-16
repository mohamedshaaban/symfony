<?php

/* SyliusUiBundle:Grid/Field:logAction.html.twig */
class __TwigTemplate_c13ac0de7929756833bd70c1191143356217ad37007925a850f7967bd0278a67 extends Twig_Template
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
        $__internal_a0430a3fbc204e8f83b71c71d7e7e60503ccf2ba33737da2ce64874d7e66ff0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0430a3fbc204e8f83b71c71d7e7e60503ccf2ba33737da2ce64874d7e66ff0f->enter($__internal_a0430a3fbc204e8f83b71c71d7e7e60503ccf2ba33737da2ce64874d7e66ff0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:logAction.html.twig"));

        $__internal_a832a40dec2bbe678709225543ceb9487d74e3c02f38bff16c77fe2db8b66529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a832a40dec2bbe678709225543ceb9487d74e3c02f38bff16c77fe2db8b66529->enter($__internal_a832a40dec2bbe678709225543ceb9487d74e3c02f38bff16c77fe2db8b66529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:logAction.html.twig"));

        // line 1
        if (((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()) == "create")) {
            // line 2
            echo "    <span class=\"ui teal label\">
        <i class=\"plus icon\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.created"), "html", null, true);
            echo "
    </span>
";
        } elseif ((        // line 6
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 6, $this->getSourceContext()); })()) == "update")) {
            // line 7
            echo "    <span class=\"ui blue label\">
        <i class=\"pencil icon\"></i>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.updated"), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_a0430a3fbc204e8f83b71c71d7e7e60503ccf2ba33737da2ce64874d7e66ff0f->leave($__internal_a0430a3fbc204e8f83b71c71d7e7e60503ccf2ba33737da2ce64874d7e66ff0f_prof);

        
        $__internal_a832a40dec2bbe678709225543ceb9487d74e3c02f38bff16c77fe2db8b66529->leave($__internal_a832a40dec2bbe678709225543ceb9487d74e3c02f38bff16c77fe2db8b66529_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:logAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data == 'create' %}
    <span class=\"ui teal label\">
        <i class=\"plus icon\"></i>
        {{ 'sylius.ui.created'|trans }}
    </span>
{% elseif data == 'update' %}
    <span class=\"ui blue label\">
        <i class=\"pencil icon\"></i>
        {{ 'sylius.ui.updated'|trans }}
    </span>
{% endif %}
", "SyliusUiBundle:Grid/Field:logAction.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/logAction.html.twig");
    }
}
