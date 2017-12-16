<?php

/* @SyliusAdmin/Dashboard/_menu.html.twig */
class __TwigTemplate_fd149eaf31318a1acfa24db5ceba6d85134c2640906f8eca3d62362e582bce48 extends Twig_Template
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
        $__internal_67de6c56145e60b6aca519e1e1de345ce6aca7205734d92dfa27f557c36bf24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67de6c56145e60b6aca519e1e1de345ce6aca7205734d92dfa27f557c36bf24e->enter($__internal_67de6c56145e60b6aca519e1e1de345ce6aca7205734d92dfa27f557c36bf24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_menu.html.twig"));

        $__internal_1ae0b5e56c3f9e66773e6a76aa2ba7d33ab5a2ab94ba3f2534aac79532b99e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae0b5e56c3f9e66773e6a76aa2ba7d33ab5a2ab94ba3f2534aac79532b99e9f->enter($__internal_1ae0b5e56c3f9e66773e6a76aa2ba7d33ab5a2ab94ba3f2534aac79532b99e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_menu.html.twig"));

        // line 1
        echo "<div class=\"ui fluid labeled four icon item menu\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index");
        echo "\" class=\"item\">
        <i class=\"cubes icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index");
        echo "\" class=\"item\">
        <i class=\"shop icon\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_index");
        echo "\" class=\"item\">
        <i class=\"users icon\"></i>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customers"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index");
        echo "\" class=\"item\">
        <i class=\"ticket icon\"></i>
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "html", null, true);
        echo "
    </a>
</div>

";
        
        $__internal_67de6c56145e60b6aca519e1e1de345ce6aca7205734d92dfa27f557c36bf24e->leave($__internal_67de6c56145e60b6aca519e1e1de345ce6aca7205734d92dfa27f557c36bf24e_prof);

        
        $__internal_1ae0b5e56c3f9e66773e6a76aa2ba7d33ab5a2ab94ba3f2534aac79532b99e9f->leave($__internal_1ae0b5e56c3f9e66773e6a76aa2ba7d33ab5a2ab94ba3f2534aac79532b99e9f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  53 => 12,  48 => 10,  43 => 8,  38 => 6,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid labeled four icon item menu\">
    <a href=\"{{ path('sylius_admin_product_index') }}\" class=\"item\">
        <i class=\"cubes icon\"></i>
        {{ 'sylius.ui.products'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_order_index') }}\" class=\"item\">
        <i class=\"shop icon\"></i>
        {{ 'sylius.ui.orders'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_customer_index') }}\" class=\"item\">
        <i class=\"users icon\"></i>
        {{ 'sylius.ui.customers'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_promotion_index') }}\" class=\"item\">
        <i class=\"ticket icon\"></i>
        {{ 'sylius.ui.promotions'|trans }}
    </a>
</div>

", "@SyliusAdmin/Dashboard/_menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Dashboard\\_menu.html.twig");
    }
}
