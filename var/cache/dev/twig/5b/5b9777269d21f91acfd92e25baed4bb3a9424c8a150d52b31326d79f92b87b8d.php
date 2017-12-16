<?php

/* SyliusShopBundle:Checkout/Address:_navigation.html.twig */
class __TwigTemplate_178db590c6dbb55dc7b722d62f9142901e6536784a3d19342ffc3bea863fbda3 extends Twig_Template
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
        $__internal_658b52e9ba2ce1968f49ac125cfd4d32e131d3474af50796f13652a195c58b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658b52e9ba2ce1968f49ac125cfd4d32e131d3474af50796f13652a195c58b14->enter($__internal_658b52e9ba2ce1968f49ac125cfd4d32e131d3474af50796f13652a195c58b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_navigation.html.twig"));

        $__internal_cb722f4bbc87afe3031ded5ba4ab164f917c468819150cfaedf8c5d281015c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb722f4bbc87afe3031ded5ba4ab164f917c468819150cfaedf8c5d281015c50->enter($__internal_cb722f4bbc87afe3031ded5ba4ab164f917c468819150cfaedf8c5d281015c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_navigation.html.twig"));

        // line 1
        echo "<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.back_to_store"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled button\"><i class=\"arrow right icon\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.next"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        
        $__internal_658b52e9ba2ce1968f49ac125cfd4d32e131d3474af50796f13652a195c58b14->leave($__internal_658b52e9ba2ce1968f49ac125cfd4d32e131d3474af50796f13652a195c58b14_prof);

        
        $__internal_cb722f4bbc87afe3031ded5ba4ab164f917c468819150cfaedf8c5d281015c50->leave($__internal_cb722f4bbc87afe3031ded5ba4ab164f917c468819150cfaedf8c5d281015c50_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Address:_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.back_to_store'|trans }}</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled button\"><i class=\"arrow right icon\"></i> {{ 'sylius.ui.next'|trans }}</button>
    </div>
</div>
", "SyliusShopBundle:Checkout/Address:_navigation.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/Address/_navigation.html.twig");
    }
}
