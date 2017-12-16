<?php

/* SyliusAdminBundle:ProductVariant/Tab:_details.html.twig */
class __TwigTemplate_c72ba718d06c85fae6f9f46db889be854dba432860325ec9cfdf23149d78df83 extends Twig_Template
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
        $__internal_989070c2f8496a5bad46b24f39f1568fb2e0a589a9832ae4de2cb2176858d8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989070c2f8496a5bad46b24f39f1568fb2e0a589a9832ae4de2cb2176858d8cb->enter($__internal_989070c2f8496a5bad46b24f39f1568fb2e0a589a9832ae4de2cb2176858d8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig"));

        $__internal_b21936437fdac662a90c0b1cfce61d835bf48c70ffb95e8da8dc8785d5f4c981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21936437fdac662a90c0b1cfce61d835bf48c70ffb95e8da8dc8785d5f4c981->enter($__internal_b21936437fdac662a90c0b1cfce61d835bf48c70ffb95e8da8dc8785d5f4c981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig"));

        // line 1
        $context["__internal_774ec95abd0d897041c20e839c21582e2c5b2252818bcd488ac4653dc4f6d54c"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig", 1);
        // line 2
        echo "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details"), "html", null, true);
        echo "</h3>

    <div class=\"ui segments\">
        ";
        // line 7
        echo $context["__internal_774ec95abd0d897041c20e839c21582e2c5b2252818bcd488ac4653dc4f6d54c"]->macro_translationForm(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "translations", array()));
        echo "
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
            <div class=\"two fields\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "shippingCategory", array()), 'row');
        echo "
            </div>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "channelPricings", array()), 'row');
        echo "
        </div>
        <div class=\"ui segment\">
            <div class=\"one field\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "shippingRequired", array()), 'row');
        echo "
            </div>
        </div>
        ";
        // line 21
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "optionValues", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "optionValues", array())) > 0))) {
            // line 22
            echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.options"), "html", null, true);
            echo "</h4>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option_form"]) {
                // line 26
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["option_form"], 'row');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
        ";
        }
        // line 30
        echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.properties"), "html", null, true);
        echo "</h4>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "height", array()), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "width", array()), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "depth", array()), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "weight", array()), 'row');
        echo "
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.inventory"), "html", null, true);
        echo "</h4>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "onHand", array()), 'row');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "tracked", array()), 'row');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "version", array()), 'row');
        echo "
        </div>
    </div>

    ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product_variant." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 47, $this->getSourceContext()); })())) . ".tab_details"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_989070c2f8496a5bad46b24f39f1568fb2e0a589a9832ae4de2cb2176858d8cb->leave($__internal_989070c2f8496a5bad46b24f39f1568fb2e0a589a9832ae4de2cb2176858d8cb_prof);

        
        $__internal_b21936437fdac662a90c0b1cfce61d835bf48c70ffb95e8da8dc8785d5f4c981->leave($__internal_b21936437fdac662a90c0b1cfce61d835bf48c70ffb95e8da8dc8785d5f4c981_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 47,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 30,  89 => 28,  80 => 26,  76 => 25,  72 => 24,  68 => 22,  66 => 21,  60 => 18,  53 => 14,  48 => 12,  43 => 10,  37 => 7,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h3>

    <div class=\"ui segments\">
        {{ translationForm(form.translations) }}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            {{ form_row(form.code) }}
            <div class=\"two fields\">
                {{ form_row(form.shippingCategory) }}
            </div>
            {{ form_row(form.channelPricings) }}
        </div>
        <div class=\"ui segment\">
            <div class=\"one field\">
                {{ form_row(form.shippingRequired) }}
            </div>
        </div>
        {% if form.optionValues is defined and form.optionValues|length > 0 %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.options'|trans }}</h4>
            {% for option_form in form.optionValues %}
                {{ form_row(option_form) }}
            {% endfor %}
        </div>
        {% endif %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.properties'|trans }}</h4>
            {{ form_row(form.height) }}
            {{ form_row(form.width) }}
            {{ form_row(form.depth) }}
            {{ form_row(form.weight) }}
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.inventory'|trans }}</h4>
            {{ form_row(form.onHand) }}
            {{ form_row(form.tracked) }}
            {{ form_row(form.version) }}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product_variant.' ~ action ~ '.tab_details', {'form': form}) }}
</div>
", "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Tab/_details.html.twig");
    }
}
