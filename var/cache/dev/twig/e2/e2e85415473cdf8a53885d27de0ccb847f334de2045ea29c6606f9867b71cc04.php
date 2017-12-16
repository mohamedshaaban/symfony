<?php

/* @SyliusAdmin/Product/Tab/_details.html.twig */
class __TwigTemplate_bcd2f7fa410b505dba53d337fa9f24157b74e3ee72506b7738c8654151f4ca7d extends Twig_Template
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
        $__internal_b41582629e2612fe2101fde66938730eab2c437280f696775ca77ab6aeef7c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41582629e2612fe2101fde66938730eab2c437280f696775ca77ab6aeef7c76->enter($__internal_b41582629e2612fe2101fde66938730eab2c437280f696775ca77ab6aeef7c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_details.html.twig"));

        $__internal_738ca626e8377e5cf5fe0ceb142e5530dd12b38dc7cec2ee925a05bfb3122479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738ca626e8377e5cf5fe0ceb142e5530dd12b38dc7cec2ee925a05bfb3122479->enter($__internal_738ca626e8377e5cf5fe0ceb142e5530dd12b38dc7cec2ee925a05bfb3122479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_details.html.twig"));

        // line 1
        $context["__internal_9756bd2d43aa7c68d2431f69cf3eb8921aa6986a2b3bae4e9a71f8454c72f2d4"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "@SyliusAdmin/Product/Tab/_details.html.twig", 1);
        // line 2
        echo "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details"), "html", null, true);
        echo "</h3>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'errors');
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "has_discount", array()), 'row');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "enabled", array()), 'row');
        echo "
                ";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 13, $this->getSourceContext()); })()), "simple", array())) {
            // line 14
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "variant", array()), "onHand", array()), 'row');
            echo "
                    ";
            // line 15
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "variant", array()), "tracked", array()), 'row');
            echo "
                    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "variant", array()), "shippingRequired", array()), 'row');
            echo "
\t\t\t\t\t
                    ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "variant", array()), "version", array()), 'row');
            echo "
                ";
        } else {
            // line 20
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "options", array()), 'row');
            echo "
                    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "variantSelectionMethod", array()), 'row');
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                <div class=\"ui hidden element\">
                    ";
        // line 26
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 26, $this->getSourceContext()); })()), "simple", array())) {
            // line 27
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "variant", array()), "translations", array()), 'row');
            echo "
                    ";
        }
        // line 29
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "variantSelectionMethod", array()), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "channels", array()), 'row');
        echo "

            ";
        // line 36
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 36, $this->getSourceContext()); })()), "simple", array())) {
            // line 37
            echo "                <h4 class=\"ui dividing header\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.pricing"), "html", null, true);
            echo "</h4>
                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "variant", array()), "channelPricings", array()), 'row', array("label" => false));
            echo "
            ";
        }
        // line 40
        echo "        </div>
    </div>
    <div class=\"ui hidden divider\"></div>
    ";
        // line 43
        echo $context["__internal_9756bd2d43aa7c68d2431f69cf3eb8921aa6986a2b3bae4e9a71f8454c72f2d4"]->macro_translationFormWithSlug(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "translations", array()), "@SyliusAdmin/Product/_slugField.html.twig", (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 43, $this->getSourceContext()); })()));
        echo "
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 44, $this->getSourceContext()); })()), "simple", array())) {
            // line 45
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping"), "html", null, true);
            echo "</h4>
                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "variant", array()), "shippingCategory", array()), 'row');
            echo "
                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "variant", array()), "width", array()), 'row');
            echo "
                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "variant", array()), "height", array()), 'row');
            echo "
                ";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "variant", array()), "depth", array()), 'row');
            echo "
                ";
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "variant", array()), "weight", array()), 'row');
            echo "
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxes"), "html", null, true);
            echo "</h4>
                ";
            // line 60
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "variant", array()), "taxCategory", array()), 'row');
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 65
        echo "
    ";
        // line 66
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 66, $this->getSourceContext()); })())) . ".tab_details"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_b41582629e2612fe2101fde66938730eab2c437280f696775ca77ab6aeef7c76->leave($__internal_b41582629e2612fe2101fde66938730eab2c437280f696775ca77ab6aeef7c76_prof);

        
        $__internal_738ca626e8377e5cf5fe0ceb142e5530dd12b38dc7cec2ee925a05bfb3122479->leave($__internal_738ca626e8377e5cf5fe0ceb142e5530dd12b38dc7cec2ee925a05bfb3122479_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 66,  183 => 65,  175 => 60,  171 => 59,  163 => 54,  159 => 53,  155 => 52,  151 => 51,  147 => 50,  143 => 49,  137 => 45,  135 => 44,  131 => 43,  126 => 40,  121 => 38,  116 => 37,  114 => 36,  109 => 34,  100 => 29,  94 => 27,  92 => 26,  89 => 25,  86 => 23,  81 => 21,  76 => 20,  71 => 18,  66 => 16,  62 => 15,  57 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  35 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationFormWithSlug %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h3>
    {{ form_errors(form) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                {{ form_row(form.code) }}
\t\t\t\t{{ form_row(form.has_discount) }}
                {{ form_row(form.enabled) }}
                {% if product.simple %}
                    {{ form_row(form.variant.onHand) }}
                    {{ form_row(form.variant.tracked) }}
                    {{ form_row(form.variant.shippingRequired) }}
\t\t\t\t\t
                    {{ form_row(form.variant.version) }}
                {% else %}
                    {{ form_row(form.options) }}
                    {{ form_row(form.variantSelectionMethod) }}
                {% endif %}

                {# Nothing to see here. #}
                <div class=\"ui hidden element\">
                    {% if product.simple %}
                        {{ form_row(form.variant.translations) }}
                    {% endif %}
                    {{ form_row(form.variantSelectionMethod) }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            {{ form_row(form.channels) }}

            {% if product.simple %}
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.pricing'|trans }}</h4>
                {{ form_row(form.variant.channelPricings, {'label': false}) }}
            {% endif %}
        </div>
    </div>
    <div class=\"ui hidden divider\"></div>
    {{ translationFormWithSlug(form.translations, '@SyliusAdmin/Product/_slugField.html.twig', product) }}
    {% if product.simple %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping'|trans }}</h4>
                {{ form_row(form.variant.shippingCategory) }}
                {{ form_row(form.variant.width) }}
                {{ form_row(form.variant.height) }}
                {{ form_row(form.variant.depth) }}
                {{ form_row(form.variant.weight) }}
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h4>
                {{ form_row(form.variant.taxCategory) }}
            </div>
        </div>
    </div>
    {% endif %}

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_details', {'form': form}) }}
</div>
", "@SyliusAdmin/Product/Tab/_details.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Tab\\_details.html.twig");
    }
}
