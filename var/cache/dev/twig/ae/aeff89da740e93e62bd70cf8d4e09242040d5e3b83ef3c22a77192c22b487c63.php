<?php

/* SyliusShopBundle:Taxon:_horizontalMenu.html.twig */
class __TwigTemplate_56e70a476b3c9a1ce0a2518c671ef907b87a478ef7d0b0801e233c2617421e2f extends Twig_Template
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
        $__internal_0aa2da30c34ae403f9d355032a0cabfac3e33c16d1a828382dfca64ad7bd8578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa2da30c34ae403f9d355032a0cabfac3e33c16d1a828382dfca64ad7bd8578->enter($__internal_0aa2da30c34ae403f9d355032a0cabfac3e33c16d1a828382dfca64ad7bd8578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_horizontalMenu.html.twig"));

        $__internal_25c7f3cb0c25a53edb9a4807bc85abb82f4a3c1a07a54ac87afed1eb452f21e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c7f3cb0c25a53edb9a4807bc85abb82f4a3c1a07a54ac87afed1eb452f21e5->enter($__internal_25c7f3cb0c25a53edb9a4807bc85abb82f4a3c1a07a54ac87afed1eb452f21e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_horizontalMenu.html.twig"));

        // line 18
        echo "
";
        // line 19
        $context["macros"] = $this;
        // line 20
        echo "
";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 21, $this->getSourceContext()); })())) > 0)) {
            // line 22
            echo "<div class=\"ui large stackable menu\">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 23, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 24
                echo "        ";
                echo $context["macros"]->macro_item($context["taxon"]);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</div>
";
        }
        
        $__internal_0aa2da30c34ae403f9d355032a0cabfac3e33c16d1a828382dfca64ad7bd8578->leave($__internal_0aa2da30c34ae403f9d355032a0cabfac3e33c16d1a828382dfca64ad7bd8578_prof);

        
        $__internal_25c7f3cb0c25a53edb9a4807bc85abb82f4a3c1a07a54ac87afed1eb452f21e5->leave($__internal_25c7f3cb0c25a53edb9a4807bc85abb82f4a3c1a07a54ac87afed1eb452f21e5_prof);

    }

    // line 1
    public function macro_item($__taxon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxon" => $__taxon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_076f6e33c99c5aaf12887faebba6dcf4338d1fcd4f0c2b50512ae9b8c0595dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_076f6e33c99c5aaf12887faebba6dcf4338d1fcd4f0c2b50512ae9b8c0595dd7->enter($__internal_076f6e33c99c5aaf12887faebba6dcf4338d1fcd4f0c2b50512ae9b8c0595dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            $__internal_bde08af98c5d2c636fb9fd21452a2d825d8e0d6f1d8a7c50c579777b2a89fd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bde08af98c5d2c636fb9fd21452a2d825d8e0d6f1d8a7c50c579777b2a89fd7d->enter($__internal_bde08af98c5d2c636fb9fd21452a2d825d8e0d6f1d8a7c50c579777b2a89fd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            // line 2
            echo "    ";
            $context["macros"] = $this;
            // line 3
            echo "
    ";
            // line 4
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 4, $this->getSourceContext()); })()), "children", array())) > 0)) {
                // line 5
                echo "        <div class=\"ui dropdown item\">
            <span class=\"text\">";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 9, $this->getSourceContext()); })()), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["childTaxon"]) {
                    // line 10
                    echo "                    ";
                    echo $context["macros"]->macro_item($context["childTaxon"]);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childTaxon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            </div>
        </div>
    ";
            } else {
                // line 15
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 15, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 15, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 15, $this->getSourceContext()); })()), "name", array()), "html", null, true);
                echo "</a>
    ";
            }
            
            $__internal_bde08af98c5d2c636fb9fd21452a2d825d8e0d6f1d8a7c50c579777b2a89fd7d->leave($__internal_bde08af98c5d2c636fb9fd21452a2d825d8e0d6f1d8a7c50c579777b2a89fd7d_prof);

            
            $__internal_076f6e33c99c5aaf12887faebba6dcf4338d1fcd4f0c2b50512ae9b8c0595dd7->leave($__internal_076f6e33c99c5aaf12887faebba6dcf4338d1fcd4f0c2b50512ae9b8c0595dd7_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_horizontalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 15,  111 => 12,  102 => 10,  98 => 9,  92 => 6,  89 => 5,  87 => 4,  84 => 3,  81 => 2,  63 => 1,  51 => 26,  42 => 24,  38 => 23,  35 => 22,  33 => 21,  30 => 20,  28 => 19,  25 => 18,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro item(taxon) %}
    {% import _self as macros %}

    {% if taxon.children|length > 0 %}
        <div class=\"ui dropdown item\">
            <span class=\"text\">{{ taxon.name }}</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                {% for childTaxon in taxon.children %}
                    {{ macros.item(childTaxon) }}
                {% endfor %}
            </div>
        </div>
    {% else %}
        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"item\">{{ taxon.name }}</a>
    {% endif %}
{% endmacro %}

{% import _self as macros %}

{% if taxons|length > 0 %}
<div class=\"ui large stackable menu\">
    {% for taxon in taxons %}
        {{ macros.item(taxon) }}
    {% endfor %}
</div>
{% endif %}
", "SyliusShopBundle:Taxon:_horizontalMenu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Taxon/_horizontalMenu.html.twig");
    }
}
