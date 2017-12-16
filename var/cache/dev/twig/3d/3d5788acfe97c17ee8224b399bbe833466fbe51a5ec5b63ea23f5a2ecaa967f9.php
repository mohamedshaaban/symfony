<?php

/* SyliusAdminBundle:Product/Tab:_details.html.twig */
class __TwigTemplate_c12001383c855eab608d327fc117ecfafc31c6e3647dc5a3add17781adaf06b1 extends Twig_Template
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
        $__internal_cd31fcdf3afe27112a06b10374c5da03af36ee5e09f56218da339eed142496be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd31fcdf3afe27112a06b10374c5da03af36ee5e09f56218da339eed142496be->enter($__internal_cd31fcdf3afe27112a06b10374c5da03af36ee5e09f56218da339eed142496be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_details.html.twig"));

        $__internal_11621ebb2abb05efedecb8f71175f31fc89fec3376b9ee9ff3bd2471937aba0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11621ebb2abb05efedecb8f71175f31fc89fec3376b9ee9ff3bd2471937aba0d->enter($__internal_11621ebb2abb05efedecb8f71175f31fc89fec3376b9ee9ff3bd2471937aba0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_details.html.twig"));

        // line 1
        $context["__internal_46e39e4b2b1f2e6403d6ea93a2e4bd46b7e50249b5f557bf3145fedac10f7fa1"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:Product/Tab:_details.html.twig", 1);
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
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "enabled", array()), 'row');
        echo "
                ";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->getSourceContext()); })()), "simple", array())) {
            // line 13
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "variant", array()), "onHand", array()), 'row');
            echo "
                    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "variant", array()), "tracked", array()), 'row');
            echo "
                    ";
            // line 15
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "variant", array()), "shippingRequired", array()), 'row');
            echo "
                    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "variant", array()), "version", array()), 'row');
            echo "
                ";
        } else {
            // line 18
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "options", array()), 'row');
            echo "
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "variantSelectionMethod", array()), 'row');
            echo "
                ";
        }
        // line 21
        echo "
                ";
        // line 23
        echo "                <div class=\"ui hidden element\">
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->getSourceContext()); })()), "simple", array())) {
            // line 25
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "variant", array()), "translations", array()), 'row');
            echo "
                    ";
        }
        // line 27
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "variantSelectionMethod", array()), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "channels", array()), 'row');
        echo "

            ";
        // line 34
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 34, $this->getSourceContext()); })()), "simple", array())) {
            // line 35
            echo "                <h4 class=\"ui dividing header\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.pricing"), "html", null, true);
            echo "</h4>
                ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "variant", array()), "channelPricings", array()), 'row', array("label" => false));
            echo "
            ";
        }
        // line 38
        echo "        </div>
    </div>
    <div class=\"ui hidden divider\"></div>
    ";
        // line 41
        echo $context["__internal_46e39e4b2b1f2e6403d6ea93a2e4bd46b7e50249b5f557bf3145fedac10f7fa1"]->macro_translationFormWithSlug(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "translations", array()), "@SyliusAdmin/Product/_slugField.html.twig", (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 41, $this->getSourceContext()); })()));
        echo "
    ";
        // line 42
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 42, $this->getSourceContext()); })()), "simple", array())) {
            // line 43
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping"), "html", null, true);
            echo "</h4>
                ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "variant", array()), "shippingCategory", array()), 'row');
            echo "
                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "variant", array()), "width", array()), 'row');
            echo "
                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "variant", array()), "height", array()), 'row');
            echo "
                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "variant", array()), "depth", array()), 'row');
            echo "
                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "variant", array()), "weight", array()), 'row');
            echo "
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxes"), "html", null, true);
            echo "</h4>
                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "variant", array()), "taxCategory", array()), 'row');
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 64, $this->getSourceContext()); })())) . ".tab_details"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_cd31fcdf3afe27112a06b10374c5da03af36ee5e09f56218da339eed142496be->leave($__internal_cd31fcdf3afe27112a06b10374c5da03af36ee5e09f56218da339eed142496be_prof);

        
        $__internal_11621ebb2abb05efedecb8f71175f31fc89fec3376b9ee9ff3bd2471937aba0d->leave($__internal_11621ebb2abb05efedecb8f71175f31fc89fec3376b9ee9ff3bd2471937aba0d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 64,  178 => 63,  170 => 58,  166 => 57,  158 => 52,  154 => 51,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  132 => 43,  130 => 42,  126 => 41,  121 => 38,  116 => 36,  111 => 35,  109 => 34,  104 => 32,  95 => 27,  89 => 25,  87 => 24,  84 => 23,  81 => 21,  76 => 19,  71 => 18,  66 => 16,  62 => 15,  58 => 14,  53 => 13,  51 => 12,  47 => 11,  43 => 10,  35 => 5,  31 => 4,  27 => 2,  25 => 1,);
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
                {{ form_row(form.enabled) }}
                {% if product.simple %}
                    {{ form_row(form.variant.onHand) }}
                    {{ form_row(form.variant.tracked) }}
                    {{ form_row(form.variant.shippingRequired) }}
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
", "SyliusAdminBundle:Product/Tab:_details.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Tab/_details.html.twig");
    }
}
