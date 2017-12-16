<?php

/* @SyliusAdmin/Crud/Index/_headerTitle.html.twig */
class __TwigTemplate_39582a3d81a77b85d5a6b2ff6f082da8f4b6a20282ced8345599b13c23ff5869 extends Twig_Template
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
        $__internal_13edf900a57277e51e8fdf1f3442cb861c18a9ad6fbf0525835a37cb6590db32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13edf900a57277e51e8fdf1f3442cb861c18a9ad6fbf0525835a37cb6590db32->enter($__internal_13edf900a57277e51e8fdf1f3442cb861c18a9ad6fbf0525835a37cb6590db32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_headerTitle.html.twig"));

        $__internal_b98acd28f87df06889c2830568baff6f8b93bf8d3aa22f74a95092d978cb4158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98acd28f87df06889c2830568baff6f8b93bf8d3aa22f74a95092d978cb4158->enter($__internal_b98acd28f87df06889c2830568baff6f8b93bf8d3aa22f74a95092d978cb4158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_headerTitle.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "@SyliusAdmin/Crud/Index/_headerTitle.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })())), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "list")) : ("list")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null))));
        echo "
";
        
        $__internal_13edf900a57277e51e8fdf1f3442cb861c18a9ad6fbf0525835a37cb6590db32->leave($__internal_13edf900a57277e51e8fdf1f3442cb861c18a9ad6fbf0525835a37cb6590db32_prof);

        
        $__internal_b98acd28f87df06889c2830568baff6f8b93bf8d3aa22f74a95092d978cb4158->leave($__internal_b98acd28f87df06889c2830568baff6f8b93bf8d3aa22f74a95092d978cb4158_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Index/_headerTitle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/headers.html.twig' as headers %}

{{ headers.default(header|trans, configuration.vars.icon|default('list'), configuration.vars.subheader|default(null)|trans) }}
", "@SyliusAdmin/Crud/Index/_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Index\\_headerTitle.html.twig");
    }
}
