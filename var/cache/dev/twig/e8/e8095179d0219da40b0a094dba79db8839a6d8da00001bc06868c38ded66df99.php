<?php

/* SyliusAdminBundle:Product:_info.html.twig */
class __TwigTemplate_a176b130a14951fc5e6bac3a0c6c2bddbb8044467bb86d9fb545a44fc370d7ec extends Twig_Template
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
        $__internal_8342cfb79bd1d5cfdcc9e7c1dfca7a70afb3caf5456d7a1cc456a40b83be319f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8342cfb79bd1d5cfdcc9e7c1dfca7a70afb3caf5456d7a1cc456a40b83be319f->enter($__internal_8342cfb79bd1d5cfdcc9e7c1dfca7a70afb3caf5456d7a1cc456a40b83be319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_info.html.twig"));

        $__internal_f7bcbbd4768a60010aa5ff8be1018b45a001ad72c469e9a58ce00c628e486ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bcbbd4768a60010aa5ff8be1018b45a001ad72c469e9a58ce00c628e486ae2->enter($__internal_f7bcbbd4768a60010aa5ff8be1018b45a001ad72c469e9a58ce00c628e486ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_info.html.twig"));

        // line 1
        $context["product"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 1, $this->getSourceContext()); })()), "product", array());
        // line 2
        echo "
<div class=\"ui header\">
    ";
        // line 4
        $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "SyliusAdminBundle:Product:_info.html.twig", 4)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "filter" => "sylius_admin_product_tiny_thumbnail")));
        // line 5
        echo "    <div class=\"content\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"sylius-product-name\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</a>
        <span class=\"sub header sylius-product-variant-code\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 7, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "\">
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 8, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->getSourceContext()); })()), "hasOptions", array(), "method")) {
            // line 13
            echo "    <div class=\"ui horizontal divided list sylius-product-options\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 14, $this->getSourceContext()); })()), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 15
                echo "            <div class=\"item\" data-sylius-option-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["optionValue"], "name", array()), "html", null, true);
                echo "\">
                ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["optionValue"], "value", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
";
        } elseif ( !(null === twig_get_attribute($this->env, $this->getSourceContext(),         // line 20
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 20, $this->getSourceContext()); })()), "name", array()))) {
            // line 21
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 23, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        
        $__internal_8342cfb79bd1d5cfdcc9e7c1dfca7a70afb3caf5456d7a1cc456a40b83be319f->leave($__internal_8342cfb79bd1d5cfdcc9e7c1dfca7a70afb3caf5456d7a1cc456a40b83be319f_prof);

        
        $__internal_f7bcbbd4768a60010aa5ff8be1018b45a001ad72c469e9a58ce00c628e486ae2->leave($__internal_f7bcbbd4768a60010aa5ff8be1018b45a001ad72c469e9a58ce00c628e486ae2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  83 => 21,  81 => 20,  78 => 19,  69 => 16,  64 => 15,  60 => 14,  57 => 13,  55 => 12,  48 => 8,  44 => 7,  36 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = variant.product %}

<div class=\"ui header\">
    {% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_admin_product_tiny_thumbnail'} %}
    <div class=\"content\">
        <a href=\"{{ path('sylius_admin_product_update', {'id': product.id}) }}\" class=\"sylius-product-name\" title=\"{{ product.name }}\">{{ product.name }}</a>
        <span class=\"sub header sylius-product-variant-code\" title=\"{{ variant.code }}\">
            {{ variant.code }}
        </span>
    </div>
</div>
{% if product.hasOptions() %}
    <div class=\"ui horizontal divided list sylius-product-options\">
        {% for optionValue in variant.optionValues %}
            <div class=\"item\" data-sylius-option-name=\"{{ optionValue.name }}\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% elseif variant.name is not null %}
    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            {{ variant.name }}
        </div>
    </div>
{% endif %}
", "SyliusAdminBundle:Product:_info.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/_info.html.twig");
    }
}
