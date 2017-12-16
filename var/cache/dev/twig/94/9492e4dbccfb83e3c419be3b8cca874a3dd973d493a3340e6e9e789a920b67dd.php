<?php

/* SyliusResourceBundle:Macros:actions.html.twig */
class __TwigTemplate_303ba275c786319179ed5a9f698f8c602f566263dc55b8b6fcec626c5e6b18ad extends Twig_Template
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
        $__internal_a3f12f2be80102e559c2333c23010dd24ecad88ebb3380c5a018c95e14f25e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f12f2be80102e559c2333c23010dd24ecad88ebb3380c5a018c95e14f25e83->enter($__internal_a3f12f2be80102e559c2333c23010dd24ecad88ebb3380c5a018c95e14f25e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:actions.html.twig"));

        $__internal_762ee1ab306c2069ba1f5be9b11b71059426bcdf0d6982d261b429fbb5bd74e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762ee1ab306c2069ba1f5be9b11b71059426bcdf0d6982d261b429fbb5bd74e3->enter($__internal_762ee1ab306c2069ba1f5be9b11b71059426bcdf0d6982d261b429fbb5bd74e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Macros:actions.html.twig"));

        // line 7
        echo "
";
        
        $__internal_a3f12f2be80102e559c2333c23010dd24ecad88ebb3380c5a018c95e14f25e83->leave($__internal_a3f12f2be80102e559c2333c23010dd24ecad88ebb3380c5a018c95e14f25e83_prof);

        
        $__internal_762ee1ab306c2069ba1f5be9b11b71059426bcdf0d6982d261b429fbb5bd74e3->leave($__internal_762ee1ab306c2069ba1f5be9b11b71059426bcdf0d6982d261b429fbb5bd74e3_prof);

    }

    // line 1
    public function macro_create($__url__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_394e39486cbd7e19cfbd8ad9ee927d43c25b1c77105d051e1813600fcd80a8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_394e39486cbd7e19cfbd8ad9ee927d43c25b1c77105d051e1813600fcd80a8da->enter($__internal_394e39486cbd7e19cfbd8ad9ee927d43c25b1c77105d051e1813600fcd80a8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            $__internal_2514b7a0166f9be49412d8aca126fc0323e4d4676456cc169577115f0342f555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2514b7a0166f9be49412d8aca126fc0323e4d4676456cc169577115f0342f555->enter($__internal_2514b7a0166f9be49412d8aca126fc0323e4d4676456cc169577115f0342f555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "create"));

            // line 2
            echo "<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-ok\"></i> ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
            echo "</button>
    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer", 1 => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 4, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger btn-lg\"><i class=\"glyphicon glyphicon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
            echo "</a>
</div>
";
            
            $__internal_2514b7a0166f9be49412d8aca126fc0323e4d4676456cc169577115f0342f555->leave($__internal_2514b7a0166f9be49412d8aca126fc0323e4d4676456cc169577115f0342f555_prof);

            
            $__internal_394e39486cbd7e19cfbd8ad9ee927d43c25b1c77105d051e1813600fcd80a8da->leave($__internal_394e39486cbd7e19cfbd8ad9ee927d43c25b1c77105d051e1813600fcd80a8da_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 8
    public function macro_update($__url__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b65ce17f96108f47115ceaf6e35e523c7236b20a7c52e3600442e90ef85365ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b65ce17f96108f47115ceaf6e35e523c7236b20a7c52e3600442e90ef85365ff->enter($__internal_b65ce17f96108f47115ceaf6e35e523c7236b20a7c52e3600442e90ef85365ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "update"));

            $__internal_fe4e6acbc58a29ed7eaf3f6d037833930510aa4a59380e6de525fb4801bc1056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fe4e6acbc58a29ed7eaf3f6d037833930510aa4a59380e6de525fb4801bc1056->enter($__internal_fe4e6acbc58a29ed7eaf3f6d037833930510aa4a59380e6de525fb4801bc1056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "update"));

            // line 9
            echo "<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-save\"></i> ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
            echo "</button>
    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "headers", array()), "get", array(0 => "referer", 1 => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 11, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\" class=\"btn btn-danger btn-lg\"><i class=\"glyphicon glyphicon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
            echo "</a>
</div>
";
            
            $__internal_fe4e6acbc58a29ed7eaf3f6d037833930510aa4a59380e6de525fb4801bc1056->leave($__internal_fe4e6acbc58a29ed7eaf3f6d037833930510aa4a59380e6de525fb4801bc1056_prof);

            
            $__internal_b65ce17f96108f47115ceaf6e35e523c7236b20a7c52e3600442e90ef85365ff->leave($__internal_b65ce17f96108f47115ceaf6e35e523c7236b20a7c52e3600442e90ef85365ff_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Macros:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 11,  102 => 10,  99 => 9,  81 => 8,  61 => 4,  57 => 3,  54 => 2,  36 => 1,  25 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro create(url) %}
<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-ok\"></i> {{ 'sylius.ui.create'|trans }}</button>
    <a href=\"{{ app.request.headers.get('referer', url) }}\" class=\"btn btn-danger btn-lg\"><i class=\"glyphicon glyphicon-remove\"></i> {{ 'sylius.ui.cancel'|trans }}</a>
</div>
{% endmacro %}

{% macro update(url) %}
<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"glyphicon glyphicon-save\"></i> {{ 'sylius.ui.save_changes'|trans }}</button>
    <a href=\"{{ app.request.headers.get('referer', url) }}\" class=\"btn btn-danger btn-lg\"><i class=\"glyphicon glyphicon-remove\"></i> {{ 'sylius.ui.cancel'|trans }}</a>
</div>
{% endmacro %}
", "SyliusResourceBundle:Macros:actions.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/views/Macros/actions.html.twig");
    }
}
