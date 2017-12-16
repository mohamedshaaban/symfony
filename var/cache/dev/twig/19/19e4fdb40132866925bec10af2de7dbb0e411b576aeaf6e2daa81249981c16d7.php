<?php

/* @SyliusShop/Product/_mainImage.html.twig */
class __TwigTemplate_65aaaaeef85c1616e45bd77d6de3e97667127d1d044b9496c1970aa850aa9faf extends Twig_Template
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
        $__internal_47b01f299e0322e5a2f5f3430bdb87f2c346684800ccdda1a6d2b4abd9cb705f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b01f299e0322e5a2f5f3430bdb87f2c346684800ccdda1a6d2b4abd9cb705f->enter($__internal_47b01f299e0322e5a2f5f3430bdb87f2c346684800ccdda1a6d2b4abd9cb705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_mainImage.html.twig"));

        $__internal_13c79b62118dc452d872ff81b787e1784c1faaeb311c9ea4a1e98c1b9897fc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c79b62118dc452d872ff81b787e1784c1faaeb311c9ea4a1e98c1b9897fc2e->enter($__internal_13c79b62118dc452d872ff81b787e1784c1faaeb311c9ea4a1e98c1b9897fc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/_mainImage.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "imagesByType", array(0 => "thumbnail"), "method"))) {
            // line 2
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()), "imagesByType", array(0 => "thumbnail"), "method"), "first", array()), "path", array()), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 2, $this->getSourceContext()); })()), "sylius_shop_product_thumbnail")) : ("sylius_shop_product_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 3
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->getSourceContext()); })()), "images", array()), "first", array())) {
            // line 4
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "images", array()), "first", array()), "path", array()), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 4, $this->getSourceContext()); })()), "sylius_shop_product_thumbnail")) : ("sylius_shop_product_thumbnail")));
        } else {
            // line 6
            echo "    ";
            $context["path"] = "//placehold.it/200x200";
        }
        // line 8
        echo "
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 9, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\" class=\"ui bordered image\" />
";
        
        $__internal_47b01f299e0322e5a2f5f3430bdb87f2c346684800ccdda1a6d2b4abd9cb705f->leave($__internal_47b01f299e0322e5a2f5f3430bdb87f2c346684800ccdda1a6d2b4abd9cb705f_prof);

        
        $__internal_13c79b62118dc452d872ff81b787e1784c1faaeb311c9ea4a1e98c1b9897fc2e->leave($__internal_13c79b62118dc452d872ff81b787e1784c1faaeb311c9ea4a1e98c1b9897fc2e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/_mainImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  40 => 8,  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.imagesByType('thumbnail') is not empty %}
    {% set path = product.imagesByType('thumbnail').first.path|imagine_filter(filter|default('sylius_shop_product_thumbnail')) %}
{% elseif product.images.first %}
    {% set path = product.images.first.path|imagine_filter(filter|default('sylius_shop_product_thumbnail')) %}
{% else %}
    {% set path = '//placehold.it/200x200' %}
{% endif %}

<img src=\"{{ path }}\" alt=\"{{ product.name }}\" class=\"ui bordered image\" />
", "@SyliusShop/Product/_mainImage.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\_mainImage.html.twig");
    }
}
