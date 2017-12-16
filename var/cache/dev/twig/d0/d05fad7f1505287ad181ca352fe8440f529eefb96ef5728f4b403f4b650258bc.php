<?php

/* SyliusAdminBundle:Order/History:_breadcrumb.html.twig */
class __TwigTemplate_ef24a410e8cabfdca1db891f97df59dafa9edcdabd4e883c7aa4c5cda4474187 extends Twig_Template
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
        $__internal_e7520af2624acb3bcfd6cb3eb226ce6c83115e5171d90e588530d442b79db33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7520af2624acb3bcfd6cb3eb226ce6c83115e5171d90e588530d442b79db33a->enter($__internal_e7520af2624acb3bcfd6cb3eb226ce6c83115e5171d90e588530d442b79db33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_breadcrumb.html.twig"));

        $__internal_a78c83a9f50ccb741e171faf39d746b10a975538bdf3a48bef728d11a93a2106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78c83a9f50ccb741e171faf39d746b10a975538bdf3a48bef728d11a93a2106->enter($__internal_a78c83a9f50ccb741e171faf39d746b10a975538bdf3a48bef728d11a93a2106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Order/History:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index")), 2 => array("label" => ("#" . twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "number", array())), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.history")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 11, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_e7520af2624acb3bcfd6cb3eb226ce6c83115e5171d90e588530d442b79db33a->leave($__internal_e7520af2624acb3bcfd6cb3eb226ce6c83115e5171d90e588530d442b79db33a_prof);

        
        $__internal_a78c83a9f50ccb741e171faf39d746b10a975538bdf3a48bef728d11a93a2106->leave($__internal_a78c83a9f50ccb741e171faf39d746b10a975538bdf3a48bef728d11a93a2106_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  33 => 10,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: 'sylius.ui.orders'|trans, url: path('sylius_admin_order_index') },
        { label: '#'~order.number, url: path('sylius_admin_order_show', {'id': order.id}) },
        { label: 'sylius.ui.history'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Order/History:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/History/_breadcrumb.html.twig");
    }
}
