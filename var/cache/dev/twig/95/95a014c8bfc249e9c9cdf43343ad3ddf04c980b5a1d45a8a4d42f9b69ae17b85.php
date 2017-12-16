<?php

/* SyliusShopBundle:Login:_register.html.twig */
class __TwigTemplate_b535bad7af7624d99ba5a53acd71d592911f243a41eedf62903bc54684f29136 extends Twig_Template
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
        $__internal_0c2638f9f02cbc6c2586287f2e838dc30a81419d5a1e9b0b72e48bfd500cd523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2638f9f02cbc6c2586287f2e838dc30a81419d5a1e9b0b72e48bfd500cd523->enter($__internal_0c2638f9f02cbc6c2586287f2e838dc30a81419d5a1e9b0b72e48bfd500cd523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_register.html.twig"));

        $__internal_fd9c4fe0a64c1081e1cd5c84cfc5f8ee38fa76950d9b7cc87444d43f8913e4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9c4fe0a64c1081e1cd5c84cfc5f8ee38fa76950d9b7cc87444d43f8913e4c3->enter($__internal_fd9c4fe0a64c1081e1cd5c84cfc5f8ee38fa76950d9b7cc87444d43f8913e4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_register.html.twig"));

        // line 1
        echo "<h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new_customers"), "html", null, true);
        echo "</h4>
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_register");
        echo "\" class=\"ui big green labeled icon fluid button\">
    <i class=\"signup icon\"></i>
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create_an_account"), "html", null, true);
        echo "
</a>
";
        
        $__internal_0c2638f9f02cbc6c2586287f2e838dc30a81419d5a1e9b0b72e48bfd500cd523->leave($__internal_0c2638f9f02cbc6c2586287f2e838dc30a81419d5a1e9b0b72e48bfd500cd523_prof);

        
        $__internal_fd9c4fe0a64c1081e1cd5c84cfc5f8ee38fa76950d9b7cc87444d43f8913e4c3->leave($__internal_fd9c4fe0a64c1081e1cd5c84cfc5f8ee38fa76950d9b7cc87444d43f8913e4c3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Login:_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui dividing header\">{{ 'sylius.ui.new_customers'|trans }}</h4>
<a href=\"{{ path('sylius_shop_register') }}\" class=\"ui big green labeled icon fluid button\">
    <i class=\"signup icon\"></i>
    {{ 'sylius.ui.create_an_account'|trans }}
</a>
", "SyliusShopBundle:Login:_register.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Login/_register.html.twig");
    }
}
