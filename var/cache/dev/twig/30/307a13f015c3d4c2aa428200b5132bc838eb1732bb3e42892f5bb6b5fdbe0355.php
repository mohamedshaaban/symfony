<?php

/* @SyliusShop/Product/Show/_header.html.twig */
class __TwigTemplate_733bab73a77417f29c2ff740ad5b1ee21a662a34b598609c3d0e2d27c331d8fc extends Twig_Template
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
        $__internal_ad577ce3ef4277359d67de9d2e1a7151ed20370ca67b6f1e7db61e75007bae02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad577ce3ef4277359d67de9d2e1a7151ed20370ca67b6f1e7db61e75007bae02->enter($__internal_ad577ce3ef4277359d67de9d2e1a7151ed20370ca67b6f1e7db61e75007bae02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_header.html.twig"));

        $__internal_fc989aedabf07966364d54f9e6d2bd0fa675cd94026a5cf5b18c73635dc13dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc989aedabf07966364d54f9e6d2bd0fa675cd94026a5cf5b18c73635dc13dd3->enter($__internal_fc989aedabf07966364d54f9e6d2bd0fa675cd94026a5cf5b18c73635dc13dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_header.html.twig"));

        // line 1
        echo "<h1 id=\"sylius-product-name\" class=\"ui monster dividing header\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h1>
";
        
        $__internal_ad577ce3ef4277359d67de9d2e1a7151ed20370ca67b6f1e7db61e75007bae02->leave($__internal_ad577ce3ef4277359d67de9d2e1a7151ed20370ca67b6f1e7db61e75007bae02_prof);

        
        $__internal_fc989aedabf07966364d54f9e6d2bd0fa675cd94026a5cf5b18c73635dc13dd3->leave($__internal_fc989aedabf07966364d54f9e6d2bd0fa675cd94026a5cf5b18c73635dc13dd3_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_header.html.twig";
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
", "@SyliusShop/Product/Show/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_header.html.twig");
    }
}
