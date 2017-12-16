<?php

/* SyliusShopBundle:Account/Order/Grid/Field:address.html.twig */
class __TwigTemplate_5b906dae49ed8066c85a239289cd7f74fc0a80e13a97429d5aa3e16046fa5499 extends Twig_Template
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
        $__internal_2aff5720877f955345509a70acb1dce2e1e2dc32e5ebe5a4c579f65ea152b72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aff5720877f955345509a70acb1dce2e1e2dc32e5ebe5a4c579f65ea152b72e->enter($__internal_2aff5720877f955345509a70acb1dce2e1e2dc32e5ebe5a4c579f65ea152b72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:address.html.twig"));

        $__internal_df90ad3d00aa4b3e545f4313a6adf8302a78a62685c62edf99b6c53b0107e0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df90ad3d00aa4b3e545f4313a6adf8302a78a62685c62edf99b6c53b0107e0dc->enter($__internal_df90ad3d00aa4b3e545f4313a6adf8302a78a62685c62edf99b6c53b0107e0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:address.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "
";
        
        $__internal_2aff5720877f955345509a70acb1dce2e1e2dc32e5ebe5a4c579f65ea152b72e->leave($__internal_2aff5720877f955345509a70acb1dce2e1e2dc32e5ebe5a4c579f65ea152b72e_prof);

        
        $__internal_df90ad3d00aa4b3e545f4313a6adf8302a78a62685c62edf99b6c53b0107e0dc->leave($__internal_df90ad3d00aa4b3e545f4313a6adf8302a78a62685c62edf99b6c53b0107e0dc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Grid/Field:address.html.twig";
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
        return new Twig_Source("{{ data.firstName }} {{ data.lastName }}
", "SyliusShopBundle:Account/Order/Grid/Field:address.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Grid/Field/address.html.twig");
    }
}
