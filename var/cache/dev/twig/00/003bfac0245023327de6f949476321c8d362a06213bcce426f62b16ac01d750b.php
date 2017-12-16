<?php

/* SyliusShopBundle:Product:_starRating.html.twig */
class __TwigTemplate_8a9159d52c36e6e4d4293cbc7c1f27c774738f23302744ddbfb43cd45061809d extends Twig_Template
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
        $__internal_5415fcba8188b27536bd3d975c4ec9dea8c724755491f4a3fa2d6047545317c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5415fcba8188b27536bd3d975c4ec9dea8c724755491f4a3fa2d6047545317c9->enter($__internal_5415fcba8188b27536bd3d975c4ec9dea8c724755491f4a3fa2d6047545317c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_starRating.html.twig"));

        $__internal_ef3be1bbc59afa872b8074b387eda30d4efa6af456bf4013b2bcf8bff4f292eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3be1bbc59afa872b8074b387eda30d4efa6af456bf4013b2bcf8bff4f292eb->enter($__internal_ef3be1bbc59afa872b8074b387eda30d4efa6af456bf4013b2bcf8bff4f292eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_starRating.html.twig"));

        // line 1
        echo "<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "averageRating", array())), "html", null, true);
        echo "\" data-max-rating=\"5\" data-average-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "averageRating", array()), 2), "html", null, true);
        echo "\" style=\"pointer-events: none;\"></div>
";
        
        $__internal_5415fcba8188b27536bd3d975c4ec9dea8c724755491f4a3fa2d6047545317c9->leave($__internal_5415fcba8188b27536bd3d975c4ec9dea8c724755491f4a3fa2d6047545317c9_prof);

        
        $__internal_ef3be1bbc59afa872b8074b387eda30d4efa6af456bf4013b2bcf8bff4f292eb->leave($__internal_ef3be1bbc59afa872b8074b387eda30d4efa6af456bf4013b2bcf8bff4f292eb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_starRating.html.twig";
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
        return new Twig_Source("<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"{{ product.averageRating|round }}\" data-max-rating=\"5\" data-average-rating=\"{{ product.averageRating|round(2) }}\" style=\"pointer-events: none;\"></div>
", "SyliusShopBundle:Product:_starRating.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/_starRating.html.twig");
    }
}
