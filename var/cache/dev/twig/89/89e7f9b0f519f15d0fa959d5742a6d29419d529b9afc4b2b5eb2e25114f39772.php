<?php

/* SyliusShopBundle:Product:_box.html.twig */
class __TwigTemplate_5e742bf6c93f508c028754679ee8883d7a3793613bdcd4edebf70c56db556298 extends Twig_Template
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
        $__internal_d44188dfb3c03656622ef489ffbbd402202f512ef131bedd6cd700a318fca794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44188dfb3c03656622ef489ffbbd402202f512ef131bedd6cd700a318fca794->enter($__internal_d44188dfb3c03656622ef489ffbbd402202f512ef131bedd6cd700a318fca794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_box.html.twig"));

        $__internal_fab7cbb3bb315d56e86777743bae52f35af50540a612bd062ea69fbc4dcd8bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab7cbb3bb315d56e86777743bae52f35af50540a612bd062ea69fbc4dcd8bbe->enter($__internal_fab7cbb3bb315d56e86777743bae52f35af50540a612bd062ea69fbc4dcd8bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_box.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product:_box.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->getSourceContext()); })()))));
        echo "

<div class=\"ui fluid card\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_show", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_more"), "html", null, true);
        echo "</div>
                </div>
            </div>
        </div>
        ";
        // line 14
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "SyliusShopBundle:Product:_box.html.twig", 14)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->getSourceContext()); })()))));
        // line 15
        echo "    </a>
    <div class=\"content\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_show", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"header sylius-product-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 17, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</a>
        ";
        // line 18
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->getSourceContext()); })()), "variants", array()), "empty", array(), "method")) {
            // line 19
            echo "            <div class=\"sylius-product-price\">";
            echo $context["money"]->macro_calculatePrice(call_user_func_array($this->env->getFilter('sylius_resolve_variant')->getCallable(), array((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->getSourceContext()); })()))));
            echo "</div>
        ";
        }
        // line 21
        echo "    </div>
</div>

";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_box", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d44188dfb3c03656622ef489ffbbd402202f512ef131bedd6cd700a318fca794->leave($__internal_d44188dfb3c03656622ef489ffbbd402202f512ef131bedd6cd700a318fca794_prof);

        
        $__internal_fab7cbb3bb315d56e86777743bae52f35af50540a612bd062ea69fbc4dcd8bbe->leave($__internal_fab7cbb3bb315d56e86777743bae52f35af50540a612bd062ea69fbc4dcd8bbe_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  70 => 21,  64 => 19,  62 => 18,  56 => 17,  52 => 15,  50 => 14,  43 => 10,  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{{ sonata_block_render_event('sylius.shop.product.index.before_box', {'product': product}) }}

<div class=\"ui fluid card\">
    <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"blurring dimmable image\">
        <div class=\"ui dimmer\">
            <div class=\"content\">
                <div class=\"center\">
                    <div class=\"ui inverted button\">{{ 'sylius.ui.view_more'|trans }}</div>
                </div>
            </div>
        </div>
        {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product} %}
    </a>
    <div class=\"content\">
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"header sylius-product-name\">{{ product.name }}</a>
        {% if not product.variants.empty() %}
            <div class=\"sylius-product-price\">{{ money.calculatePrice(product|sylius_resolve_variant) }}</div>
        {% endif %}
    </div>
</div>

{{ sonata_block_render_event('sylius.shop.product.index.after_box', {'product': product}) }}
", "SyliusShopBundle:Product:_box.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/_box.html.twig");
    }
}
