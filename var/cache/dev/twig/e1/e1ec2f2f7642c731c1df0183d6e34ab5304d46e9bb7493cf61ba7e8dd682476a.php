<?php

/* @SyliusShop/Taxon/_header.html.twig */
class __TwigTemplate_86055587a5d88d9b755b5f81c9e1c191ca68546c9e123351942c3a78eb318261 extends Twig_Template
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
        $__internal_d091d40f53582266987357d25a559db806c24f15323428f0c04330a924ad3f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d091d40f53582266987357d25a559db806c24f15323428f0c04330a924ad3f73->enter($__internal_d091d40f53582266987357d25a559db806c24f15323428f0c04330a924ad3f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_header.html.twig"));

        $__internal_b7b5908db92746b0a38a67851ddce729788e720b7a102adcaaeee1a92e8c10ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b5908db92746b0a38a67851ddce729788e720b7a102adcaaeee1a92e8c10ff->enter($__internal_b7b5908db92746b0a38a67851ddce729788e720b7a102adcaaeee1a92e8c10ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_header.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusShop/Taxon/_breadcrumb.html.twig", "@SyliusShop/Taxon/_header.html.twig", 1)->display($context);
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
        
        $__internal_d091d40f53582266987357d25a559db806c24f15323428f0c04330a924ad3f73->leave($__internal_d091d40f53582266987357d25a559db806c24f15323428f0c04330a924ad3f73_prof);

        
        $__internal_b7b5908db92746b0a38a67851ddce729788e720b7a102adcaaeee1a92e8c10ff->leave($__internal_b7b5908db92746b0a38a67851ddce729788e720b7a102adcaaeee1a92e8c10ff_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_header.html.twig";
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
", "@SyliusShop/Taxon/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Taxon\\_header.html.twig");
    }
}
