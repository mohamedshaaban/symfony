<?php

/* @SyliusAdmin/Product/_mainImage.html.twig */
class __TwigTemplate_9b0d4200a1b6e4e0fb2714c8ad843e8a5c2256a7756cc58cf69bc54438503842 extends Twig_Template
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
        $__internal_625f062a26bf79806fea59d45690de0c380604e457f586953256812242c9bd47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625f062a26bf79806fea59d45690de0c380604e457f586953256812242c9bd47->enter($__internal_625f062a26bf79806fea59d45690de0c380604e457f586953256812242c9bd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_mainImage.html.twig"));

        $__internal_c5e69e67be6466b450f491cee337cb7ae8918ceb1a9325019d276495cabc7117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e69e67be6466b450f491cee337cb7ae8918ceb1a9325019d276495cabc7117->enter($__internal_c5e69e67be6466b450f491cee337cb7ae8918ceb1a9325019d276495cabc7117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/_mainImage.html.twig"));

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
        
        $__internal_625f062a26bf79806fea59d45690de0c380604e457f586953256812242c9bd47->leave($__internal_625f062a26bf79806fea59d45690de0c380604e457f586953256812242c9bd47_prof);

        
        $__internal_c5e69e67be6466b450f491cee337cb7ae8918ceb1a9325019d276495cabc7117->leave($__internal_c5e69e67be6466b450f491cee337cb7ae8918ceb1a9325019d276495cabc7117_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/_mainImage.html.twig";
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
", "@SyliusAdmin/Product/_mainImage.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\_mainImage.html.twig");
    }
}
