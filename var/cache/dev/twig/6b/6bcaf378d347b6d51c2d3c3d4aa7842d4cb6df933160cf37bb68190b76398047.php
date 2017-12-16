<?php

/* SyliusShopBundle:Product/Show:_tabs.html.twig */
class __TwigTemplate_67cf2aca50663bc0f77d8b085e75bcdf36ea824ec6e5a51c2446f6d1724a9cc0 extends Twig_Template
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
        $__internal_d00db766fdad9ecbd5a2771a2e3b790e10d5ae95795319f4a51de84bf310550f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00db766fdad9ecbd5a2771a2e3b790e10d5ae95795319f4a51de84bf310550f->enter($__internal_d00db766fdad9ecbd5a2771a2e3b790e10d5ae95795319f4a51de84bf310550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_tabs.html.twig"));

        $__internal_5f5beba166cb546e6f64c0db1ceb4156e070bfafdd9c735248d1af6acddd4881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5beba166cb546e6f64c0db1ceb4156e070bfafdd9c735248d1af6acddd4881->enter($__internal_5f5beba166cb546e6f64c0db1ceb4156e070bfafdd9c735248d1af6acddd4881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_tabs.html.twig"));

        // line 1
        echo "<div class=\"ui top attached large tabular menu\">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_menu.html.twig", "SyliusShopBundle:Product/Show:_tabs.html.twig", 2)->display($context);
        // line 3
        echo "</div>

";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_content.html.twig", "SyliusShopBundle:Product/Show:_tabs.html.twig", 5)->display($context);
        
        $__internal_d00db766fdad9ecbd5a2771a2e3b790e10d5ae95795319f4a51de84bf310550f->leave($__internal_d00db766fdad9ecbd5a2771a2e3b790e10d5ae95795319f4a51de84bf310550f_prof);

        
        $__internal_5f5beba166cb546e6f64c0db1ceb4156e070bfafdd9c735248d1af6acddd4881->leave($__internal_5f5beba166cb546e6f64c0db1ceb4156e070bfafdd9c735248d1af6acddd4881_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui top attached large tabular menu\">
    {% include '@SyliusShop/Product/Show/Tabs/_menu.html.twig' %}
</div>

{% include '@SyliusShop/Product/Show/Tabs/_content.html.twig' %}
", "SyliusShopBundle:Product/Show:_tabs.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_tabs.html.twig");
    }
}
