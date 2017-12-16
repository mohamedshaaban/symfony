<?php

/* SyliusAdminBundle:ShippingMethod:_form.html.twig */
class __TwigTemplate_a84b8d1cb36e935b36d9ad2558f0f527c2d49a984bc2b715b90aabd62f87a3fc extends Twig_Template
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
        $__internal_e6701f5b8c2221fdc383ca81f62e6fa013edc39a7a64eaedaacc682033deb18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6701f5b8c2221fdc383ca81f62e6fa013edc39a7a64eaedaacc682033deb18b->enter($__internal_e6701f5b8c2221fdc383ca81f62e6fa013edc39a7a64eaedaacc682033deb18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ShippingMethod:_form.html.twig"));

        $__internal_3ee91307413ce1c112d34158a8ee2f025ec4742c14dc8c7bfd45e5b1aaf900fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee91307413ce1c112d34158a8ee2f025ec4742c14dc8c7bfd45e5b1aaf900fa->enter($__internal_3ee91307413ce1c112d34158a8ee2f025ec4742c14dc8c7bfd45e5b1aaf900fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ShippingMethod:_form.html.twig"));

        // line 1
        $context["__internal_03a3067d2ca8bc8e5c5ca62cb3600e4072b264aba20612d9522ac545bf630a69"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ShippingMethod:_form.html.twig", 1);
        // line 2
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'errors');
        echo "
            <div class=\"three fields\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "zone", array()), 'row');
        echo "
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "position", array()), 'row');
        echo "
            </div>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "enabled", array()), 'row');
        echo "
            <h4 class=\"ui dividing header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.availability"), "html", null, true);
        echo "</h4>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "channels", array()), 'row');
        echo "
            <h4 class=\"ui dividing header\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.category_requirements"), "html", null, true);
        echo "</h4>
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "category", array()), 'row');
        echo "
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "categoryRequirement", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryRequirementChoiceForm"]) {
            // line 18
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["categoryRequirementChoiceForm"], 'row');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryRequirementChoiceForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            <h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxes"), "html", null, true);
        echo "</h4>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "taxCategory", array()), 'row');
        echo "
            <h4 class=\"ui dividing header\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_charges"), "html", null, true);
        echo "</h4>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "calculator", array()), 'row');
        echo "
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "vars", array()), "prototypes", array()));
        foreach ($context['_seq'] as $context["name"] => $context["calculatorConfigurationPrototype"]) {
            // line 25
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "calculator", array()), "vars", array()), "id", array()), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-container=\".configuration\"
                     data-prototype=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["calculatorConfigurationPrototype"], 'widget'));
            echo "\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['calculatorConfigurationPrototype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            <div class=\"ui segment configuration\">
                ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "configuration", array(), "any", true, true)) {
            // line 31
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "configuration", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
        </div>
    </div>
    <div class=\"column\">
        ";
        // line 39
        echo $context["__internal_03a3067d2ca8bc8e5c5ca62cb3600e4072b264aba20612d9522ac545bf630a69"]->macro_translationForm(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "translations", array()));
        echo "
    </div>
</div>
";
        
        $__internal_e6701f5b8c2221fdc383ca81f62e6fa013edc39a7a64eaedaacc682033deb18b->leave($__internal_e6701f5b8c2221fdc383ca81f62e6fa013edc39a7a64eaedaacc682033deb18b_prof);

        
        $__internal_3ee91307413ce1c112d34158a8ee2f025ec4742c14dc8c7bfd45e5b1aaf900fa->leave($__internal_3ee91307413ce1c112d34158a8ee2f025ec4742c14dc8c7bfd45e5b1aaf900fa_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ShippingMethod:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 39,  143 => 35,  140 => 34,  131 => 32,  126 => 31,  124 => 30,  121 => 29,  112 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  84 => 20,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  46 => 10,  42 => 9,  38 => 8,  33 => 6,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            <div class=\"three fields\">
                {{ form_row(form.code) }}
                {{ form_row(form.zone) }}
                {{ form_row(form.position) }}
            </div>
            {{ form_row(form.enabled) }}
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.availability'|trans }}</h4>
            {{ form_row(form.channels) }}
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.category_requirements'|trans }}</h4>
            {{ form_row(form.category) }}
            {% for categoryRequirementChoiceForm in form.categoryRequirement %}
                {{ form_row(categoryRequirementChoiceForm) }}
            {% endfor %}
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h4>
            {{ form_row(form.taxCategory) }}
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping_charges'|trans }}</h4>
            {{ form_row(form.calculator) }}
            {% for name, calculatorConfigurationPrototype in form.vars.prototypes %}
                <div id=\"{{ form.calculator.vars.id }}_{{ name }}\" data-container=\".configuration\"
                     data-prototype=\"{{ form_widget(calculatorConfigurationPrototype)|e }}\">
                </div>
            {% endfor %}
            <div class=\"ui segment configuration\">
                {% if form.configuration is defined %}
                    {% for field in form.configuration %}
                        {{ form_row(field) }}
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"column\">
        {{ translationForm(form.translations) }}
    </div>
</div>
", "SyliusAdminBundle:ShippingMethod:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ShippingMethod/_form.html.twig");
    }
}
