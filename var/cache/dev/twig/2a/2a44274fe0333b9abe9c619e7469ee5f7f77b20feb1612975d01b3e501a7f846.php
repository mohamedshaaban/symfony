<?php

/* SyliusShopBundle:Product/Show/Tabs:_content.html.twig */
class __TwigTemplate_098c67e81aa7a606f34e9b8c54015a01ac18d47bcaf61b9067a61126d309502d extends Twig_Template
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
        $__internal_1c668364ebd5157298faa283d95b4200a856c5b3900cc0def1b7900c1c808a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c668364ebd5157298faa283d95b4200a856c5b3900cc0def1b7900c1c808a99->enter($__internal_1c668364ebd5157298faa283d95b4200a856c5b3900cc0def1b7900c1c808a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig"));

        $__internal_68babf5c5629ec8eaf532dd8bfe79cc0ca76ce4bf7dccdb97cc0dfdad9a2ee00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68babf5c5629ec8eaf532dd8bfe79cc0ca76ce4bf7dccdb97cc0dfdad9a2ee00->enter($__internal_68babf5c5629ec8eaf532dd8bfe79cc0ca76ce4bf7dccdb97cc0dfdad9a2ee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_details.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_attributes.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_reviews.html.twig", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", 3)->display($context);
        
        $__internal_1c668364ebd5157298faa283d95b4200a856c5b3900cc0def1b7900c1c808a99->leave($__internal_1c668364ebd5157298faa283d95b4200a856c5b3900cc0def1b7900c1c808a99_prof);

        
        $__internal_68babf5c5629ec8eaf532dd8bfe79cc0ca76ce4bf7dccdb97cc0dfdad9a2ee00->leave($__internal_68babf5c5629ec8eaf532dd8bfe79cc0ca76ce4bf7dccdb97cc0dfdad9a2ee00_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_content.html.twig";
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
", "SyliusShopBundle:Product/Show/Tabs:_content.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/Tabs/_content.html.twig");
    }
}
