<?php

/* SyliusShopBundle:Product/Show/Tabs:_attributes.html.twig */
class __TwigTemplate_7eccb4e0efee25629d7a451192a0c58836151ab26034389e330a8816347a250d extends Twig_Template
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
        $__internal_5b2f9b983505f59b30ab8b0a954505b8c97c8c5f7ac5983aebec4f5fa4d51b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2f9b983505f59b30ab8b0a954505b8c97c8c5f7ac5983aebec4f5fa4d51b67->enter($__internal_5b2f9b983505f59b30ab8b0a954505b8c97c8c5f7ac5983aebec4f5fa4d51b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_attributes.html.twig"));

        $__internal_2e9edd648aa5123fb0a81680cc381214d4ae2d5c71b3db4c7e9cca2b863f38c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9edd648aa5123fb0a81680cc381214d4ae2d5c71b3db4c7e9cca2b863f38c4->enter($__internal_2e9edd648aa5123fb0a81680cc381214d4ae2d5c71b3db4c7e9cca2b863f38c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_attributes.html.twig"));

        // line 1
        echo "<div class=\"ui bottom attached tab segment\" data-tab=\"attributes\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_attributes", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()))));
        echo "

    <table id=\"sylius-product-attributes\" class=\"ui definition table\">
        <tbody>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "getAttributesByLocale", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "locale", array()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "defaultLocale", array()), 2 => (isset($context["sylius_base_locale"]) || array_key_exists("sylius_base_locale", $context) ? $context["sylius_base_locale"] : (function () { throw new Twig_Error_Runtime('Variable "sylius_base_locale" does not exist.', 6, $this->getSourceContext()); })())), "method"), "attribute.position"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 7
            echo "            <tr>
                <td class=\"sylius-product-attribute-name\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attribute"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"sylius-product-attribute-value\">
                    ";
            // line 10
            $this->loadTemplate(array(0 => (("SyliusAttributeBundle:Types:" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["attribute"], "attribute", array()), "type", array())) . ".html.twig"), 1 => "SyliusAttributeBundle:Types:default.html.twig"), "SyliusShopBundle:Product/Show/Tabs:_attributes.html.twig", 10)->display(array_merge($context, array("attribute" => $context["attribute"])));
            // line 11
            echo "                </td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_5b2f9b983505f59b30ab8b0a954505b8c97c8c5f7ac5983aebec4f5fa4d51b67->leave($__internal_5b2f9b983505f59b30ab8b0a954505b8c97c8c5f7ac5983aebec4f5fa4d51b67_prof);

        
        $__internal_2e9edd648aa5123fb0a81680cc381214d4ae2d5c71b3db4c7e9cca2b863f38c4->leave($__internal_2e9edd648aa5123fb0a81680cc381214d4ae2d5c71b3db4c7e9cca2b863f38c4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  62 => 11,  60 => 10,  55 => 8,  52 => 7,  35 => 6,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui bottom attached tab segment\" data-tab=\"attributes\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_attributes', {'product': product}) }}

    <table id=\"sylius-product-attributes\" class=\"ui definition table\">
        <tbody>
        {% for attribute in product.getAttributesByLocale(configuration.request.locale, configuration.request.defaultLocale, sylius_base_locale)|sort_by('attribute.position') %}
            <tr>
                <td class=\"sylius-product-attribute-name\">{{ attribute.name }}</td>
                <td class=\"sylius-product-attribute-value\">
                    {% include [('SyliusAttributeBundle:Types:'~attribute.attribute.type~'.html.twig'), 'SyliusAttributeBundle:Types:default.html.twig'] with {'attribute': attribute} %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "SyliusShopBundle:Product/Show/Tabs:_attributes.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/Tabs/_attributes.html.twig");
    }
}
