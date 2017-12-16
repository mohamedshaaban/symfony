<?php

/* @SyliusUi/Label/_default.html.twig */
class __TwigTemplate_ffd15d998a4d2b1464349beeb3e4b4f1d832dcc87d4127c3566c41c2aada9225 extends Twig_Template
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
        $__internal_bf897c2346f59695218e56de022cb8b46f46b06552b3fe3c5e4c76de5f4b60cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf897c2346f59695218e56de022cb8b46f46b06552b3fe3c5e4c76de5f4b60cd->enter($__internal_bf897c2346f59695218e56de022cb8b46f46b06552b3fe3c5e4c76de5f4b60cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Label/_default.html.twig"));

        $__internal_b9ce441b0322d70b35b76ec42c81701ef5d75a1d740387a909739d287fe62c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ce441b0322d70b35b76ec42c81701ef5d75a1d740387a909739d287fe62c1f->enter($__internal_b9ce441b0322d70b35b76ec42c81701ef5d75a1d740387a909739d287fe62c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Label/_default.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusUi/Label/_default.html.twig", 1);
        // line 2
        echo $context["label"]->macro_default((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_bf897c2346f59695218e56de022cb8b46f46b06552b3fe3c5e4c76de5f4b60cd->leave($__internal_bf897c2346f59695218e56de022cb8b46f46b06552b3fe3c5e4c76de5f4b60cd_prof);

        
        $__internal_b9ce441b0322d70b35b76ec42c81701ef5d75a1d740387a909739d287fe62c1f->leave($__internal_b9ce441b0322d70b35b76ec42c81701ef5d75a1d740387a909739d287fe62c1f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Label/_default.html.twig";
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
", "@SyliusUi/Label/_default.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Label\\_default.html.twig");
    }
}
