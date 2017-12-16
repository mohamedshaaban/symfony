<?php

/* SyliusAdminBundle:Order/Grid/Field:total.html.twig */
class __TwigTemplate_15af3daf1baaf36b492fccc13bc664b6b8742c1fb46d7e07872bbf36f45e1273 extends Twig_Template
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
        $__internal_7b4d00e290fe32d27372d56d258a7da7c3e30b397b71e33c184ebbcdc82992b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4d00e290fe32d27372d56d258a7da7c3e30b397b71e33c184ebbcdc82992b5->enter($__internal_7b4d00e290fe32d27372d56d258a7da7c3e30b397b71e33c184ebbcdc82992b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:total.html.twig"));

        $__internal_6dda453acaa9f11bb6eef6d87414af110b68e90db80c712fc3eb84228cba0fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dda453acaa9f11bb6eef6d87414af110b68e90db80c712fc3eb84228cba0fbf->enter($__internal_6dda453acaa9f11bb6eef6d87414af110b68e90db80c712fc3eb84228cba0fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:total.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Grid/Field:total.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "total", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
";
        
        $__internal_7b4d00e290fe32d27372d56d258a7da7c3e30b397b71e33c184ebbcdc82992b5->leave($__internal_7b4d00e290fe32d27372d56d258a7da7c3e30b397b71e33c184ebbcdc82992b5_prof);

        
        $__internal_6dda453acaa9f11bb6eef6d87414af110b68e90db80c712fc3eb84228cba0fbf->leave($__internal_6dda453acaa9f11bb6eef6d87414af110b68e90db80c712fc3eb84228cba0fbf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Grid/Field:total.html.twig";
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
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{{ money.format(data.total, data.currencyCode) }}
", "SyliusAdminBundle:Order/Grid/Field:total.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Grid/Field/total.html.twig");
    }
}
