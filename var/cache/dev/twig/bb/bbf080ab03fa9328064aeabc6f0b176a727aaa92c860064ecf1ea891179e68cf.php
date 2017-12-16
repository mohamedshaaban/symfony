<?php

/* @SyliusAdmin/Crud/Index/_breadcrumb.html.twig */
class __TwigTemplate_837cd3742134d8d262c446f3ddddd98930a743ec35d73e907b5090475a01736d extends Twig_Template
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
        $__internal_709ea2999d88788bf0a8be6cfbffc50e07184f94cbbc2c23e570474e1e335e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709ea2999d88788bf0a8be6cfbffc50e07184f94cbbc2c23e570474e1e335e65->enter($__internal_709ea2999d88788bf0a8be6cfbffc50e07184f94cbbc2c23e570474e1e335e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig"));

        $__internal_1e5ee92aad719ff5d58957575ec7f5eaa1270b2284e5234a79ced62cdaad3b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5ee92aad719ff5d58957575ec7f5eaa1270b2284e5234a79ced62cdaad3b4d->enter($__internal_1e5ee92aad719ff5d58957575ec7f5eaa1270b2284e5234a79ced62cdaad3b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 5, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 5, $this->getSourceContext()); })()), "pluralName", array())))));
        // line 8
        echo "
";
        // line 9
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 9, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_709ea2999d88788bf0a8be6cfbffc50e07184f94cbbc2c23e570474e1e335e65->leave($__internal_709ea2999d88788bf0a8be6cfbffc50e07184f94cbbc2c23e570474e1e335e65_prof);

        
        $__internal_1e5ee92aad719ff5d58957575ec7f5eaa1270b2284e5234a79ced62cdaad3b4d->leave($__internal_1e5ee92aad719ff5d58957575ec7f5eaa1270b2284e5234a79ced62cdaad3b4d_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  33 => 8,  31 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: (metadata.applicationName~'.ui.'~metadata.pluralName)|trans },
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "@SyliusAdmin/Crud/Index/_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Index\\_breadcrumb.html.twig");
    }
}
