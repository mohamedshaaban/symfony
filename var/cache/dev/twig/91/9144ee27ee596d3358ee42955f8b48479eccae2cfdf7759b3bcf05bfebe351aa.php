<?php

/* SyliusShopBundle:Product/Show:_price.html.twig */
class __TwigTemplate_7bc55c79c9e69029be364aa3dd224281587483355abbc56f706310289f5339c4 extends Twig_Template
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
        $__internal_6a5d7e82d11026809ce6847f1bb9d888cbe6580954032b6ee3fb71e7b70a2abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5d7e82d11026809ce6847f1bb9d888cbe6580954032b6ee3fb71e7b70a2abc->enter($__internal_6a5d7e82d11026809ce6847f1bb9d888cbe6580954032b6ee3fb71e7b70a2abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_price.html.twig"));

        $__internal_22866e7ebbdc4289a598cf9b166ef935d50db2229fab89d11c850809d0ff445f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22866e7ebbdc4289a598cf9b166ef935d50db2229fab89d11c850809d0ff445f->enter($__internal_22866e7ebbdc4289a598cf9b166ef935d50db2229fab89d11c850809d0ff445f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_price.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product/Show:_price.html.twig", 1);
        // line 2
        echo "
<span class=\"ui huge header\" id=\"product-price\">
    ";
        // line 4
        echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()))));
        echo "
</span>
";
        
        $__internal_6a5d7e82d11026809ce6847f1bb9d888cbe6580954032b6ee3fb71e7b70a2abc->leave($__internal_6a5d7e82d11026809ce6847f1bb9d888cbe6580954032b6ee3fb71e7b70a2abc_prof);

        
        $__internal_22866e7ebbdc4289a598cf9b166ef935d50db2229fab89d11c850809d0ff445f->leave($__internal_22866e7ebbdc4289a598cf9b166ef935d50db2229fab89d11c850809d0ff445f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<span class=\"ui huge header\" id=\"product-price\">
    {{ money.calculatePrice(product|sylius_resolve_variant) }}
</span>
", "SyliusShopBundle:Product/Show:_price.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_price.html.twig");
    }
}
