<?php

/* SyliusAdminBundle:Taxon:create.html.twig */
class __TwigTemplate_0e3ae5eb32e73af57ea1383f41547cd4a5b6aa18185128eef1d897e28c0f45fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/Crud/create.html.twig", "SyliusAdminBundle:Taxon:create.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusAdmin/Crud/create.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1027f7e825aa65f8bffa7f5af5105f9acbd506195158fe02d85438ad052f0ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1027f7e825aa65f8bffa7f5af5105f9acbd506195158fe02d85438ad052f0ee0->enter($__internal_1027f7e825aa65f8bffa7f5af5105f9acbd506195158fe02d85438ad052f0ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:create.html.twig"));

        $__internal_4502e63dc4dd9a65c4d640a095c511c2ff4949c5314022ae3338004d900174fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4502e63dc4dd9a65c4d640a095c511c2ff4949c5314022ae3338004d900174fa->enter($__internal_4502e63dc4dd9a65c4d640a095c511c2ff4949c5314022ae3338004d900174fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1027f7e825aa65f8bffa7f5af5105f9acbd506195158fe02d85438ad052f0ee0->leave($__internal_1027f7e825aa65f8bffa7f5af5105f9acbd506195158fe02d85438ad052f0ee0_prof);

        
        $__internal_4502e63dc4dd9a65c4d640a095c511c2ff4949c5314022ae3338004d900174fa->leave($__internal_4502e63dc4dd9a65c4d640a095c511c2ff4949c5314022ae3338004d900174fa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd4996cda246862fc794f10d432a3e2025988de4f9c99a73339585abf32739c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4996cda246862fc794f10d432a3e2025988de4f9c99a73339585abf32739c1->enter($__internal_bd4996cda246862fc794f10d432a3e2025988de4f9c99a73339585abf32739c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8f04812f035b394fafaabfd5626b56ccc31698a31451200a25a232a936708673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f04812f035b394fafaabfd5626b56ccc31698a31451200a25a232a936708673->enter($__internal_8f04812f035b394fafaabfd5626b56ccc31698a31451200a25a232a936708673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.create.before_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 4, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.create.before_taxon_tree", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithButtons.html.twig")));
        echo "

            ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.create.after_taxon_tree", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 12, $this->getSourceContext()); })()))));
        echo "
        </div>
        <div class=\"twelve wide column\">
            ";
        // line 15
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        </div>
    </div>
";
        
        $__internal_8f04812f035b394fafaabfd5626b56ccc31698a31451200a25a232a936708673->leave($__internal_8f04812f035b394fafaabfd5626b56ccc31698a31451200a25a232a936708673_prof);

        
        $__internal_bd4996cda246862fc794f10d432a3e2025988de4f9c99a73339585abf32739c1->leave($__internal_bd4996cda246862fc794f10d432a3e2025988de4f9c99a73339585abf32739c1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  67 => 12,  62 => 10,  57 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusAdmin/Crud/create.html.twig' %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.taxon.create.before_content', {'resource': resource}) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.admin.taxon.create.before_taxon_tree', {'resource': resource}) }}

            {{ render(path('sylius_admin_partial_taxon_tree', {'template': '@SyliusAdmin/Taxon/_treeWithButtons.html.twig'})) }}

            {{ sonata_block_render_event('sylius.admin.taxon.create.after_taxon_tree', {'resource': resource}) }}
        </div>
        <div class=\"twelve wide column\">
            {{ parent() }}
        </div>
    </div>
{% endblock %}
", "SyliusAdminBundle:Taxon:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Taxon\\create.html.twig");
    }
}
