<?php

/* @SyliusUi/Grid/Field/enabled.html.twig */
class __TwigTemplate_a9c44f0311f86dfe63bb84a7b4159b92c4cec0c5d4c6492c3c8184c5921daaf3 extends Twig_Template
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
        $__internal_fa6964c8489c6d6caa5097e09933834adf8dfc64a6976e31c53e1c08fe822a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6964c8489c6d6caa5097e09933834adf8dfc64a6976e31c53e1c08fe822a96->enter($__internal_fa6964c8489c6d6caa5097e09933834adf8dfc64a6976e31c53e1c08fe822a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Field/enabled.html.twig"));

        $__internal_232ad567c2978193e91553df0a5ea3b3f6eda96cbd1fe7b6b2a250ad212edaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232ad567c2978193e91553df0a5ea3b3f6eda96cbd1fe7b6b2a250ad212edaf2->enter($__internal_232ad567c2978193e91553df0a5ea3b3f6eda96cbd1fe7b6b2a250ad212edaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Field/enabled.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusUi/Grid/Field/enabled.html.twig", 1);
        // line 2
        echo $context["label"]->macro_status((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_fa6964c8489c6d6caa5097e09933834adf8dfc64a6976e31c53e1c08fe822a96->leave($__internal_fa6964c8489c6d6caa5097e09933834adf8dfc64a6976e31c53e1c08fe822a96_prof);

        
        $__internal_232ad567c2978193e91553df0a5ea3b3f6eda96cbd1fe7b6b2a250ad212edaf2->leave($__internal_232ad567c2978193e91553df0a5ea3b3f6eda96cbd1fe7b6b2a250ad212edaf2_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Field/enabled.html.twig";
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
{{ label.status(data) }}
", "@SyliusUi/Grid/Field/enabled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\Field\\enabled.html.twig");
    }
}
