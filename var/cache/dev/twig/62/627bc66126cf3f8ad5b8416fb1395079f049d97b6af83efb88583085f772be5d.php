<?php

/* SyliusShopBundle:Product/Show:_variants.html.twig */
class __TwigTemplate_51dc2a4a3dd56a25fdb4ca4d447078b6de473c27c8796b228eda3357d9e1e17b extends Twig_Template
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
        $__internal_054858eae22897ca13f199dc790a85e7253139c8ec34c115afc9736ce22c1aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054858eae22897ca13f199dc790a85e7253139c8ec34c115afc9736ce22c1aec->enter($__internal_054858eae22897ca13f199dc790a85e7253139c8ec34c115afc9736ce22c1aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_variants.html.twig"));

        $__internal_ce880e03bbc3e29a49102ad7f451520c972bd02158cf0968caacc9a7185a533e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce880e03bbc3e29a49102ad7f451520c972bd02158cf0968caacc9a7185a533e->enter($__internal_ce880e03bbc3e29a49102ad7f451520c972bd02158cf0968caacc9a7185a533e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_variants.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product/Show:_variants.html.twig", 1);
        // line 2
        echo "
<table class=\"ui single line small table\" id=\"sylius-product-variants\">
    <thead>
    <tr>
        <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variant"), "html", null, true);
        echo "</th>
        <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.price"), "html", null, true);
        echo "</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->getSourceContext()); })()), "variants", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
            // line 13
            echo "        <tr>
            <td>
                ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "name", array()), "html", null, true);
            echo "
                ";
            // line 16
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 16, $this->getSourceContext()); })()), "hasOptions", array(), "method")) {
                // line 17
                echo "                    <div class=\"ui horizontal divided list\">
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "optionValues", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                    // line 19
                    echo "                            <div class=\"item\">
                                ";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["optionValue"], "value", array()), "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </div>
                ";
            }
            // line 25
            echo "            </td>
            <td class=\"sylius-product-variant-price\">";
            // line 26
            echo $context["money"]->macro_calculatePrice($context["variant"]);
            echo "</td>
            <td class=\"right aligned\">
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "cartItem", array()), "variant", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"), 'widget', array("label" => false));
            echo "
            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>
";
        
        $__internal_054858eae22897ca13f199dc790a85e7253139c8ec34c115afc9736ce22c1aec->leave($__internal_054858eae22897ca13f199dc790a85e7253139c8ec34c115afc9736ce22c1aec_prof);

        
        $__internal_ce880e03bbc3e29a49102ad7f451520c972bd02158cf0968caacc9a7185a533e->leave($__internal_ce880e03bbc3e29a49102ad7f451520c972bd02158cf0968caacc9a7185a533e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_variants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  103 => 28,  98 => 26,  95 => 25,  91 => 23,  82 => 20,  79 => 19,  75 => 18,  72 => 17,  70 => 16,  66 => 15,  62 => 13,  45 => 12,  37 => 7,  33 => 6,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<table class=\"ui single line small table\" id=\"sylius-product-variants\">
    <thead>
    <tr>
        <th>{{ 'sylius.ui.variant'|trans }}</th>
        <th>{{ 'sylius.ui.price'|trans }}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {% for variant in product.variants %}
        <tr>
            <td>
                {{ variant.name }}
                {% if product.hasOptions() %}
                    <div class=\"ui horizontal divided list\">
                        {% for optionValue in variant.optionValues %}
                            <div class=\"item\">
                                {{ optionValue.value }}
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}
            </td>
            <td class=\"sylius-product-variant-price\">{{ money.calculatePrice(variant) }}</td>
            <td class=\"right aligned\">
                {{ form_widget(form.cartItem.variant[loop.index0], {'label': false}) }}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "SyliusShopBundle:Product/Show:_variants.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_variants.html.twig");
    }
}
