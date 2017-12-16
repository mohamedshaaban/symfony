<?php

/* SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig */
class __TwigTemplate_b29361084741eecac9a635c514abc498c8698534c5fec433fac5f543996d551f extends Twig_Template
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
        $__internal_6a0b470de11c57fcf9699fe67ce279eae1304cffaffacb92187faddd3fe59aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0b470de11c57fcf9699fe67ce279eae1304cffaffacb92187faddd3fe59aa5->enter($__internal_6a0b470de11c57fcf9699fe67ce279eae1304cffaffacb92187faddd3fe59aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig"));

        $__internal_f3d5f4778a3444c205e07813f0589b118648babea62bab067256e89a3ce60d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d5f4778a3444c205e07813f0589b118648babea62bab067256e89a3ce60d86->enter($__internal_f3d5f4778a3444c205e07813f0589b118648babea62bab067256e89a3ce60d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_variant_generate", array("productId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), "product", array()), "id", array()))))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_variant_generate", array("productId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), "product", array()), "id", array())))));
        // line 4
        echo "
";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 5, $this->getSourceContext()); })()), "product", array()), "options", array()))) {
            // line 6
            echo "    ";
            echo $context["buttons"]->macro_default((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 6, $this->getSourceContext()); })()), "sylius.ui.generate", null, "random");
            echo "
";
        }
        
        $__internal_6a0b470de11c57fcf9699fe67ce279eae1304cffaffacb92187faddd3fe59aa5->leave($__internal_6a0b470de11c57fcf9699fe67ce279eae1304cffaffacb92187faddd3fe59aa5_prof);

        
        $__internal_f3d5f4778a3444c205e07813f0589b118648babea62bab067256e89a3ce60d86->leave($__internal_f3d5f4778a3444c205e07813f0589b118648babea62bab067256e89a3ce60d86_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}

{% set path = options.link.url|default(path('sylius_admin_product_variant_generate', {'productId': options.product.id})) %}

{% if options.product.options is not empty %}
    {{ buttons.default(path, 'sylius.ui.generate', null, 'random') }}
{% endif %}
", "SyliusAdminBundle:Product/Grid/Action:generateVariants.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Grid/Action/generateVariants.html.twig");
    }
}
