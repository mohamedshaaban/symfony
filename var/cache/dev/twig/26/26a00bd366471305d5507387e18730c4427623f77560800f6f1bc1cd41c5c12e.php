<?php

/* SyliusAdminBundle:Taxon:update.html.twig */
class __TwigTemplate_1fafe420d647a8b1ad6178d710afc00f2caf38432b8cdf755798aedd6bdd7c5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/Crud/update.html.twig", "SyliusAdminBundle:Taxon:update.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusAdmin/Crud/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a39238794b9b987d0f12256da90e41ddb7aa7dc93c094d8bbfcedc4773bab0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39238794b9b987d0f12256da90e41ddb7aa7dc93c094d8bbfcedc4773bab0ba->enter($__internal_a39238794b9b987d0f12256da90e41ddb7aa7dc93c094d8bbfcedc4773bab0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:update.html.twig"));

        $__internal_59e633666c69e9859f77802c51c8fbbb2715a73a7ba7bbe86720e528f628bbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e633666c69e9859f77802c51c8fbbb2715a73a7ba7bbe86720e528f628bbcb->enter($__internal_59e633666c69e9859f77802c51c8fbbb2715a73a7ba7bbe86720e528f628bbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39238794b9b987d0f12256da90e41ddb7aa7dc93c094d8bbfcedc4773bab0ba->leave($__internal_a39238794b9b987d0f12256da90e41ddb7aa7dc93c094d8bbfcedc4773bab0ba_prof);

        
        $__internal_59e633666c69e9859f77802c51c8fbbb2715a73a7ba7bbe86720e528f628bbcb->leave($__internal_59e633666c69e9859f77802c51c8fbbb2715a73a7ba7bbe86720e528f628bbcb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d56ed36b02e7eb04ce3e015a007b4ed1621895355d74e423689a0e8c893cac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d56ed36b02e7eb04ce3e015a007b4ed1621895355d74e423689a0e8c893cac4->enter($__internal_6d56ed36b02e7eb04ce3e015a007b4ed1621895355d74e423689a0e8c893cac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_45b6fcdf966833895c88b5cf8c99ffe06c2f68bd03398e2b5151f5235da0e170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b6fcdf966833895c88b5cf8c99ffe06c2f68bd03398e2b5151f5235da0e170->enter($__internal_45b6fcdf966833895c88b5cf8c99ffe06c2f68bd03398e2b5151f5235da0e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.before_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 4, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.before_taxon_tree", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_taxon_tree", array("template" => "@SyliusAdmin/Taxon/_treeWithButtons.html.twig")));
        echo "

            ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.taxon.update.after_taxon_tree", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 12, $this->getSourceContext()); })()))));
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
        
        $__internal_45b6fcdf966833895c88b5cf8c99ffe06c2f68bd03398e2b5151f5235da0e170->leave($__internal_45b6fcdf966833895c88b5cf8c99ffe06c2f68bd03398e2b5151f5235da0e170_prof);

        
        $__internal_6d56ed36b02e7eb04ce3e015a007b4ed1621895355d74e423689a0e8c893cac4->leave($__internal_6d56ed36b02e7eb04ce3e015a007b4ed1621895355d74e423689a0e8c893cac4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:update.html.twig";
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
        return new Twig_Source("{% extends '@SyliusAdmin/Crud/update.html.twig' %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.taxon.update.before_content', {'resource': resource}) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.admin.taxon.update.before_taxon_tree', {'resource': resource}) }}

            {{ render(path('sylius_admin_partial_taxon_tree', {'template': '@SyliusAdmin/Taxon/_treeWithButtons.html.twig'})) }}

            {{ sonata_block_render_event('sylius.admin.taxon.update.after_taxon_tree', {'resource': resource}) }}
        </div>
        <div class=\"twelve wide column\">
            {{ parent() }}
        </div>
    </div>
{% endblock %}
", "SyliusAdminBundle:Taxon:update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Taxon/update.html.twig");
    }
}
