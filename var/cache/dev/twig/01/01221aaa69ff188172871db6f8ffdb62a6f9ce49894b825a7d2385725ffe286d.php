<?php

/* SyliusUiBundle:Grid/Field:state.html.twig */
class __TwigTemplate_a521ed636539754354291d0f80b2010e144aa34432ef775bf06ec71582da4246 extends Twig_Template
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
        $__internal_15887af3e89c28fa54a623229d5a13e24ddeb95d6d27ca4b3aa053a08bd08786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15887af3e89c28fa54a623229d5a13e24ddeb95d6d27ca4b3aa053a08bd08786->enter($__internal_15887af3e89c28fa54a623229d5a13e24ddeb95d6d27ca4b3aa053a08bd08786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:state.html.twig"));

        $__internal_aab7ceeb565ec203b6822e25978c7c5c58371b850d8885cf99041da524bce61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab7ceeb565ec203b6822e25978c7c5c58371b850d8885cf99041da524bce61f->enter($__internal_aab7ceeb565ec203b6822e25978c7c5c58371b850d8885cf99041da524bce61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:state.html.twig"));

        // line 1
        $context["value"] = ("sylius.ui." . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()));
        // line 2
        echo "
";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "vars", array(), "any", false, true), "labels", array(), "any", true, true)) {
            // line 4
            echo "    ";
            $this->loadTemplate(array(0 => (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 4, $this->getSourceContext()); })()), "vars", array()), "labels", array()) . "/") . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 4, $this->getSourceContext()); })())) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "SyliusUiBundle:Grid/Field:state.html.twig", 4)->display(array_merge($context, array("value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()))));
        } else {
            // line 6
            echo "    ";
            $this->loadTemplate("@SyliusUi/Label/_default.html.twig", "SyliusUiBundle:Grid/Field:state.html.twig", 6)->display(array_merge($context, array("value" => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 6, $this->getSourceContext()); })()))));
        }
        
        $__internal_15887af3e89c28fa54a623229d5a13e24ddeb95d6d27ca4b3aa053a08bd08786->leave($__internal_15887af3e89c28fa54a623229d5a13e24ddeb95d6d27ca4b3aa053a08bd08786_prof);

        
        $__internal_aab7ceeb565ec203b6822e25978c7c5c58371b850d8885cf99041da524bce61f->leave($__internal_aab7ceeb565ec203b6822e25978c7c5c58371b850d8885cf99041da524bce61f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = 'sylius.ui.' ~ data %}

{% if options.vars.labels is defined %}
    {% include [(options.vars.labels ~ '/' ~ data ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': value} %}
{% else %}
    {% include '@SyliusUi/Label/_default.html.twig' with {'value': value} %}
{% endif %}
", "SyliusUiBundle:Grid/Field:state.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/state.html.twig");
    }
}
