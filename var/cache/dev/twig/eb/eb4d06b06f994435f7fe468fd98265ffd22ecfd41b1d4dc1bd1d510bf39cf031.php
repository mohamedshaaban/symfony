<?php

/* SyliusShopBundle:Product/Show:_header.html.twig */
class __TwigTemplate_14c94b2c14b93b3dd06bf22fe7ed86892e7f1e0c94316692a4cff717ed8558a1 extends Twig_Template
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
        $__internal_e57b7fcedf07574b7bc4056555aa87b99ba1fe1b78f3d1c8bf56f699ffc60a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57b7fcedf07574b7bc4056555aa87b99ba1fe1b78f3d1c8bf56f699ffc60a2c->enter($__internal_e57b7fcedf07574b7bc4056555aa87b99ba1fe1b78f3d1c8bf56f699ffc60a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_header.html.twig"));

        $__internal_cef2bd203ee536236fcb26d3d757b60b8f4a59e00dda82b3f78e53de0b6f5274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef2bd203ee536236fcb26d3d757b60b8f4a59e00dda82b3f78e53de0b6f5274->enter($__internal_cef2bd203ee536236fcb26d3d757b60b8f4a59e00dda82b3f78e53de0b6f5274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_header.html.twig"));

        // line 1
        echo "<h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h1>
";
        
        $__internal_e57b7fcedf07574b7bc4056555aa87b99ba1fe1b78f3d1c8bf56f699ffc60a2c->leave($__internal_e57b7fcedf07574b7bc4056555aa87b99ba1fe1b78f3d1c8bf56f699ffc60a2c_prof);

        
        $__internal_cef2bd203ee536236fcb26d3d757b60b8f4a59e00dda82b3f78e53de0b6f5274->leave($__internal_cef2bd203ee536236fcb26d3d757b60b8f4a59e00dda82b3f78e53de0b6f5274_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">{{ product.name }}</h1>
", "SyliusShopBundle:Product/Show:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_header.html.twig");
    }
}
