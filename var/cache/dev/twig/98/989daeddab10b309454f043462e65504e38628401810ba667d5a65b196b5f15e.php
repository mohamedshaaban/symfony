<?php

/* SyliusShopBundle:Taxon:_header.html.twig */
class __TwigTemplate_a24fa9d3e3644c721f4a19071e1fb97cd4fdf7d205ca655f1f7db5584dd6cc4f extends Twig_Template
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
        $__internal_bb42e5e6801d3c17fd6d4f1901b7eace902c47010985a28163a0a3ab8ffae18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb42e5e6801d3c17fd6d4f1901b7eace902c47010985a28163a0a3ab8ffae18e->enter($__internal_bb42e5e6801d3c17fd6d4f1901b7eace902c47010985a28163a0a3ab8ffae18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_header.html.twig"));

        $__internal_e4113f4932ac96e731ce77eeb936d26ccdbbdff1a4508edd7acbfb0502893aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4113f4932ac96e731ce77eeb936d26ccdbbdff1a4508edd7acbfb0502893aae->enter($__internal_e4113f4932ac96e731ce77eeb936d26ccdbbdff1a4508edd7acbfb0502893aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_header.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Taxon/_breadcrumb.html.twig", "SyliusShopBundle:Taxon:_header.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.taxon.header.before", array("taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 3, $this->getSourceContext()); })()))));
        echo "

<h1 class=\"ui monster section dividing header\">
    ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "
    <div class=\"sub header\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 7, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</div>
</h1>

";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.taxon.header.after", array("taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 10, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_bb42e5e6801d3c17fd6d4f1901b7eace902c47010985a28163a0a3ab8ffae18e->leave($__internal_bb42e5e6801d3c17fd6d4f1901b7eace902c47010985a28163a0a3ab8ffae18e_prof);

        
        $__internal_e4113f4932ac96e731ce77eeb936d26ccdbbdff1a4508edd7acbfb0502893aae->leave($__internal_e4113f4932ac96e731ce77eeb936d26ccdbbdff1a4508edd7acbfb0502893aae_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  40 => 7,  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@SyliusShop/Taxon/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.shop.taxon.header.before', {'taxon': taxon}) }}

<h1 class=\"ui monster section dividing header\">
    {{ taxon.name }}
    <div class=\"sub header\">{{ taxon.description }}</div>
</h1>

{{ sonata_block_render_event('sylius.shop.taxon.header.after', {'taxon': taxon}) }}
", "SyliusShopBundle:Taxon:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Taxon/_header.html.twig");
    }
}
