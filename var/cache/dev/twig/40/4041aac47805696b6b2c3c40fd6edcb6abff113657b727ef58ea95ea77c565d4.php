<?php

/* SyliusShopBundle:Cart/Summary:_checkout.html.twig */
class __TwigTemplate_ad7038b9ef7c1e54980b801e1790fd6261c892118bad0d2c630e04a6dbce3af9 extends Twig_Template
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
        $__internal_3542f507a7a0ebf724e9f7ec24a324210301f6c4d307441bdee5ab98253c8236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3542f507a7a0ebf724e9f7ec24a324210301f6c4d307441bdee5ab98253c8236->enter($__internal_3542f507a7a0ebf724e9f7ec24a324210301f6c4d307441bdee5ab98253c8236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_checkout.html.twig"));

        $__internal_9861ac0600feb72912dd581d230aa716bf7f264ef51355f3ecaeb81ec7f35854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9861ac0600feb72912dd581d230aa716bf7f264ef51355f3ecaeb81ec7f35854->enter($__internal_9861ac0600feb72912dd581d230aa716bf7f264ef51355f3ecaeb81ec7f35854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_checkout.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_start");
        echo "\" class=\"ui huge primary fluid labeled icon button\"><i class=\"check icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.checkout"), "html", null, true);
        echo "</a>
";
        
        $__internal_3542f507a7a0ebf724e9f7ec24a324210301f6c4d307441bdee5ab98253c8236->leave($__internal_3542f507a7a0ebf724e9f7ec24a324210301f6c4d307441bdee5ab98253c8236_prof);

        
        $__internal_9861ac0600feb72912dd581d230aa716bf7f264ef51355f3ecaeb81ec7f35854->leave($__internal_9861ac0600feb72912dd581d230aa716bf7f264ef51355f3ecaeb81ec7f35854_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_checkout.html.twig";
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
        return new Twig_Source("<a href=\"{{ path('sylius_shop_checkout_start') }}\" class=\"ui huge primary fluid labeled icon button\"><i class=\"check icon\"></i> {{ 'sylius.ui.checkout'|trans }}</a>
", "SyliusShopBundle:Cart/Summary:_checkout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/Summary/_checkout.html.twig");
    }
}
