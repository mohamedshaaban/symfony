<?php

/* SyliusAdminBundle:Product:_form.html.twig */
class __TwigTemplate_89288234f41e784ff4a4548ffe67a7c08220c4aa78a8ce683a178a65ba402b1c extends Twig_Template
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
        $__internal_600bf429673c35ec5f12dfb326b8df7bf1c7cd3016431a80a5264a553243f39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600bf429673c35ec5f12dfb326b8df7bf1c7cd3016431a80a5264a553243f39a->enter($__internal_600bf429673c35ec5f12dfb326b8df7bf1c7cd3016431a80a5264a553243f39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_form.html.twig"));

        $__internal_4bf68b54326bac017df10acf7b4be536cf2bc1cde514ff09930c63ac5226a4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf68b54326bac017df10acf7b4be536cf2bc1cde514ff09930c63ac5226a4eb->enter($__internal_4bf68b54326bac017df10acf7b4be536cf2bc1cde514ff09930c63ac5226a4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_form.html.twig"));

        // line 1
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.product_form", array(), array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })())));
        // line 2
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 2, $this->getSourceContext()); })()), array("template" => "SyliusAdminBundle:Product:_menu.html.twig", "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_600bf429673c35ec5f12dfb326b8df7bf1c7cd3016431a80a5264a553243f39a->leave($__internal_600bf429673c35ec5f12dfb326b8df7bf1c7cd3016431a80a5264a553243f39a_prof);

        
        $__internal_4bf68b54326bac017df10acf7b4be536cf2bc1cde514ff09930c63ac5226a4eb->leave($__internal_4bf68b54326bac017df10acf7b4be536cf2bc1cde514ff09930c63ac5226a4eb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set menu = knp_menu_get('sylius.admin.product_form', [], {'product': product}) %}
{{ knp_menu_render(menu, {'template': 'SyliusAdminBundle:Product:_menu.html.twig', 'form': form, 'product': product}) }}
", "SyliusAdminBundle:Product:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\_form.html.twig");
    }
}
