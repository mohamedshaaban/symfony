<?php

/* SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig */
class __TwigTemplate_9e49cb99b9ca4f3876cae1942155f1849a6979a4b02b0a9a8596bc78b0841ad7 extends Twig_Template
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
        $__internal_0a77e9fd75fb5bd56cfd4294d288b6015d887a58b2e9429a7c25714a9dcda235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a77e9fd75fb5bd56cfd4294d288b6015d887a58b2e9429a7c25714a9dcda235->enter($__internal_0a77e9fd75fb5bd56cfd4294d288b6015d887a58b2e9429a7c25714a9dcda235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig"));

        $__internal_42cb40a24e861f839bc2e924396ee59cdd63d665501005892c766b8d235c211a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cb40a24e861f839bc2e924396ee59cdd63d665501005892c766b8d235c211a->enter($__internal_42cb40a24e861f839bc2e924396ee59cdd63d665501005892c766b8d235c211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig", 1);
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
        
        $__internal_0a77e9fd75fb5bd56cfd4294d288b6015d887a58b2e9429a7c25714a9dcda235->leave($__internal_0a77e9fd75fb5bd56cfd4294d288b6015d887a58b2e9429a7c25714a9dcda235_prof);

        
        $__internal_42cb40a24e861f839bc2e924396ee59cdd63d665501005892c766b8d235c211a->leave($__internal_42cb40a24e861f839bc2e924396ee59cdd63d665501005892c766b8d235c211a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig";
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
", "SyliusAdminBundle:Crud/Index:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Index/_breadcrumb.html.twig");
    }
}
