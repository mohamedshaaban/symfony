<?php

/* @SyliusShop/Product/Show/Tabs/_content.html.twig */
class __TwigTemplate_e13d50040437df0048133385f5d1aa0edb9aa0e6b396a8289b68a01378a07c45 extends Twig_Template
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
        $__internal_c8589d7de233fc6aa0f26e0cdcee378d673f38531c69c4f46fd93ce2cc98a8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8589d7de233fc6aa0f26e0cdcee378d673f38531c69c4f46fd93ce2cc98a8fb->enter($__internal_c8589d7de233fc6aa0f26e0cdcee378d673f38531c69c4f46fd93ce2cc98a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_content.html.twig"));

        $__internal_bc34adc3aacb97eecd7ae83ea48c69a7cdb3cc7f6ff07a6178672b70a4a20ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc34adc3aacb97eecd7ae83ea48c69a7cdb3cc7f6ff07a6178672b70a4a20ee9->enter($__internal_bc34adc3aacb97eecd7ae83ea48c69a7cdb3cc7f6ff07a6178672b70a4a20ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_content.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_details.html.twig", "@SyliusShop/Product/Show/Tabs/_content.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_attributes.html.twig", "@SyliusShop/Product/Show/Tabs/_content.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "@SyliusShop/Product/Show/Tabs/_content.html.twig", 3)->display($context);
        
        $__internal_c8589d7de233fc6aa0f26e0cdcee378d673f38531c69c4f46fd93ce2cc98a8fb->leave($__internal_c8589d7de233fc6aa0f26e0cdcee378d673f38531c69c4f46fd93ce2cc98a8fb_prof);

        
        $__internal_bc34adc3aacb97eecd7ae83ea48c69a7cdb3cc7f6ff07a6178672b70a4a20ee9->leave($__internal_bc34adc3aacb97eecd7ae83ea48c69a7cdb3cc7f6ff07a6178672b70a4a20ee9_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/Product/Show/Tabs/_details.html.twig' %}
{% include '@SyliusShop/Product/Show/Tabs/_attributes.html.twig' %}
{% include '@SyliusShop/Product/Show/Tabs/_reviews.html.twig' %}
", "@SyliusShop/Product/Show/Tabs/_content.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\Tabs\\_content.html.twig");
    }
}
