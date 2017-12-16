<?php

/* SyliusAttributeBundle:Types:select.html.twig */
class __TwigTemplate_2cf7968ad2c6f350b970e29aca13a1a7dcb67e28e7261daa327f3091701bf302 extends Twig_Template
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
        $__internal_a8930d48be82bfd49db82daaa6196e6aef982f56771b1c5500c4ed631b907576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8930d48be82bfd49db82daaa6196e6aef982f56771b1c5500c4ed631b907576->enter($__internal_a8930d48be82bfd49db82daaa6196e6aef982f56771b1c5500c4ed631b907576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:select.html.twig"));

        $__internal_967333a8d66c76d2018309be43708adde57a82d2b07ff691891cc0ab4f0e3521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967333a8d66c76d2018309be43708adde57a82d2b07ff691891cc0ab4f0e3521->enter($__internal_967333a8d66c76d2018309be43708adde57a82d2b07ff691891cc0ab4f0e3521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:select.html.twig"));

        // line 1
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 1, $this->getSourceContext()); })()), "value", array()))) {
            // line 2
            echo "    ";
            $context["values"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 2, $this->getSourceContext()); })()), "attribute", array()), "configuration", array()), "choices", array());
            // line 3
            echo "    ";
            if (twig_test_iterable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 3, $this->getSourceContext()); })()), "value", array()))) {
                // line 4
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 4, $this->getSourceContext()); })()), "value", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 5
                    echo "            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new Twig_Error_Runtime('Variable "values" does not exist.', 5, $this->getSourceContext()); })()), $context["value"], array(), "array"), "html", null, true);
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) == false)) {
                        echo ", ";
                    }
                    // line 6
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "    ";
            } else {
                // line 8
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new Twig_Error_Runtime('Variable "values" does not exist.', 8, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 8, $this->getSourceContext()); })()), "value", array()), array(), "array"), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_a8930d48be82bfd49db82daaa6196e6aef982f56771b1c5500c4ed631b907576->leave($__internal_a8930d48be82bfd49db82daaa6196e6aef982f56771b1c5500c4ed631b907576_prof);

        
        $__internal_967333a8d66c76d2018309be43708adde57a82d2b07ff691891cc0ab4f0e3521->leave($__internal_967333a8d66c76d2018309be43708adde57a82d2b07ff691891cc0ab4f0e3521_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  71 => 7,  57 => 6,  51 => 5,  33 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if attribute.value is not null %}
    {% set values = attribute.attribute.configuration.choices %}
    {% if attribute.value is iterable %}
        {% for value in attribute.value %}
            {{ values[value] }}{% if loop.last == false %}, {% endif %}
        {% endfor %}
    {% else %}
        {{ values[attribute.value] }}
    {% endif %}
{% endif %}
", "SyliusAttributeBundle:Types:select.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle\\Resources\\views\\Types\\select.html.twig");
    }
}
