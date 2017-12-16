<?php

/* SyliusShopBundle:Register:_header.html.twig */
class __TwigTemplate_fbebc8792454312e17e79c3e59fb6dafba629cf3d971890080b43e0f1990e6a1 extends Twig_Template
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
        $__internal_22c511caf4eba7cb3a630c9244090950a1c7f284f6394f60d6111c541768135b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c511caf4eba7cb3a630c9244090950a1c7f284f6394f60d6111c541768135b->enter($__internal_22c511caf4eba7cb3a630c9244090950a1c7f284f6394f60d6111c541768135b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Register:_header.html.twig"));

        $__internal_00ce33314a519fd280a91e6764036f6c318df79e46899551a819c211167f1196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ce33314a519fd280a91e6764036f6c318df79e46899551a819c211167f1196->enter($__internal_00ce33314a519fd280a91e6764036f6c318df79e46899551a819c211167f1196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Register:_header.html.twig"));

        // line 1
        echo "<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular user icon\"></i>
            <div class=\"content\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.register_in_the_store"), "html", null, true);
        echo "
                <div class=\"sub header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create_a_new_customer_account"), "html", null, true);
        echo "</div>
            </div>
        </h1>
    </div>
    <div class=\"middle aligned column\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login");
        echo "\" class=\"ui right floated basic button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.have_an_account_already"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sign_in_here"), "html", null, true);
        echo ".</a>
    </div>
</div>
";
        
        $__internal_22c511caf4eba7cb3a630c9244090950a1c7f284f6394f60d6111c541768135b->leave($__internal_22c511caf4eba7cb3a630c9244090950a1c7f284f6394f60d6111c541768135b_prof);

        
        $__internal_00ce33314a519fd280a91e6764036f6c318df79e46899551a819c211167f1196->leave($__internal_00ce33314a519fd280a91e6764036f6c318df79e46899551a819c211167f1196_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Register:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  38 => 9,  34 => 8,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular user icon\"></i>
            <div class=\"content\">
                {{ 'sylius.ui.register_in_the_store'|trans }}
                <div class=\"sub header\">{{ 'sylius.ui.create_a_new_customer_account'|trans }}</div>
            </div>
        </h1>
    </div>
    <div class=\"middle aligned column\">
        <a href=\"{{ path('sylius_shop_login') }}\" class=\"ui right floated basic button\">{{ 'sylius.ui.have_an_account_already'|trans }} {{ 'sylius.ui.sign_in_here'|trans }}.</a>
    </div>
</div>
", "SyliusShopBundle:Register:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Register/_header.html.twig");
    }
}
