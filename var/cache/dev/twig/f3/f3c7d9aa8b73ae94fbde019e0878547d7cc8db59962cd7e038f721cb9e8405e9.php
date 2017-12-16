<?php

/* SyliusShopBundle:Cart/Summary:_suggestions.html.twig */
class __TwigTemplate_946e7e1960d995e0b139c869e58b9ab0a02efc6a895a5cf8e376a3e8523bed1a extends Twig_Template
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
        $__internal_0f9ddb8fd41a2a68a250c9267ed956c639763b3a329e9f77c732f125eacb70b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9ddb8fd41a2a68a250c9267ed956c639763b3a329e9f77c732f125eacb70b8->enter($__internal_0f9ddb8fd41a2a68a250c9267ed956c639763b3a329e9f77c732f125eacb70b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_suggestions.html.twig"));

        $__internal_fd3c34d72c5a254a171eda4cb1a88df0c74c3280b655df35af7929426c1bafed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3c34d72c5a254a171eda4cb1a88df0c74c3280b655df35af7929426c1bafed->enter($__internal_fd3c34d72c5a254a171eda4cb1a88df0c74c3280b655df35af7929426c1bafed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_suggestions.html.twig"));

        // line 1
        echo "<h4 class=\"ui horizontal section divider header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.you_may_also_like"), "html", null, true);
        echo "</h4>
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_index_latest", array("count" => 4, "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
        echo "
";
        
        $__internal_0f9ddb8fd41a2a68a250c9267ed956c639763b3a329e9f77c732f125eacb70b8->leave($__internal_0f9ddb8fd41a2a68a250c9267ed956c639763b3a329e9f77c732f125eacb70b8_prof);

        
        $__internal_fd3c34d72c5a254a171eda4cb1a88df0c74c3280b655df35af7929426c1bafed->leave($__internal_fd3c34d72c5a254a171eda4cb1a88df0c74c3280b655df35af7929426c1bafed_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_suggestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui horizontal section divider header\">{{ 'sylius.ui.you_may_also_like'|trans }}</h4>
{{ render(url('sylius_shop_partial_product_index_latest', {'count': 4, 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}
", "SyliusShopBundle:Cart/Summary:_suggestions.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/Summary/_suggestions.html.twig");
    }
}
