<?php

/* SyliusUiBundle:Macro:headers.html.twig */
class __TwigTemplate_2f21fa5667dfd52847813a5fd992f0c79c07a6aeb414cc226d110c0ddcf8a3d2 extends Twig_Template
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
        $__internal_eb4a843e10a4c77086f4bad6dab26b16f2fda63c4757f8e6e117b146f0957ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4a843e10a4c77086f4bad6dab26b16f2fda63c4757f8e6e117b146f0957ccf->enter($__internal_eb4a843e10a4c77086f4bad6dab26b16f2fda63c4757f8e6e117b146f0957ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:headers.html.twig"));

        $__internal_11a528d63e9ba182da6be851ebd0937122e10607080256abebf9a35ddb82c659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a528d63e9ba182da6be851ebd0937122e10607080256abebf9a35ddb82c659->enter($__internal_11a528d63e9ba182da6be851ebd0937122e10607080256abebf9a35ddb82c659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:headers.html.twig"));

        
        $__internal_eb4a843e10a4c77086f4bad6dab26b16f2fda63c4757f8e6e117b146f0957ccf->leave($__internal_eb4a843e10a4c77086f4bad6dab26b16f2fda63c4757f8e6e117b146f0957ccf_prof);

        
        $__internal_11a528d63e9ba182da6be851ebd0937122e10607080256abebf9a35ddb82c659->leave($__internal_11a528d63e9ba182da6be851ebd0937122e10607080256abebf9a35ddb82c659_prof);

    }

    // line 1
    public function macro_default($__header__ = null, $__icon__ = null, $__subheader__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "header" => $__header__,
            "icon" => $__icon__,
            "subheader" => $__subheader__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7b2587eb1ce7f9183c632501d511e2b3debaa30f98017d278992ee02f9dcf561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7b2587eb1ce7f9183c632501d511e2b3debaa30f98017d278992ee02f9dcf561->enter($__internal_7b2587eb1ce7f9183c632501d511e2b3debaa30f98017d278992ee02f9dcf561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_0d89a3b874b3cf09e748c53d79e706018a4ddf2cca7c7aee922cfe249d36358b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0d89a3b874b3cf09e748c53d79e706018a4ddf2cca7c7aee922cfe249d36358b->enter($__internal_0d89a3b874b3cf09e748c53d79e706018a4ddf2cca7c7aee922cfe249d36358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "<h1 class=\"ui header\">
    ";
            // line 3
            if ( !twig_test_empty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->getSourceContext()); })()))) {
                // line 4
                echo "    <i class=\"circular ";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
                echo " icon\"></i>
    ";
            }
            // line 6
            echo "    <div class=\"content\">
        ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo "
        ";
            // line 8
            if ( !twig_test_empty((isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new Twig_Error_Runtime('Variable "subheader" does not exist.', 8, $this->getSourceContext()); })()))) {
                // line 9
                echo "        <div class=\"sub header\">";
                echo twig_escape_filter($this->env, (isset($context["subheader"]) || array_key_exists("subheader", $context) ? $context["subheader"] : (function () { throw new Twig_Error_Runtime('Variable "subheader" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
                echo "</div>
        ";
            }
            // line 11
            echo "    </div>
</h1>
";
            
            $__internal_0d89a3b874b3cf09e748c53d79e706018a4ddf2cca7c7aee922cfe249d36358b->leave($__internal_0d89a3b874b3cf09e748c53d79e706018a4ddf2cca7c7aee922cfe249d36358b_prof);

            
            $__internal_7b2587eb1ce7f9183c632501d511e2b3debaa30f98017d278992ee02f9dcf561->leave($__internal_7b2587eb1ce7f9183c632501d511e2b3debaa30f98017d278992ee02f9dcf561_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  73 => 9,  71 => 8,  67 => 7,  64 => 6,  58 => 4,  56 => 3,  53 => 2,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(header, icon, subheader) %}
<h1 class=\"ui header\">
    {% if icon is not empty %}
    <i class=\"circular {{ icon }} icon\"></i>
    {% endif %}
    <div class=\"content\">
        {{ header }}
        {% if subheader is not empty %}
        <div class=\"sub header\">{{ subheader }}</div>
        {% endif %}
    </div>
</h1>
{% endmacro %}
", "SyliusUiBundle:Macro:headers.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/headers.html.twig");
    }
}
