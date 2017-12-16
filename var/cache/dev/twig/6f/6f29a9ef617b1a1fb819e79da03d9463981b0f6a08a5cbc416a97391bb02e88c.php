<?php

/* SyliusShopBundle:Common/Order:_summary.html.twig */
class __TwigTemplate_e3ae7a692d223ee008976fa34573d4e1ec7df0166f7f8d15bf84a593d84cad6b extends Twig_Template
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
        $__internal_68a1a5bdb2c8f0d1537f6c94f4d4d1b7dca45929602af5717781cd6944bf0e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a1a5bdb2c8f0d1537f6c94f4d4d1b7dca45929602af5717781cd6944bf0e95->enter($__internal_68a1a5bdb2c8f0d1537f6c94f4d4d1b7dca45929602af5717781cd6944bf0e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_summary.html.twig"));

        $__internal_04c3b587ce73c9e90a2df3d9b358cfcf4e75fae3437845a65a6163b20e77c912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c3b587ce73c9e90a2df3d9b358cfcf4e75fae3437845a65a6163b20e77c912->enter($__internal_04c3b587ce73c9e90a2df3d9b358cfcf4e75fae3437845a65a6163b20e77c912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_summary.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Common/Order/_addresses.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Common/Order/_table.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/_payments.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/_shipments.html.twig", "SyliusShopBundle:Common/Order:_summary.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
</div>
";
        
        $__internal_68a1a5bdb2c8f0d1537f6c94f4d4d1b7dca45929602af5717781cd6944bf0e95->leave($__internal_68a1a5bdb2c8f0d1537f6c94f4d4d1b7dca45929602af5717781cd6944bf0e95_prof);

        
        $__internal_04c3b587ce73c9e90a2df3d9b358cfcf4e75fae3437845a65a6163b20e77c912->leave($__internal_04c3b587ce73c9e90a2df3d9b358cfcf4e75fae3437845a65a6163b20e77c912_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  40 => 9,  36 => 7,  34 => 6,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/Common/Order/_addresses.html.twig' %}
{% include '@SyliusShop/Common/Order/_table.html.twig' %}

<div class=\"ui two column stackable grid\">
    <div class=\"column\" id=\"sylius-payments\">
        {% include '@SyliusShop/Common/Order/_payments.html.twig' %}
    </div>
    <div class=\"column\" id=\"sylius-shipments\">
        {% include '@SyliusShop/Common/Order/_shipments.html.twig' %}
    </div>
</div>
", "SyliusShopBundle:Common/Order:_summary.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/_summary.html.twig");
    }
}
