<?php

/* SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig */
class __TwigTemplate_dd3f11acd380133db9d514412451942e8379631819634181951593f44a06d921 extends Twig_Template
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
        $__internal_4f86296b3dc1b06266e4f72ba1ceda76fcf40d2aa22519dc011cc66aee1ee614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f86296b3dc1b06266e4f72ba1ceda76fcf40d2aa22519dc011cc66aee1ee614->enter($__internal_4f86296b3dc1b06266e4f72ba1ceda76fcf40d2aa22519dc011cc66aee1ee614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig"));

        $__internal_31bd9fa298058eaa80f3bdb18ac2d130e640332d3fa77d98ff32bfbc9796915b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bd9fa298058eaa80f3bdb18ac2d130e640332d3fa77d98ff32bfbc9796915b->enter($__internal_31bd9fa298058eaa80f3bdb18ac2d130e640332d3fa77d98ff32bfbc9796915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig"));

        // line 1
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "usageLimit", array()))) {
            // line 2
            echo "    <span class=\"ui label\">
        ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "used", array()), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui label\">∞</span>
";
        } else {
            // line 8
            echo "    ";
            $context["color"] = "teal";
            // line 9
            echo "
    ";
            // line 10
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 10, $this->getSourceContext()); })()), "used", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 10, $this->getSourceContext()); })()), "usageLimit", array()))) {
                // line 11
                echo "        ";
                $context["color"] = "red";
                // line 12
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()), "used", array()) > (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()), "usageLimit", array()) / 2))) {
                // line 13
                echo "        ";
                $context["color"] = "yellow";
                // line 14
                echo "    ";
            }
            // line 15
            echo "    <span class=\"ui ";
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo " label\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 16, $this->getSourceContext()); })()), "used", array()), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo " label\">
        ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 20, $this->getSourceContext()); })()), "usageLimit", array()), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_4f86296b3dc1b06266e4f72ba1ceda76fcf40d2aa22519dc011cc66aee1ee614->leave($__internal_4f86296b3dc1b06266e4f72ba1ceda76fcf40d2aa22519dc011cc66aee1ee614_prof);

        
        $__internal_31bd9fa298058eaa80f3bdb18ac2d130e640332d3fa77d98ff32bfbc9796915b->leave($__internal_31bd9fa298058eaa80f3bdb18ac2d130e640332d3fa77d98ff32bfbc9796915b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  69 => 19,  63 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  44 => 10,  41 => 9,  38 => 8,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.usageLimit is empty %}
    <span class=\"ui label\">
        {{ data.used }}
    </span>
    /
    <span class=\"ui label\">∞</span>
{% else %}
    {% set color = 'teal' %}

    {% if data.used == data.usageLimit %}
        {% set color = 'red' %}
    {% elseif data.used > data.usageLimit/2 %}
        {% set color = 'yellow' %}
    {% endif %}
    <span class=\"ui {{ color }} label\">
        {{ data.used }}
    </span>
    /
    <span class=\"ui {{ color }} label\">
        {{ data.usageLimit }}
    </span>
{% endif %}
", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Promotion/Grid/Field/usage.html.twig");
    }
}
