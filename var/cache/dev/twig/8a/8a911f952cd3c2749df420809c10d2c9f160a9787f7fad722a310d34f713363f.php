<?php

/* SyliusAdminBundle:Dashboard:_menu.html.twig */
class __TwigTemplate_a7ba38bb45dfcdf5dafc10587884f2c8accd0b74bc4a2de0bf64983933d6e9b1 extends Twig_Template
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
        $__internal_d99848352407083886fb3d589604ba44c9c9e8fa552b2e8c5eed6b98807c13fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99848352407083886fb3d589604ba44c9c9e8fa552b2e8c5eed6b98807c13fa->enter($__internal_d99848352407083886fb3d589604ba44c9c9e8fa552b2e8c5eed6b98807c13fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_menu.html.twig"));

        $__internal_ff4bd162f4d79aa500b5d7249faa4440fbd384bc34fe30a917c844928e2acf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4bd162f4d79aa500b5d7249faa4440fbd384bc34fe30a917c844928e2acf91->enter($__internal_ff4bd162f4d79aa500b5d7249faa4440fbd384bc34fe30a917c844928e2acf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_menu.html.twig"));

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
        
        $__internal_d99848352407083886fb3d589604ba44c9c9e8fa552b2e8c5eed6b98807c13fa->leave($__internal_d99848352407083886fb3d589604ba44c9c9e8fa552b2e8c5eed6b98807c13fa_prof);

        
        $__internal_ff4bd162f4d79aa500b5d7249faa4440fbd384bc34fe30a917c844928e2acf91->leave($__internal_ff4bd162f4d79aa500b5d7249faa4440fbd384bc34fe30a917c844928e2acf91_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_menu.html.twig";
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

", "SyliusAdminBundle:Dashboard:_menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Dashboard/_menu.html.twig");
    }
}
