<?php

/* @SyliusShop/Product/_starRating.html.twig */
class __TwigTemplate_c8cf4174b83a1d34b43346ec5b6b8e5bf1ac6cc109ef3cc3572f780604a63394 extends Twig_Template
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
        $__internal_6b806728fdac1e8fcf4e6d3857c9470d60498a96685753a5d2e9d9e958ced74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b806728fdac1e8fcf4e6d3857c9470d60498a96685753a5d2e9d9e958ced74c->enter($__internal_6b806728fdac1e8fcf4e6d3857c9470d60498a96685753a5d2e9d9e958ced74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_starRating.html.twig"));

        $__internal_4a6e9abf3c5671530176b7dfa94d30d67278c2a174b970537bbbf75340d05a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6e9abf3c5671530176b7dfa94d30d67278c2a174b970537bbbf75340d05a27->enter($__internal_4a6e9abf3c5671530176b7dfa94d30d67278c2a174b970537bbbf75340d05a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_starRating.html.twig"));

        // line 1
        echo "<div id=\"average-rating\" class=\"ui star large rating\" data-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "averageRating", array())), "html", null, true);
        echo "\" data-max-rating=\"5\" data-average-rating=\"";
        echo twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "averageRating", array()), 2), "html", null, true);
        echo "\" style=\"pointer-events: none;\"></div>
";
        
        $__internal_6b806728fdac1e8fcf4e6d3857c9470d60498a96685753a5d2e9d9e958ced74c->leave($__internal_6b806728fdac1e8fcf4e6d3857c9470d60498a96685753a5d2e9d9e958ced74c_prof);

        
        $__internal_4a6e9abf3c5671530176b7dfa94d30d67278c2a174b970537bbbf75340d05a27->leave($__internal_4a6e9abf3c5671530176b7dfa94d30d67278c2a174b970537bbbf75340d05a27_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_starRating.html.twig";
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
", "@SyliusShop/Product/_starRating.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\_starRating.html.twig");
    }
}
