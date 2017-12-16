<?php

/* SyliusShopBundle:Cart/Summary:_update.html.twig */
class __TwigTemplate_daad6b900a6143569d2ed01bc6a4b8fc94faabd5a045ccc7e0adfa4ff979400a extends Twig_Template
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
        $__internal_201682e4fa9b05b58e19d70302a1b9427d5d8a43d9920fc327854d435e5af190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201682e4fa9b05b58e19d70302a1b9427d5d8a43d9920fc327854d435e5af190->enter($__internal_201682e4fa9b05b58e19d70302a1b9427d5d8a43d9920fc327854d435e5af190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_update.html.twig"));

        $__internal_d7c1c55313b7611520d0ab9c60c8024978f93c22e2ad8444269b3fd89e8d84e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c1c55313b7611520d0ab9c60c8024978f93c22e2ad8444269b3fd89e8d84e1->enter($__internal_d7c1c55313b7611520d0ab9c60c8024978f93c22e2ad8444269b3fd89e8d84e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_update.html.twig"));

        // line 1
        echo "<button type=\"submit\" class=\"ui icon labeled large button\" id=\"sylius-cart-update\"><i class=\"save icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.update_cart"), "html", null, true);
        echo "</button>
";
        
        $__internal_201682e4fa9b05b58e19d70302a1b9427d5d8a43d9920fc327854d435e5af190->leave($__internal_201682e4fa9b05b58e19d70302a1b9427d5d8a43d9920fc327854d435e5af190_prof);

        
        $__internal_d7c1c55313b7611520d0ab9c60c8024978f93c22e2ad8444269b3fd89e8d84e1->leave($__internal_d7c1c55313b7611520d0ab9c60c8024978f93c22e2ad8444269b3fd89e8d84e1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<button type=\"submit\" class=\"ui icon labeled large button\" id=\"sylius-cart-update\"><i class=\"save icon\"></i> {{ 'sylius.ui.update_cart'|trans }}</button>
", "SyliusShopBundle:Cart/Summary:_update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/Summary/_update.html.twig");
    }
}
