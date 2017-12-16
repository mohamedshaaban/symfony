<?php

/* SyliusShopBundle:Product/Show:_images.html.twig */
class __TwigTemplate_34036a203302334a5f3df4f7873f92bfa2dc33ea13ed2bc00608cc8eca03f876 extends Twig_Template
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
        $__internal_cb6e920f17050a831258f06329d483bc7753a50d952078daad68a702f60a8d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6e920f17050a831258f06329d483bc7753a50d952078daad68a702f60a8d78->enter($__internal_cb6e920f17050a831258f06329d483bc7753a50d952078daad68a702f60a8d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_images.html.twig"));

        $__internal_52f7f123f9856ead1544cded27f8d86028643a87447e23056342cc32ad8a51e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f7f123f9856ead1544cded27f8d86028643a87447e23056342cc32ad8a51e1->enter($__internal_52f7f123f9856ead1544cded27f8d86028643a87447e23056342cc32ad8a51e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_images.html.twig"));

        // line 1
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "imagesByType", array(0 => "main"), "method"))) {
            // line 2
            echo "    ";
            $context["source_path"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()), "imagesByType", array(0 => "main"), "method"), "first", array()), "path", array());
            // line 3
            echo "    ";
            $context["original_path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new Twig_Error_Runtime('Variable "source_path" does not exist.', 3, $this->getSourceContext()); })()), "sylius_shop_product_original");
            // line 4
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new Twig_Error_Runtime('Variable "source_path" does not exist.', 4, $this->getSourceContext()); })()), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 4, $this->getSourceContext()); })()), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->getSourceContext()); })()), "images", array()), "first", array())) {
            // line 6
            echo "    ";
            $context["source_path"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "images", array()), "first", array()), "path", array());
            // line 7
            echo "    ";
            $context["original_path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new Twig_Error_Runtime('Variable "source_path" does not exist.', 7, $this->getSourceContext()); })()), "sylius_shop_product_original");
            // line 8
            echo "    ";
            $context["path"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["source_path"]) || array_key_exists("source_path", $context) ? $context["source_path"] : (function () { throw new Twig_Error_Runtime('Variable "source_path" does not exist.', 8, $this->getSourceContext()); })()), ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 8, $this->getSourceContext()); })()), "sylius_shop_product_large_thumbnail")) : ("sylius_shop_product_large_thumbnail")));
        } else {
            // line 10
            echo "    ";
            $context["original_path"] = "//placehold.it/400x300";
            // line 11
            echo "    ";
            $context["path"] = (isset($context["original_path"]) || array_key_exists("original_path", $context) ? $context["original_path"] : (function () { throw new Twig_Error_Runtime('Variable "original_path" does not exist.', 11, $this->getSourceContext()); })());
        }
        // line 13
        echo "
<div data-product-image=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" data-product-link=\"";
        echo twig_escape_filter($this->env, (isset($context["original_path"]) || array_key_exists("original_path", $context) ? $context["original_path"] : (function () { throw new Twig_Error_Runtime('Variable "original_path" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\"></div>
<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["original_path"]) || array_key_exists("original_path", $context) ? $context["original_path"] : (function () { throw new Twig_Error_Runtime('Variable "original_path" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\" id=\"main-image\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\" />
</a>
";
        // line 18
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->getSourceContext()); })()), "images", array())) > 1)) {
            // line 19
            echo "<div class=\"ui divider\"></div>

";
            // line 21
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_thumbnails", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 21, $this->getSourceContext()); })()))));
            echo "

<div class=\"ui small images\">
    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->getSourceContext()); })()), "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 25
                echo "    ";
                $context["path"] = (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()))) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "sylius_shop_product_small_thumbnail")) : ("//placehold.it/200x200"));
                // line 26
                echo "    <div class=\"ui image\">
    ";
                // line 27
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 27, $this->getSourceContext()); })()), "isConfigurable", array(), "method") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 27, $this->getSourceContext()); })()), "variants", array())) > 0))) {
                    // line 28
                    echo "        ";
                    $this->loadTemplate("@SyliusShop/Product/Show/_imageVariants.html.twig", "SyliusShopBundle:Product/Show:_images.html.twig", 28)->display($context);
                    // line 29
                    echo "    ";
                }
                // line 30
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "sylius_shop_product_original"), "html", null, true);
                echo "\" data-lightbox=\"sylius-product-image\">
            <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
                echo "\" data-large-thumbnail=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "sylius_shop_product_large_thumbnail"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 31, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "\" />
        </a>
    </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "</div>
";
        }
        
        $__internal_cb6e920f17050a831258f06329d483bc7753a50d952078daad68a702f60a8d78->leave($__internal_cb6e920f17050a831258f06329d483bc7753a50d952078daad68a702f60a8d78_prof);

        
        $__internal_52f7f123f9856ead1544cded27f8d86028643a87447e23056342cc32ad8a51e1->leave($__internal_52f7f123f9856ead1544cded27f8d86028643a87447e23056342cc32ad8a51e1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 35,  123 => 31,  118 => 30,  115 => 29,  112 => 28,  110 => 27,  107 => 26,  104 => 25,  87 => 24,  81 => 21,  77 => 19,  75 => 18,  68 => 16,  64 => 15,  58 => 14,  55 => 13,  51 => 11,  48 => 10,  44 => 8,  41 => 7,  38 => 6,  36 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.imagesByType('main') is not empty %}
    {% set source_path = product.imagesByType('main').first.path %}
    {% set original_path = source_path|imagine_filter('sylius_shop_product_original') %}
    {% set path = source_path|imagine_filter(filter|default('sylius_shop_product_large_thumbnail')) %}
{% elseif product.images.first %}
    {% set source_path = product.images.first.path %}
    {% set original_path = source_path|imagine_filter('sylius_shop_product_original') %}
    {% set path = source_path|imagine_filter(filter|default('sylius_shop_product_large_thumbnail')) %}
{% else %}
    {% set original_path = '//placehold.it/400x300' %}
    {% set path = original_path %}
{% endif %}

<div data-product-image=\"{{ path }}\" data-product-link=\"{{ original_path }}\"></div>
<a href=\"{{ original_path }}\" class=\"ui fluid image\" data-lightbox=\"sylius-product-image\">
    <img src=\"{{ path }}\" id=\"main-image\" alt=\"{{ product.name }}\" />
</a>
{% if product.images|length > 1 %}
<div class=\"ui divider\"></div>

{{ sonata_block_render_event('sylius.shop.product.show.before_thumbnails', {'product': product}) }}

<div class=\"ui small images\">
    {% for image in product.images %}
    {% set path = image.path is not null ? image.path|imagine_filter('sylius_shop_product_small_thumbnail') : '//placehold.it/200x200' %}
    <div class=\"ui image\">
    {% if product.isConfigurable() and product.variants|length > 0 %}
        {% include '@SyliusShop/Product/Show/_imageVariants.html.twig' %}
    {% endif %}
        <a href=\"{{ image.path|imagine_filter('sylius_shop_product_original') }}\" data-lightbox=\"sylius-product-image\">
            <img src=\"{{ path }}\" data-large-thumbnail=\"{{ image.path|imagine_filter('sylius_shop_product_large_thumbnail') }}\" alt=\"{{ product.name }}\" />
        </a>
    </div>
    {% endfor %}
</div>
{% endif %}
", "SyliusShopBundle:Product/Show:_images.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_images.html.twig");
    }
}
