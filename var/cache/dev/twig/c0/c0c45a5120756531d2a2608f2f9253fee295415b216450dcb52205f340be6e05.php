<?php

/* SyliusShopBundle:Checkout/Complete:_navigation.html.twig */
class __TwigTemplate_7b57e3c31d3063ae71eda0d9282df6cf51afeec9c7575daac92fac962b8c386b extends Twig_Template
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
        $__internal_9c69360a6d34e747926bacdcdc2a621af1f7710184aa03521ac3bfc14b4e5f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c69360a6d34e747926bacdcdc2a621af1f7710184aa03521ac3bfc14b4e5f00->enter($__internal_9c69360a6d34e747926bacdcdc2a621af1f7710184aa03521ac3bfc14b4e5f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_navigation.html.twig"));

        $__internal_d5af5f63208a926642f561e39d7c20b1f0c1754a9d6203cc3ad3125bf70414d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5af5f63208a926642f561e39d7c20b1f0c1754a9d6203cc3ad3125bf70414d0->enter($__internal_d5af5f63208a926642f561e39d7c20b1f0c1754a9d6203cc3ad3125bf70414d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_navigation.html.twig"));

        // line 1
        echo "<button type=\"submit\" class=\"ui huge primary fluid icon labeled button\"><i class=\"check icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.place_order"), "html", null, true);
        echo "</button>
";
        
        $__internal_9c69360a6d34e747926bacdcdc2a621af1f7710184aa03521ac3bfc14b4e5f00->leave($__internal_9c69360a6d34e747926bacdcdc2a621af1f7710184aa03521ac3bfc14b4e5f00_prof);

        
        $__internal_d5af5f63208a926642f561e39d7c20b1f0c1754a9d6203cc3ad3125bf70414d0->leave($__internal_d5af5f63208a926642f561e39d7c20b1f0c1754a9d6203cc3ad3125bf70414d0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Complete:_navigation.html.twig";
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
        return new Twig_Source("<button type=\"submit\" class=\"ui huge primary fluid icon labeled button\"><i class=\"check icon\"></i> {{ 'sylius.ui.place_order'|trans }}</button>
", "SyliusShopBundle:Checkout/Complete:_navigation.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/Complete/_navigation.html.twig");
    }
}
