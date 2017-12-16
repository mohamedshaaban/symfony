<?php

/* SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig */
class __TwigTemplate_3d655365f9d6b86c8442f747a93f651364be55209270461349eb867243fc9d76 extends Twig_Template
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
        $__internal_c3ee71423cf932efa5dbf7a289cd7dfc1f38e4fcd0a42c0b5967aecc04e6a70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ee71423cf932efa5dbf7a289cd7dfc1f38e4fcd0a42c0b5967aecc04e6a70f->enter($__internal_c3ee71423cf932efa5dbf7a289cd7dfc1f38e4fcd0a42c0b5967aecc04e6a70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig"));

        $__internal_023f982f84361bd64ae73f157bfcb8a8eeb60ccec4a6f6ef51ad06318c92157c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023f982f84361bd64ae73f157bfcb8a8eeb60ccec4a6f6ef51ad06318c92157c->enter($__internal_023f982f84361bd64ae73f157bfcb8a8eeb60ccec4a6f6ef51ad06318c92157c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig", 1);
        // line 2
        echo "
<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'label');
        echo "</a>
        ";
        // line 11
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 11, $this->getSourceContext()); })()), "description", array()))) {
            // line 12
            echo "            <div class=\"description\">
                <p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 13, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 16
        echo "    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\">
            ";
        // line 19
        echo $context["money"]->macro_convertAndFormat((isset($context["fee"]) || array_key_exists("fee", $context) ? $context["fee"] : (function () { throw new Twig_Error_Runtime('Variable "fee" does not exist.', 19, $this->getSourceContext()); })()));
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_c3ee71423cf932efa5dbf7a289cd7dfc1f38e4fcd0a42c0b5967aecc04e6a70f->leave($__internal_c3ee71423cf932efa5dbf7a289cd7dfc1f38e4fcd0a42c0b5967aecc04e6a70f_prof);

        
        $__internal_023f982f84361bd64ae73f157bfcb8a8eeb60ccec4a6f6ef51ad06318c92157c->leave($__internal_023f982f84361bd64ae73f157bfcb8a8eeb60ccec4a6f6ef51ad06318c92157c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  55 => 16,  49 => 13,  46 => 12,  44 => 11,  40 => 10,  33 => 6,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusShop/Common/Macro/money.html.twig' as money %}

<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            {{ form_widget(form) }}
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">{{ form_label(form) }}</a>
        {% if method.description is not null %}
            <div class=\"description\">
                <p>{{ method.description }}</p>
            </div>
        {% endif %}
    </div>
    <div class=\"extra\">
        <div class=\"ui large right floated fee label\">
            {{ money.convertAndFormat(fee) }}
        </div>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_choice.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectShipping/_choice.html.twig");
    }
}
