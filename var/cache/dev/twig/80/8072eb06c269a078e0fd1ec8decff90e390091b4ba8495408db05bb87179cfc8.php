<?php

/* SyliusUiBundle:Label:_default.html.twig */
class __TwigTemplate_3d2feaa2637094e03f0012cc29faa8206b5137df0b675e7cbc223a2f9e613837 extends Twig_Template
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
        $__internal_a845cf7a773d355d18d1f9c6f5a55efca22ccef616e9130f1b7775739b38e357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a845cf7a773d355d18d1f9c6f5a55efca22ccef616e9130f1b7775739b38e357->enter($__internal_a845cf7a773d355d18d1f9c6f5a55efca22ccef616e9130f1b7775739b38e357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Label:_default.html.twig"));

        $__internal_1540e01b733d83ec6c92ff18629f8ae90ded75f02a5ff8320ba370c1176425bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1540e01b733d83ec6c92ff18629f8ae90ded75f02a5ff8320ba370c1176425bd->enter($__internal_1540e01b733d83ec6c92ff18629f8ae90ded75f02a5ff8320ba370c1176425bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Label:_default.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusUiBundle:Label:_default.html.twig", 1);
        // line 2
        echo $context["label"]->macro_default((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_a845cf7a773d355d18d1f9c6f5a55efca22ccef616e9130f1b7775739b38e357->leave($__internal_a845cf7a773d355d18d1f9c6f5a55efca22ccef616e9130f1b7775739b38e357_prof);

        
        $__internal_1540e01b733d83ec6c92ff18629f8ae90ded75f02a5ff8320ba370c1176425bd->leave($__internal_1540e01b733d83ec6c92ff18629f8ae90ded75f02a5ff8320ba370c1176425bd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Label:_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}
{{ label.default(value) }}
", "SyliusUiBundle:Label:_default.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Label/_default.html.twig");
    }
}
