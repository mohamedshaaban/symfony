<?php

/* SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig */
class __TwigTemplate_2556c92d5fffe824f4ebf4d28ee0103ae997bd132b283a2f05910fb2ac38223f extends Twig_Template
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
        $__internal_6599da1bb026ed33f1c125701c6d5a05d0395d7c53571c584b822836d6a92a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6599da1bb026ed33f1c125701c6d5a05d0395d7c53571c584b822836d6a92a2a->enter($__internal_6599da1bb026ed33f1c125701c6d5a05d0395d7c53571c584b822836d6a92a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig"));

        $__internal_d5904b37998f4ed8a52770de744090c3f9f940548bff342e9fc6e111e187457d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5904b37998f4ed8a52770de744090c3f9f940548bff342e9fc6e111e187457d->enter($__internal_d5904b37998f4ed8a52770de744090c3f9f940548bff342e9fc6e111e187457d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "sourceCurrency", array()), "name", array()), "html", null, true);
        echo "
";
        
        $__internal_6599da1bb026ed33f1c125701c6d5a05d0395d7c53571c584b822836d6a92a2a->leave($__internal_6599da1bb026ed33f1c125701c6d5a05d0395d7c53571c584b822836d6a92a2a_prof);

        
        $__internal_d5904b37998f4ed8a52770de744090c3f9f940548bff342e9fc6e111e187457d->leave($__internal_d5904b37998f4ed8a52770de744090c3f9f940548bff342e9fc6e111e187457d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig";
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
        return new Twig_Source("{{ data.sourceCurrency.name }}
", "SyliusAdminBundle:ExchangeRate/Grid/Field:sourceCurrencyName.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ExchangeRate/Grid/Field/sourceCurrencyName.html.twig");
    }
}
