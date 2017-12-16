<?php

/* SyliusAdminBundle:Product/Index:_breadcrumb.html.twig */
class __TwigTemplate_cbacffa3b09afc1512216c3226efcdabd15ef1190873249c6727094ca158e5fb extends Twig_Template
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
        $__internal_48aaaf18b77a7c16fe018102a6d68acdf038cb570aad9a295a34b0c7164e4365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48aaaf18b77a7c16fe018102a6d68acdf038cb570aad9a295a34b0c7164e4365->enter($__internal_48aaaf18b77a7c16fe018102a6d68acdf038cb570aad9a295a34b0c7164e4365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig"));

        $__internal_2061248e2560ca9aec660de69ae26955d2f07bcb9cf6c1abbb9ff5fb28875327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2061248e2560ca9aec660de69ae26955d2f07bcb9cf6c1abbb9ff5fb28875327->enter($__internal_2061248e2560ca9aec660de69ae26955d2f07bcb9cf6c1abbb9ff5fb28875327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (array_key_exists("taxon", $context)) {
            // line 4
            echo "    ";
            $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 7
(isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 7, $this->getSourceContext()); })()), "name", array())));
        } else {
            // line 11
            echo "    ";
            $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products")));
        }
        // line 17
        echo "
";
        // line 18
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 18, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_48aaaf18b77a7c16fe018102a6d68acdf038cb570aad9a295a34b0c7164e4365->leave($__internal_48aaaf18b77a7c16fe018102a6d68acdf038cb570aad9a295a34b0c7164e4365_prof);

        
        $__internal_2061248e2560ca9aec660de69ae26955d2f07bcb9cf6c1abbb9ff5fb28875327->leave($__internal_2061248e2560ca9aec660de69ae26955d2f07bcb9cf6c1abbb9ff5fb28875327_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 17,  37 => 11,  34 => 7,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% if taxon is defined %}
    {% set breadcrumbs = [
            { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
            { label: 'sylius.ui.products'|trans, url: path('sylius_admin_product_index') },
            { label: taxon.name },
        ]
    %}
{% else %}
    {% set breadcrumbs = [
            { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
            { label: 'sylius.ui.products'|trans },
        ]
    %}
{% endif %}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Product/Index:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Index/_breadcrumb.html.twig");
    }
}
