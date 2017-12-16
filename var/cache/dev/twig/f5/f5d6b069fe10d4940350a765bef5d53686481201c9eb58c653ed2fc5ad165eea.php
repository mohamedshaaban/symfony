<?php

/* SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig */
class __TwigTemplate_b893468b666e32295a2d1da6d416f7e2233af317802aa8992cd21f3853376290 extends Twig_Template
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
        $__internal_ed50439db259e74fba63c3738a880e60d26717cc8873100bb3860addc321af2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed50439db259e74fba63c3738a880e60d26717cc8873100bb3860addc321af2d->enter($__internal_ed50439db259e74fba63c3738a880e60d26717cc8873100bb3860addc321af2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig"));

        $__internal_81830bd338128eedfd5d4d7ab0d303c1a0ecc5c0a49b0544d920eaf626941d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81830bd338128eedfd5d4d7ab0d303c1a0ecc5c0a49b0544d920eaf626941d75->enter($__internal_81830bd338128eedfd5d4d7ab0d303c1a0ecc5c0a49b0544d920eaf626941d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customers"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 6, $this->getSourceContext()); })()), "email", array())));
        // line 8
        echo "
";
        // line 9
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 9, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_ed50439db259e74fba63c3738a880e60d26717cc8873100bb3860addc321af2d->leave($__internal_ed50439db259e74fba63c3738a880e60d26717cc8873100bb3860addc321af2d_prof);

        
        $__internal_81830bd338128eedfd5d4d7ab0d303c1a0ecc5c0a49b0544d920eaf626941d75->leave($__internal_81830bd338128eedfd5d4d7ab0d303c1a0ecc5c0a49b0544d920eaf626941d75_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  33 => 8,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
    { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
    { label: 'sylius.ui.customers'|trans, url: path('sylius_admin_customer_index') },
    { label: customer.email }
] %}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/_breadcrumb.html.twig");
    }
}
