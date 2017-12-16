<?php

/* @SyliusUi/Macro/pagination.html.twig */
class __TwigTemplate_6dd59c84760471235333f6beda7ba08e0c6cdd9afd3ebfc551ad7434288498de extends Twig_Template
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
        $__internal_ef232000a2ed73115922dba6c2aacec205e0d6e2d38a803b67e9a384d8f58c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef232000a2ed73115922dba6c2aacec205e0d6e2d38a803b67e9a384d8f58c45->enter($__internal_ef232000a2ed73115922dba6c2aacec205e0d6e2d38a803b67e9a384d8f58c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/pagination.html.twig"));

        $__internal_1d9c6751ef3005a4a8e9bf1b3a916bfc6c139997ab8c1e1a18e1b374efd848df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9c6751ef3005a4a8e9bf1b3a916bfc6c139997ab8c1e1a18e1b374efd848df->enter($__internal_1d9c6751ef3005a4a8e9bf1b3a916bfc6c139997ab8c1e1a18e1b374efd848df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/pagination.html.twig"));

        // line 6
        echo "
";
        
        $__internal_ef232000a2ed73115922dba6c2aacec205e0d6e2d38a803b67e9a384d8f58c45->leave($__internal_ef232000a2ed73115922dba6c2aacec205e0d6e2d38a803b67e9a384d8f58c45_prof);

        
        $__internal_1d9c6751ef3005a4a8e9bf1b3a916bfc6c139997ab8c1e1a18e1b374efd848df->leave($__internal_1d9c6751ef3005a4a8e9bf1b3a916bfc6c139997ab8c1e1a18e1b374efd848df_prof);

    }

    // line 1
    public function macro_simple($__paginator__ = null, $__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_da1500e3884b0a466accecaf19d2a7a890ba74b82f4cbce99e47eb84b76ab1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_da1500e3884b0a466accecaf19d2a7a890ba74b82f4cbce99e47eb84b76ab1c5->enter($__internal_da1500e3884b0a466accecaf19d2a7a890ba74b82f4cbce99e47eb84b76ab1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "simple"));

            $__internal_99e9d404e32a80d6e9ba147d1017febf98a57f5e0cff9de6b1f798ae0db801d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_99e9d404e32a80d6e9ba147d1017febf98a57f5e0cff9de6b1f798ae0db801d4->enter($__internal_99e9d404e32a80d6e9ba147d1017febf98a57f5e0cff9de6b1f798ae0db801d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "simple"));

            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 2, $this->getSourceContext()); })()), "haveToPaginate", array(), "method")) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 3, $this->getSourceContext()); })()), "semantic_ui_translated", ((array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), array())) : (array())));
                echo "
    ";
            }
            
            $__internal_99e9d404e32a80d6e9ba147d1017febf98a57f5e0cff9de6b1f798ae0db801d4->leave($__internal_99e9d404e32a80d6e9ba147d1017febf98a57f5e0cff9de6b1f798ae0db801d4_prof);

            
            $__internal_da1500e3884b0a466accecaf19d2a7a890ba74b82f4cbce99e47eb84b76ab1c5->leave($__internal_da1500e3884b0a466accecaf19d2a7a890ba74b82f4cbce99e47eb84b76ab1c5_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_perPage($__paginator__ = null, $__paginationLimits__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "paginationLimits" => $__paginationLimits__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a69d33e54a5e2dde8f01b84d26ed06741ba52447a47222247d9eedf039ad60b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a69d33e54a5e2dde8f01b84d26ed06741ba52447a47222247d9eedf039ad60b9->enter($__internal_a69d33e54a5e2dde8f01b84d26ed06741ba52447a47222247d9eedf039ad60b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "perPage"));

            $__internal_74dea8d4a6f9d3445e583217e9345954f097bbc4976c322b6600ee8f5f492016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_74dea8d4a6f9d3445e583217e9345954f097bbc4976c322b6600ee8f5f492016->enter($__internal_74dea8d4a6f9d3445e583217e9345954f097bbc4976c322b6600ee8f5f492016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "perPage"));

            // line 8
            echo "    <div class=\"ui simple fluid dropdown item\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.show"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 9, $this->getSourceContext()); })()), "maxPerPage", array()), "html", null, true);
            echo "
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginationLimits"]) || array_key_exists("paginationLimits", $context) ? $context["paginationLimits"] : (function () { throw new Twig_Error_Runtime('Variable "paginationLimits" does not exist.', 12, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
                if (($context["limit"] != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 12, $this->getSourceContext()); })()), "maxPerPage", array()))) {
                    // line 13
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "query", array())), array("limit" => $context["limit"])));
                    // line 14
                    echo "            <a class=\"item\" href=\"";
                    echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
                    echo "</a>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
    </div>
";
            
            $__internal_74dea8d4a6f9d3445e583217e9345954f097bbc4976c322b6600ee8f5f492016->leave($__internal_74dea8d4a6f9d3445e583217e9345954f097bbc4976c322b6600ee8f5f492016_prof);

            
            $__internal_a69d33e54a5e2dde8f01b84d26ed06741ba52447a47222247d9eedf039ad60b9->leave($__internal_a69d33e54a5e2dde8f01b84d26ed06741ba52447a47222247d9eedf039ad60b9_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 16,  115 => 14,  112 => 13,  107 => 12,  99 => 9,  96 => 8,  77 => 7,  58 => 3,  55 => 2,  36 => 1,  25 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro simple(paginator, options) %}
    {% if paginator.haveToPaginate() %}
        {{ pagerfanta(paginator, 'semantic_ui_translated', options|default({})) }}
    {% endif %}
{% endmacro %}

{% macro perPage(paginator, paginationLimits) %}
    <div class=\"ui simple fluid dropdown item\">
        {{ 'sylius.ui.show'|trans }} {{ paginator.maxPerPage }}
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
        {% for limit in paginationLimits if limit != paginator.maxPerPage %}
            {% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')|merge(app.request.query)|merge({'limit': limit})) %}
            <a class=\"item\" href=\"{{ path }}\">{{ limit }}</a>
        {% endfor %}
        </div>
    </div>
{% endmacro %}
", "@SyliusUi/Macro/pagination.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Macro\\pagination.html.twig");
    }
}
