<?php

/* SyliusAdminBundle:ProductReview:_product.html.twig */
class __TwigTemplate_486b45105d5dbe47131c6eb9225b2398b91db89a7e662a6755452539b13387d3 extends Twig_Template
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
        $__internal_4e02c097363a42f31519308f9345e8ee6e5539aebf21c5d498a8180db5f52f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e02c097363a42f31519308f9345e8ee6e5539aebf21c5d498a8180db5f52f96->enter($__internal_4e02c097363a42f31519308f9345e8ee6e5539aebf21c5d498a8180db5f52f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_product.html.twig"));

        $__internal_0b806f23b774cc744da13b9bd8b37553c74c687927531f785cd81aa7cf520455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b806f23b774cc744da13b9bd8b37553c74c687927531f785cd81aa7cf520455->enter($__internal_0b806f23b774cc744da13b9bd8b37553c74c687927531f785cd81aa7cf520455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_product.html.twig"));

        // line 1
        $context["product"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product_review"]) || array_key_exists("product_review", $context) ? $context["product_review"] : (function () { throw new Twig_Error_Runtime('Variable "product_review" does not exist.', 1, $this->getSourceContext()); })()), "reviewSubject", array());
        // line 2
        echo "
<h4 class=\"ui top attached styled header\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.product"), "html", null, true);
        echo "
</h4>
<div class=\"ui attached segment\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 7, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"header sylius-product-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_4e02c097363a42f31519308f9345e8ee6e5539aebf21c5d498a8180db5f52f96->leave($__internal_4e02c097363a42f31519308f9345e8ee6e5539aebf21c5d498a8180db5f52f96_prof);

        
        $__internal_0b806f23b774cc744da13b9bd8b37553c74c687927531f785cd81aa7cf520455->leave($__internal_0b806f23b774cc744da13b9bd8b37553c74c687927531f785cd81aa7cf520455_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview:_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = product_review.reviewSubject %}

<h4 class=\"ui top attached styled header\">
    {{ 'sylius.ui.product'|trans }}
</h4>
<div class=\"ui attached segment\">
    <a href=\"{{ path('sylius_admin_product_update', {'id': product.id}) }}\" class=\"header sylius-product-name\">{{ product.name }}</a>
</div>
", "SyliusAdminBundle:ProductReview:_product.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductReview/_product.html.twig");
    }
}
