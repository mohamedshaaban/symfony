<?php

/* SyliusAdminBundle:Product:_form.html.twig */
class __TwigTemplate_4612fb8f9aae42545e93ffaf68c25319f468c51ce068058474bfcf8dc2529ae9 extends Twig_Template
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
        $__internal_29c388a726ec272ba71cb4902f589b9b34b20af30bb21f41923f863a19c5d19f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c388a726ec272ba71cb4902f589b9b34b20af30bb21f41923f863a19c5d19f->enter($__internal_29c388a726ec272ba71cb4902f589b9b34b20af30bb21f41923f863a19c5d19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_form.html.twig"));

        $__internal_d2a5a5e78a534abcfc437ec3b037e273a6288a86af77d7504542d4cac0e9b871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a5a5e78a534abcfc437ec3b037e273a6288a86af77d7504542d4cac0e9b871->enter($__internal_d2a5a5e78a534abcfc437ec3b037e273a6288a86af77d7504542d4cac0e9b871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_form.html.twig"));

        // line 1
        $context["menu"] = $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->get("sylius.admin.product_form", array(), array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })())));
        // line 2
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 2, $this->getSourceContext()); })()), array("template" => "SyliusAdminBundle:Product:_menu.html.twig", "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_29c388a726ec272ba71cb4902f589b9b34b20af30bb21f41923f863a19c5d19f->leave($__internal_29c388a726ec272ba71cb4902f589b9b34b20af30bb21f41923f863a19c5d19f_prof);

        
        $__internal_d2a5a5e78a534abcfc437ec3b037e273a6288a86af77d7504542d4cac0e9b871->leave($__internal_d2a5a5e78a534abcfc437ec3b037e273a6288a86af77d7504542d4cac0e9b871_prof);

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
", "SyliusAdminBundle:Product:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/_form.html.twig");
    }
}
