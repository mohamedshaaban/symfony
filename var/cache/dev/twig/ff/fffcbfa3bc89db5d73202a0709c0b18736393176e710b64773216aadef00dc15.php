<?php

/* @SyliusUi/Macro/flags.html.twig */
class __TwigTemplate_6eda9afd7d90c4ece7cc3d756fecc55e7c2c914cfd65a4a782c4990615b545ad extends Twig_Template
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
        $__internal_9c297e5ce996a8d5442bc4ad878b03b73abbf9a45df5612acc1b2bc481f71520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c297e5ce996a8d5442bc4ad878b03b73abbf9a45df5612acc1b2bc481f71520->enter($__internal_9c297e5ce996a8d5442bc4ad878b03b73abbf9a45df5612acc1b2bc481f71520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/flags.html.twig"));

        $__internal_a646fbceed1ebbe4530422aead81bd22c5eb0dc4d334f914eb1f357113b4d29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a646fbceed1ebbe4530422aead81bd22c5eb0dc4d334f914eb1f357113b4d29e->enter($__internal_a646fbceed1ebbe4530422aead81bd22c5eb0dc4d334f914eb1f357113b4d29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/flags.html.twig"));

        // line 4
        echo "
";
        // line 9
        echo "
";
        
        $__internal_9c297e5ce996a8d5442bc4ad878b03b73abbf9a45df5612acc1b2bc481f71520->leave($__internal_9c297e5ce996a8d5442bc4ad878b03b73abbf9a45df5612acc1b2bc481f71520_prof);

        
        $__internal_a646fbceed1ebbe4530422aead81bd22c5eb0dc4d334f914eb1f357113b4d29e->leave($__internal_a646fbceed1ebbe4530422aead81bd22c5eb0dc4d334f914eb1f357113b4d29e_prof);

    }

    // line 1
    public function macro_fromCountryCode($__country_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "country_code" => $__country_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_103c8ccd0add5f9882243f984bb29136988e3eed4b2c13c387bee60a867ed7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_103c8ccd0add5f9882243f984bb29136988e3eed4b2c13c387bee60a867ed7d7->enter($__internal_103c8ccd0add5f9882243f984bb29136988e3eed4b2c13c387bee60a867ed7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromCountryCode"));

            $__internal_6629864b4c27cef8cd8c46b5156b43de1c5bdb00fbfe0a593b07f8dea823c898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6629864b4c27cef8cd8c46b5156b43de1c5bdb00fbfe0a593b07f8dea823c898->enter($__internal_6629864b4c27cef8cd8c46b5156b43de1c5bdb00fbfe0a593b07f8dea823c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromCountryCode"));

            // line 2
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["country_code"]) || array_key_exists("country_code", $context) ? $context["country_code"] : (function () { throw new Twig_Error_Runtime('Variable "country_code" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
            echo " flag\"></i>
";
            
            $__internal_6629864b4c27cef8cd8c46b5156b43de1c5bdb00fbfe0a593b07f8dea823c898->leave($__internal_6629864b4c27cef8cd8c46b5156b43de1c5bdb00fbfe0a593b07f8dea823c898_prof);

            
            $__internal_103c8ccd0add5f9882243f984bb29136988e3eed4b2c13c387bee60a867ed7d7->leave($__internal_103c8ccd0add5f9882243f984bb29136988e3eed4b2c13c387bee60a867ed7d7_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_fromLocaleCode($__locale_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "locale_code" => $__locale_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_48410a3cfe1f6d9ca8af387cf7484db80e5bc01b52b6ca619680d2e90860bafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_48410a3cfe1f6d9ca8af387cf7484db80e5bc01b52b6ca619680d2e90860bafa->enter($__internal_48410a3cfe1f6d9ca8af387cf7484db80e5bc01b52b6ca619680d2e90860bafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromLocaleCode"));

            $__internal_6365cb02ad49be427a1db4bfd993589ccbf9f473c04844e92d15b5f498e414a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6365cb02ad49be427a1db4bfd993589ccbf9f473c04844e92d15b5f498e414a3->enter($__internal_6365cb02ad49be427a1db4bfd993589ccbf9f473c04844e92d15b5f498e414a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromLocaleCode"));

            // line 6
            echo "    ";
            $context["flags"] = $this;
            // line 7
            echo "    ";
            echo $context["flags"]->macro_fromCountryCode(twig_slice($this->env, (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new Twig_Error_Runtime('Variable "locale_code" does not exist.', 7, $this->getSourceContext()); })()), 3, 2));
            echo "
";
            
            $__internal_6365cb02ad49be427a1db4bfd993589ccbf9f473c04844e92d15b5f498e414a3->leave($__internal_6365cb02ad49be427a1db4bfd993589ccbf9f473c04844e92d15b5f498e414a3_prof);

            
            $__internal_48410a3cfe1f6d9ca8af387cf7484db80e5bc01b52b6ca619680d2e90860bafa->leave($__internal_48410a3cfe1f6d9ca8af387cf7484db80e5bc01b52b6ca619680d2e90860bafa_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/flags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 7,  93 => 6,  75 => 5,  57 => 2,  39 => 1,  28 => 9,  25 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro fromCountryCode(country_code) %}
    <i class=\"{{ country_code|lower }} flag\"></i>
{% endmacro %}

{% macro fromLocaleCode(locale_code) %}
    {% import _self as flags %}
    {{ flags.fromCountryCode(locale_code|slice(3, 2)) }}
{% endmacro %}

", "@SyliusUi/Macro/flags.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Macro\\flags.html.twig");
    }
}
