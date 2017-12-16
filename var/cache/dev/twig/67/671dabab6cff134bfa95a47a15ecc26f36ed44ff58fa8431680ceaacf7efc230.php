<?php

/* SyliusAdminBundle:Product/Index:_taxonHeader.html.twig */
class __TwigTemplate_325398223b141b8abd7bdadc8072e4a444cc067328596292403e14322408e56f extends Twig_Template
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
        $__internal_5d36fc9befa3376ea7d68b52467428c1f12eff819648a94e849f8c396dbfea42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d36fc9befa3376ea7d68b52467428c1f12eff819648a94e849f8c396dbfea42->enter($__internal_5d36fc9befa3376ea7d68b52467428c1f12eff819648a94e849f8c396dbfea42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig"));

        $__internal_a1c7e9181e48bef678d41eac46a67ea9c406e2052bcdc33f89dc77d7c4ba094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c7e9181e48bef678d41eac46a67ea9c406e2052bcdc33f89dc77d7c4ba094d->enter($__internal_a1c7e9181e48bef678d41eac46a67ea9c406e2052bcdc33f89dc77d7c4ba094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig", 1);
        // line 2
        echo "
<div class=\"column\">
    ";
        // line 4
        echo $context["headers"]->macro_default(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cube")) : ("cube")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.manage_your_product_catalog")) : ("sylius.ui.manage_your_product_catalog"))));
        echo "

    ";
        // line 6
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Product/Index/_breadcrumb.html.twig")) : ("@SyliusAdmin/Product/Index/_breadcrumb.html.twig")), "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig", 6)->display($context);
        // line 7
        echo "</div>
";
        
        $__internal_5d36fc9befa3376ea7d68b52467428c1f12eff819648a94e849f8c396dbfea42->leave($__internal_5d36fc9befa3376ea7d68b52467428c1f12eff819648a94e849f8c396dbfea42_prof);

        
        $__internal_a1c7e9181e48bef678d41eac46a67ea9c406e2052bcdc33f89dc77d7c4ba094d->leave($__internal_a1c7e9181e48bef678d41eac46a67ea9c406e2052bcdc33f89dc77d7c4ba094d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

<div class=\"column\">
    {{ headers.default(taxon.name, configuration.vars.icon|default('cube'), configuration.vars.subheader|default('sylius.ui.manage_your_product_catalog')|trans) }}

    {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Product/Index/_breadcrumb.html.twig') %}
</div>
", "SyliusAdminBundle:Product/Index:_taxonHeader.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Index/_taxonHeader.html.twig");
    }
}
