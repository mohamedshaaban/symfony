<?php

/* SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig */
class __TwigTemplate_eb74c3a8e74dec98f774e62c4d59e8aa92b1511b26fbeb61619647842093bbb3 extends Twig_Template
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
        $__internal_12aa5bd0b97d850ef7875fe7e4b472a9d1efd69e4f62fa5248033ec063272174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12aa5bd0b97d850ef7875fe7e4b472a9d1efd69e4f62fa5248033ec063272174->enter($__internal_12aa5bd0b97d850ef7875fe7e4b472a9d1efd69e4f62fa5248033ec063272174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig"));

        $__internal_659099bce17cccd98a6f044611c3439944eac07eb17c024416cf2682038b1626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659099bce17cccd98a6f044611c3439944eac07eb17c024416cf2682038b1626->enter($__internal_659099bce17cccd98a6f044611c3439944eac07eb17c024416cf2682038b1626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "isTracked", array())) {
            // line 2
            echo "<div class=\"ui ";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()), "onHand", array()) > 0)) ? ("green") : ("red"));
            echo " icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 4, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 4, $this->getSourceContext()); })()), "onHand", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.available_on_hand"), "html", null, true);
            echo "
    ";
            // line 5
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 5, $this->getSourceContext()); })()), "onHold", array()) > 0)) {
                // line 6
                echo "    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->getSourceContext()); })()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->getSourceContext()); })()), "onHold", array()), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reserved"), "html", null, true);
                echo "
    </div>
    ";
            }
            // line 10
            echo "</div>
";
        } else {
            // line 12
            echo "    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.not_tracked"), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_12aa5bd0b97d850ef7875fe7e4b472a9d1efd69e4f62fa5248033ec063272174->leave($__internal_12aa5bd0b97d850ef7875fe7e4b472a9d1efd69e4f62fa5248033ec063272174_prof);

        
        $__internal_659099bce17cccd98a6f044611c3439944eac07eb17c024416cf2682038b1626->leave($__internal_659099bce17cccd98a6f044611c3439944eac07eb17c024416cf2682038b1626_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  60 => 12,  56 => 10,  46 => 7,  43 => 6,  41 => 5,  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.isTracked %}
<div class=\"ui {{ data.onHand > 0 ? 'green' : 'red' }} icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHand }}</span> {{ 'sylius.ui.available_on_hand'|trans }}
    {% if data.onHold > 0 %}
    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHold }}</span> {{ 'sylius.ui.reserved'|trans }}
    </div>
    {% endif %}
</div>
{% else %}
    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        {{ 'sylius.ui.not_tracked'|trans }}
    </span>
{% endif %}
", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Grid/Field/inventory.html.twig");
    }
}
