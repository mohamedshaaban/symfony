<?php

/* SyliusAdminBundle:Taxon:create.html.twig */
class __TwigTemplate_6de554dca0da03e114d2a4db335739848846f0191e4d244774a9f357395a5b1c extends Twig_Template
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
        $__internal_48d24e9cb4610da7e5a0391a65fc44212faca41007849c11e520b77df9482b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d24e9cb4610da7e5a0391a65fc44212faca41007849c11e520b77df9482b8a->enter($__internal_48d24e9cb4610da7e5a0391a65fc44212faca41007849c11e520b77df9482b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:create.html.twig"));

        $__internal_e47136dd87cea6cedd886c4cc917752733d3de2dbca190bc2ee594586b182e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47136dd87cea6cedd886c4cc917752733d3de2dbca190bc2ee594586b182e0f->enter($__internal_e47136dd87cea6cedd886c4cc917752733d3de2dbca190bc2ee594586b182e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d24e9cb4610da7e5a0391a65fc44212faca41007849c11e520b77df9482b8a->leave($__internal_48d24e9cb4610da7e5a0391a65fc44212faca41007849c11e520b77df9482b8a_prof);

        
        $__internal_e47136dd87cea6cedd886c4cc917752733d3de2dbca190bc2ee594586b182e0f->leave($__internal_e47136dd87cea6cedd886c4cc917752733d3de2dbca190bc2ee594586b182e0f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6759248189d0cb8b42c6bcba8a44bc9bdffe12eadf0a0a66149348655893d42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6759248189d0cb8b42c6bcba8a44bc9bdffe12eadf0a0a66149348655893d42c->enter($__internal_6759248189d0cb8b42c6bcba8a44bc9bdffe12eadf0a0a66149348655893d42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3d4f2f39a55fffba7b6f568afcd47366b928b36ec017f362138ed7962bf9f523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4f2f39a55fffba7b6f568afcd47366b928b36ec017f362138ed7962bf9f523->enter($__internal_3d4f2f39a55fffba7b6f568afcd47366b928b36ec017f362138ed7962bf9f523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3d4f2f39a55fffba7b6f568afcd47366b928b36ec017f362138ed7962bf9f523->leave($__internal_3d4f2f39a55fffba7b6f568afcd47366b928b36ec017f362138ed7962bf9f523_prof);

        
        $__internal_6759248189d0cb8b42c6bcba8a44bc9bdffe12eadf0a0a66149348655893d42c->leave($__internal_6759248189d0cb8b42c6bcba8a44bc9bdffe12eadf0a0a66149348655893d42c_prof);

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
", "SyliusAdminBundle:Taxon:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Taxon/create.html.twig");
    }
}
