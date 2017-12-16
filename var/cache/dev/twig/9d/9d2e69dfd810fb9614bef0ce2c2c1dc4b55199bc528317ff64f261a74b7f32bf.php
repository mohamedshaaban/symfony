<?php

/* SyliusAdminBundle:Product:_mainImage.html.twig */
class __TwigTemplate_670734d4ba1ee6c905c51a8538fb57361ce4d1ceddeb4e7e61e0267729a7e57b extends Twig_Template
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
        $__internal_60204ebab82a2409fda9e40eafd60ee9d19c90149c458d30c4ce6d50141c2d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60204ebab82a2409fda9e40eafd60ee9d19c90149c458d30c4ce6d50141c2d5a->enter($__internal_60204ebab82a2409fda9e40eafd60ee9d19c90149c458d30c4ce6d50141c2d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_mainImage.html.twig"));

        $__internal_6dacfd52b0fb2fae45e7b20cfec7bcd597e7ea30146462733a8b78095f60278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dacfd52b0fb2fae45e7b20cfec7bcd597e7ea30146462733a8b78095f60278b->enter($__internal_6dacfd52b0fb2fae45e7b20cfec7bcd597e7ea30146462733a8b78095f60278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_mainImage.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "imagesByType", array(0 => "thumbnail"), "method"))) {
            // line 2
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()), "imagesByType", array(0 => "thumbnail"), "method"), "first", array()), "path", array()), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 2, $this->getSourceContext()); })()), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 3
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->getSourceContext()); })()), "images", array()), "first", array())) {
            // line 4
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "images", array()), "first", array()), "path", array()), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 4, $this->getSourceContext()); })()), "sylius_admin_product_thumbnail")) : ("sylius_admin_product_thumbnail")));
        } else {
            // line 6
            echo "    ";
            $context["path"] = "//placehold.it/50x50";
        }
        // line 8
        echo "
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\" alt=\"\" class=\"ui bordered image\" />
";
        
        $__internal_60204ebab82a2409fda9e40eafd60ee9d19c90149c458d30c4ce6d50141c2d5a->leave($__internal_60204ebab82a2409fda9e40eafd60ee9d19c90149c458d30c4ce6d50141c2d5a_prof);

        
        $__internal_6dacfd52b0fb2fae45e7b20cfec7bcd597e7ea30146462733a8b78095f60278b->leave($__internal_6dacfd52b0fb2fae45e7b20cfec7bcd597e7ea30146462733a8b78095f60278b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_mainImage.html.twig";
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
    {% set path = product.imagesByType('thumbnail').first.path|imagine_filter(filter|default('sylius_admin_product_thumbnail')) %}
{% elseif product.images.first %}
    {% set path = product.images.first.path|imagine_filter(filter|default('sylius_admin_product_thumbnail')) %}
{% else %}
    {% set path = '//placehold.it/50x50' %}
{% endif %}

<img src=\"{{ path }}\" alt=\"\" class=\"ui bordered image\" />
", "SyliusAdminBundle:Product:_mainImage.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/_mainImage.html.twig");
    }
}
