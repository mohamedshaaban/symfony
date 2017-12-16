<?php

/* SyliusAttributeBundle:Types:checkbox.html.twig */
class __TwigTemplate_c4bbf2d04a65424bbda1316a4c05a934be800e0e6bdc8471b4fa4165f1b573a7 extends Twig_Template
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
        $__internal_0996cc800c2a4fd6ea5490b17eb89f7d2cec878f9d9d3b948116117cd8dbcc00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0996cc800c2a4fd6ea5490b17eb89f7d2cec878f9d9d3b948116117cd8dbcc00->enter($__internal_0996cc800c2a4fd6ea5490b17eb89f7d2cec878f9d9d3b948116117cd8dbcc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:checkbox.html.twig"));

        $__internal_ecfbfd1b570945d4391fb16ea55e0809ce5d8138dbe46f1d673da7dfdbb93a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfbfd1b570945d4391fb16ea55e0809ce5d8138dbe46f1d673da7dfdbb93a17->enter($__internal_ecfbfd1b570945d4391fb16ea55e0809ce5d8138dbe46f1d673da7dfdbb93a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:checkbox.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 1, $this->getSourceContext()); })()), "value", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.yes_label"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_label"), "html", null, true);
            echo "
";
        }
        
        $__internal_0996cc800c2a4fd6ea5490b17eb89f7d2cec878f9d9d3b948116117cd8dbcc00->leave($__internal_0996cc800c2a4fd6ea5490b17eb89f7d2cec878f9d9d3b948116117cd8dbcc00_prof);

        
        $__internal_ecfbfd1b570945d4391fb16ea55e0809ce5d8138dbe46f1d673da7dfdbb93a17->leave($__internal_ecfbfd1b570945d4391fb16ea55e0809ce5d8138dbe46f1d673da7dfdbb93a17_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if attribute.value %}
    {{ 'sylius.ui.yes_label'|trans }}
{% else %}
    {{ 'sylius.ui.no_label'|trans }}
{% endif %}
", "SyliusAttributeBundle:Types:checkbox.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle\\Resources\\views\\Types\\checkbox.html.twig");
    }
}
