<?php

/* SyliusUiBundle:Macro:headers.html.twig */
class __TwigTemplate_b46dacac80d83e70513d9c03946ff00854e56b020ae006a2a784dc84f8806ea7 extends Twig_Template
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
        $__internal_0d5320f91bc618e3db1940e21056c6ac997158d7ff2398f78405a078441c4273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5320f91bc618e3db1940e21056c6ac997158d7ff2398f78405a078441c4273->enter($__internal_0d5320f91bc618e3db1940e21056c6ac997158d7ff2398f78405a078441c4273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:headers.html.twig"));

        $__internal_eb8735bb1b67dd4e72a3ab8e09d2b265d19d0a05969d4cc51da2a6b32838d1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8735bb1b67dd4e72a3ab8e09d2b265d19d0a05969d4cc51da2a6b32838d1fb->enter($__internal_eb8735bb1b67dd4e72a3ab8e09d2b265d19d0a05969d4cc51da2a6b32838d1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:headers.html.twig"));

        
        $__internal_0d5320f91bc618e3db1940e21056c6ac997158d7ff2398f78405a078441c4273->leave($__internal_0d5320f91bc618e3db1940e21056c6ac997158d7ff2398f78405a078441c4273_prof);

        
        $__internal_eb8735bb1b67dd4e72a3ab8e09d2b265d19d0a05969d4cc51da2a6b32838d1fb->leave($__internal_eb8735bb1b67dd4e72a3ab8e09d2b265d19d0a05969d4cc51da2a6b32838d1fb_prof);

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
            $__internal_823cab312868ff73a47cd165bf9d9dd62e0a783e6010e540d286ff3b92d59b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_823cab312868ff73a47cd165bf9d9dd62e0a783e6010e540d286ff3b92d59b8a->enter($__internal_823cab312868ff73a47cd165bf9d9dd62e0a783e6010e540d286ff3b92d59b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_546fffd2ae135ed3bdcf3af1d446999ced180b26d3ee7455fc6fcb1e052980c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_546fffd2ae135ed3bdcf3af1d446999ced180b26d3ee7455fc6fcb1e052980c2->enter($__internal_546fffd2ae135ed3bdcf3af1d446999ced180b26d3ee7455fc6fcb1e052980c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

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
            
            $__internal_546fffd2ae135ed3bdcf3af1d446999ced180b26d3ee7455fc6fcb1e052980c2->leave($__internal_546fffd2ae135ed3bdcf3af1d446999ced180b26d3ee7455fc6fcb1e052980c2_prof);

            
            $__internal_823cab312868ff73a47cd165bf9d9dd62e0a783e6010e540d286ff3b92d59b8a->leave($__internal_823cab312868ff73a47cd165bf9d9dd62e0a783e6010e540d286ff3b92d59b8a_prof);


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
", "SyliusUiBundle:Macro:headers.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Macro\\headers.html.twig");
    }
}
