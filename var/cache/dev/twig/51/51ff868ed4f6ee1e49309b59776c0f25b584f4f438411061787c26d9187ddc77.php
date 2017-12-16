<?php

/* SyliusAdminBundle:Customer/Show:_menu.html.twig */
class __TwigTemplate_ebb4221858df958805cb1dac3d55f4e1271beb60211a68751da96c038afbdf11 extends Twig_Template
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
        $__internal_3d93fc2ef9fe9780c93d71877b9960af325130a2a5a418d4e24f17700fb7dec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d93fc2ef9fe9780c93d71877b9960af325130a2a5a418d4e24f17700fb7dec6->enter($__internal_3d93fc2ef9fe9780c93d71877b9960af325130a2a5a418d4e24f17700fb7dec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_menu.html.twig"));

        $__internal_7563401c2ecc7090d22ded71ba1abeaf0e793c448d521ad5c3b6b380f0395339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7563401c2ecc7090d22ded71ba1abeaf0e793c448d521ad5c3b6b380f0395339->enter($__internal_7563401c2ecc7090d22ded71ba1abeaf0e793c448d521ad5c3b6b380f0395339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_menu.html.twig"));

        // line 1
        echo "<div class=\"ui fluid labeled four icon item menu\">
    <div class=\"item\">
        <i class=\"alternate share icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.channel"), "html", null, true);
        echo "
    </div>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_order_index", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"item\">
        <i class=\"shop icon\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "html", null, true);
        echo "
    </a>
    <div class=\"item\">
        <i class=\"dollar icon\"></i>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total_value_of_orders"), "html", null, true);
        echo "
    </div>
    <div class=\"item\">
        <i class=\"dollar icon\"></i>
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
    </div>
</div>

";
        
        $__internal_3d93fc2ef9fe9780c93d71877b9960af325130a2a5a418d4e24f17700fb7dec6->leave($__internal_3d93fc2ef9fe9780c93d71877b9960af325130a2a5a418d4e24f17700fb7dec6_prof);

        
        $__internal_7563401c2ecc7090d22ded71ba1abeaf0e793c448d521ad5c3b6b380f0395339->leave($__internal_7563401c2ecc7090d22ded71ba1abeaf0e793c448d521ad5c3b6b380f0395339_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  47 => 12,  40 => 8,  35 => 6,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid labeled four icon item menu\">
    <div class=\"item\">
        <i class=\"alternate share icon\"></i>
        {{ 'sylius.ui.channel'|trans }}
    </div>
    <a href=\"{{ path('sylius_admin_customer_order_index', {'id': customer.id}) }}\" class=\"item\">
        <i class=\"shop icon\"></i>
        {{ 'sylius.ui.orders'|trans }}
    </a>
    <div class=\"item\">
        <i class=\"dollar icon\"></i>
        {{ 'sylius.ui.total_value_of_orders'|trans }}
    </div>
    <div class=\"item\">
        <i class=\"dollar icon\"></i>
        {{ 'sylius.ui.average_order_value'|trans }}
    </div>
</div>

", "SyliusAdminBundle:Customer/Show:_menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/_menu.html.twig");
    }
}
