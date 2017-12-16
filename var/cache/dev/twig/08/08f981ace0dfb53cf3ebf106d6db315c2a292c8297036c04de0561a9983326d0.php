<?php

/* SyliusUiBundle:Macro:flags.html.twig */
class __TwigTemplate_3bcf6ae83b02f0ee50cc6cf0397fad48363e60be5ea2b3783400d499a8ca8532 extends Twig_Template
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
        $__internal_a2f74ff9441150383b22b075f084831bed377085c9859ea01a5be4e74d391882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f74ff9441150383b22b075f084831bed377085c9859ea01a5be4e74d391882->enter($__internal_a2f74ff9441150383b22b075f084831bed377085c9859ea01a5be4e74d391882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:flags.html.twig"));

        $__internal_744ce3ad49ee4bef5847a7f7e6eb21672af5e00158819918ab48f2e2702a3a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744ce3ad49ee4bef5847a7f7e6eb21672af5e00158819918ab48f2e2702a3a1b->enter($__internal_744ce3ad49ee4bef5847a7f7e6eb21672af5e00158819918ab48f2e2702a3a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:flags.html.twig"));

        // line 4
        echo "
";
        // line 9
        echo "
";
        
        $__internal_a2f74ff9441150383b22b075f084831bed377085c9859ea01a5be4e74d391882->leave($__internal_a2f74ff9441150383b22b075f084831bed377085c9859ea01a5be4e74d391882_prof);

        
        $__internal_744ce3ad49ee4bef5847a7f7e6eb21672af5e00158819918ab48f2e2702a3a1b->leave($__internal_744ce3ad49ee4bef5847a7f7e6eb21672af5e00158819918ab48f2e2702a3a1b_prof);

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
            $__internal_7174849039a15009ccb00e515797151c2d043a5b82251bc1c774db57c3c3cab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7174849039a15009ccb00e515797151c2d043a5b82251bc1c774db57c3c3cab5->enter($__internal_7174849039a15009ccb00e515797151c2d043a5b82251bc1c774db57c3c3cab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromCountryCode"));

            $__internal_9e9b8c969e13a9eaa4eda78be41363255926a81e2e8550b704cf49ab69866157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9e9b8c969e13a9eaa4eda78be41363255926a81e2e8550b704cf49ab69866157->enter($__internal_9e9b8c969e13a9eaa4eda78be41363255926a81e2e8550b704cf49ab69866157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromCountryCode"));

            // line 2
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["country_code"]) || array_key_exists("country_code", $context) ? $context["country_code"] : (function () { throw new Twig_Error_Runtime('Variable "country_code" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
            echo " flag\"></i>
";
            
            $__internal_9e9b8c969e13a9eaa4eda78be41363255926a81e2e8550b704cf49ab69866157->leave($__internal_9e9b8c969e13a9eaa4eda78be41363255926a81e2e8550b704cf49ab69866157_prof);

            
            $__internal_7174849039a15009ccb00e515797151c2d043a5b82251bc1c774db57c3c3cab5->leave($__internal_7174849039a15009ccb00e515797151c2d043a5b82251bc1c774db57c3c3cab5_prof);


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
            $__internal_53f0465da14afdbfd90b2bb8102139349b7fc678c9966ee84dbfe8328e431ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_53f0465da14afdbfd90b2bb8102139349b7fc678c9966ee84dbfe8328e431ff3->enter($__internal_53f0465da14afdbfd90b2bb8102139349b7fc678c9966ee84dbfe8328e431ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromLocaleCode"));

            $__internal_a70047810e1d2354aa73ed184677f2cede612d7f99f8dbee61a657a317a4c94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a70047810e1d2354aa73ed184677f2cede612d7f99f8dbee61a657a317a4c94e->enter($__internal_a70047810e1d2354aa73ed184677f2cede612d7f99f8dbee61a657a317a4c94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "fromLocaleCode"));

            // line 6
            echo "    ";
            $context["flags"] = $this;
            // line 7
            echo "    ";
            echo $context["flags"]->macro_fromCountryCode(twig_slice($this->env, (isset($context["locale_code"]) || array_key_exists("locale_code", $context) ? $context["locale_code"] : (function () { throw new Twig_Error_Runtime('Variable "locale_code" does not exist.', 7, $this->getSourceContext()); })()), 3, 2));
            echo "
";
            
            $__internal_a70047810e1d2354aa73ed184677f2cede612d7f99f8dbee61a657a317a4c94e->leave($__internal_a70047810e1d2354aa73ed184677f2cede612d7f99f8dbee61a657a317a4c94e_prof);

            
            $__internal_53f0465da14afdbfd90b2bb8102139349b7fc678c9966ee84dbfe8328e431ff3->leave($__internal_53f0465da14afdbfd90b2bb8102139349b7fc678c9966ee84dbfe8328e431ff3_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:flags.html.twig";
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

", "SyliusUiBundle:Macro:flags.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/flags.html.twig");
    }
}
