<?php

/* @SyliusAdmin/Crud/Create/_breadcrumb.html.twig */
class __TwigTemplate_2b2a6bfb7e594c81ce2e296026de91a95c41281378c4837fe8c21eb255b89082 extends Twig_Template
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
        $__internal_09416291c8cd19cb1befcfb0efba05f5a22d528123fff3d0b9feeff7f8a8217c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09416291c8cd19cb1befcfb0efba05f5a22d528123fff3d0b9feeff7f8a8217c->enter($__internal_09416291c8cd19cb1befcfb0efba05f5a22d528123fff3d0b9feeff7f8a8217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Create/_breadcrumb.html.twig"));

        $__internal_994e04e3a7150e54f018275e51b07d1ba869481ab68f0eaa9ec79803adf75ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994e04e3a7150e54f018275e51b07d1ba869481ab68f0eaa9ec79803adf75ef7->enter($__internal_994e04e3a7150e54f018275e51b07d1ba869481ab68f0eaa9ec79803adf75ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Create/_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "@SyliusAdmin/Crud/Create/_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 5, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 5, $this->getSourceContext()); })()), "pluralName", array()))), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 5, $this->getSourceContext()); })()), "getRouteName", array(0 => "index"), "method"), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))), 2 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new")));
        // line 9
        echo "
";
        // line 10
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 10, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_09416291c8cd19cb1befcfb0efba05f5a22d528123fff3d0b9feeff7f8a8217c->leave($__internal_09416291c8cd19cb1befcfb0efba05f5a22d528123fff3d0b9feeff7f8a8217c_prof);

        
        $__internal_994e04e3a7150e54f018275e51b07d1ba869481ab68f0eaa9ec79803adf75ef7->leave($__internal_994e04e3a7150e54f018275e51b07d1ba869481ab68f0eaa9ec79803adf75ef7_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Create/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  33 => 9,  31 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: (metadata.applicationName~'.ui.'~metadata.pluralName)|trans, url: path(configuration.getRouteName('index'), configuration.vars.route.parameters|default({})) },
        { label: 'sylius.ui.new'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "@SyliusAdmin/Crud/Create/_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Create\\_breadcrumb.html.twig");
    }
}
