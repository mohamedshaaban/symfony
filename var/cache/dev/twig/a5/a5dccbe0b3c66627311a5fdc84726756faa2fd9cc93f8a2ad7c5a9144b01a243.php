<?php

/* SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig */
class __TwigTemplate_24e323ee9e77b4a6b1bd18a42f7e589894b6bccd3bbaf52a0d450bc4b7b4e2ad extends Twig_Template
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
        $__internal_6815923decd2db6752cd75e561558a78d76d482b7e8a670761ae4b180079816b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6815923decd2db6752cd75e561558a78d76d482b7e8a670761ae4b180079816b->enter($__internal_6815923decd2db6752cd75e561558a78d76d482b7e8a670761ae4b180079816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig"));

        $__internal_ef3fe4e0c967910bc53cf033132f4610c8e05e8569029467e5f7976ddbcd0341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3fe4e0c967910bc53cf033132f4610c8e05e8569029467e5f7976ddbcd0341->enter($__internal_ef3fe4e0c967910bc53cf033132f4610c8e05e8569029467e5f7976ddbcd0341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig"));

        // line 1
        echo "<span class=\"ui small header\">
    ";
        // line 2
        $context["product"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()), "product", array());
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "name", array()))) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 3, $this->getSourceContext()); })()), "name", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        echo "
</span>
";
        // line 5
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 5, $this->getSourceContext()); })()), "optionValues", array())) > 0)) {
            // line 6
            echo "    <br>
    <div class=\"ui horizontal divided list\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->getSourceContext()); })()), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 9
                echo "            <div class=\"item\">
                ";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["optionValue"], "value", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
";
        }
        
        $__internal_6815923decd2db6752cd75e561558a78d76d482b7e8a670761ae4b180079816b->leave($__internal_6815923decd2db6752cd75e561558a78d76d482b7e8a670761ae4b180079816b_prof);

        
        $__internal_ef3fe4e0c967910bc53cf033132f4610c8e05e8569029467e5f7976ddbcd0341->leave($__internal_ef3fe4e0c967910bc53cf033132f4610c8e05e8569029467e5f7976ddbcd0341_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  49 => 10,  46 => 9,  42 => 8,  38 => 6,  36 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui small header\">
    {% set product = data.product %}
    {{ data.name is null ? product.name : data.name }}
</span>
{% if data.optionValues|length > 0 %}
    <br>
    <div class=\"ui horizontal divided list\">
        {% for optionValue in data.optionValues %}
            <div class=\"item\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% endif %}
", "SyliusAdminBundle:ProductVariant/Grid/Field:name.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Grid/Field/name.html.twig");
    }
}
