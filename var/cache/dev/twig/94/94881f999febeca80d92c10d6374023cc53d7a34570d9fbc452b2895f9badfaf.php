<?php

/* @SyliusUi/Grid/_default.html.twig */
class __TwigTemplate_156165e26a6b73d9510d469ea6ec8bc3a8ca1a14c0f31d239f241bc3520215a0 extends Twig_Template
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
        $__internal_6687e0eb757ccbd03460384d502a3fabbff9e952fd55e4344d8e4ccd4fbe6a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6687e0eb757ccbd03460384d502a3fabbff9e952fd55e4344d8e4ccd4fbe6a83->enter($__internal_6687e0eb757ccbd03460384d502a3fabbff9e952fd55e4344d8e4ccd4fbe6a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/_default.html.twig"));

        $__internal_e7741daf954da0755098f84851126126c6039eed88c356bdc9fefeb77fcd6ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7741daf954da0755098f84851126126c6039eed88c356bdc9fefeb77fcd6ede->enter($__internal_e7741daf954da0755098f84851126126c6039eed88c356bdc9fefeb77fcd6ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/_default.html.twig"));

        // line 1
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "@SyliusUi/Grid/_default.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusUi/Grid/_default.html.twig", 2);
        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusUi/Grid/_default.html.twig", 3);
        // line 4
        $context["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "@SyliusUi/Grid/_default.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 6, $this->getSourceContext()); })()), "definition", array());
        // line 7
        $context["data"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 7, $this->getSourceContext()); })()), "data", array());
        // line 8
        echo "
";
        // line 9
        $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 10
        echo "
";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 11, $this->getSourceContext()); })()), "enabledFilters", array())) > 0)) {
            // line 12
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.filters"), "html", null, true);
            echo "
        </div>
        <div class=\"content active\">
            <form method=\"get\" action=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"ui loadable form\">
                <div class=\"two fields\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 21, $this->getSourceContext()); })()), "enabledFilters", array()), "position"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["filter"], "enabled", array())) {
                    // line 22
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_filter')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 22, $this->getSourceContext()); })()), $context["filter"]));
                    echo "

                    ";
                    // line 24
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()) % 2)) {
                        // line 25
                        echo "                        </div>
                        <div class=\"two fields\">
                    ";
                    }
                    // line 28
                    echo "                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </div>
                ";
            // line 30
            echo $context["buttons"]->macro_filter();
            echo "
                ";
            // line 31
            echo $context["buttons"]->macro_resetFilters((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 31, $this->getSourceContext()); })()));
            echo "
            </form>
        </div>
    </div>
";
        }
        // line 36
        echo "
<div class=\"ui segment overflow-x-auto\">
    ";
        // line 38
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 38, $this->getSourceContext()); })()), "limits", array())) > 1) && (twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 38, $this->getSourceContext()); })())) > min(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 38, $this->getSourceContext()); })()), "limits", array()))))) {
            // line 39
            echo "    <div class=\"ui two column fluid stackable grid\">
        <div class=\"fourteen wide column\">
            ";
            // line 41
            echo $context["pagination"]->macro_simple((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 41, $this->getSourceContext()); })()));
            echo "
        </div>
        <div class=\"two wide column\">
            <div class=\"ui fluid one item menu sylius-paginate\">
                ";
            // line 45
            echo $context["pagination"]->macro_perPage((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 45, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 45, $this->getSourceContext()); })()), "limits", array()));
            echo "
            </div>
        </div>
    </div>
    ";
        } else {
            // line 50
            echo "        ";
            echo $context["pagination"]->macro_simple((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 50, $this->getSourceContext()); })()));
            echo "
    ";
        }
        // line 52
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 52, $this->getSourceContext()); })())) > 0)) {
            // line 53
            echo "        <table class=\"ui sortable stackable celled table\">
            <thead>
            <tr>
                ";
            // line 56
            echo $context["table"]->macro_headers((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 56, $this->getSourceContext()); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 56, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->getSourceContext()); })()), "request", array()), "attributes", array()));
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 60, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 61
                echo "                ";
                echo $context["table"]->macro_row((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 61, $this->getSourceContext()); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 61, $this->getSourceContext()); })()), $context["row"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 66
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 68
        echo "    ";
        echo $context["pagination"]->macro_simple((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 68, $this->getSourceContext()); })()));
        echo "
</div>
";
        
        $__internal_6687e0eb757ccbd03460384d502a3fabbff9e952fd55e4344d8e4ccd4fbe6a83->leave($__internal_6687e0eb757ccbd03460384d502a3fabbff9e952fd55e4344d8e4ccd4fbe6a83_prof);

        
        $__internal_e7741daf954da0755098f84851126126c6039eed88c356bdc9fefeb77fcd6ede->leave($__internal_e7741daf954da0755098f84851126126c6039eed88c356bdc9fefeb77fcd6ede_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 68,  180 => 66,  175 => 63,  166 => 61,  162 => 60,  155 => 56,  150 => 53,  147 => 52,  141 => 50,  133 => 45,  126 => 41,  122 => 39,  120 => 38,  116 => 36,  108 => 31,  104 => 30,  101 => 29,  91 => 28,  86 => 25,  84 => 24,  78 => 22,  67 => 21,  62 => 19,  56 => 16,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  38 => 7,  36 => 6,  33 => 5,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}
{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/table.html.twig' as table %}

{% set definition = grid.definition %}
{% set data = grid.data %}

{% set path = path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params')) %}

{% if definition.enabledFilters|length > 0 %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui styled fluid accordion\">
        <div class=\"title active\">
            <i class=\"dropdown icon\"></i>
            {{ 'sylius.ui.filters'|trans }}
        </div>
        <div class=\"content active\">
            <form method=\"get\" action=\"{{ path }}\" class=\"ui loadable form\">
                <div class=\"two fields\">
                {% for filter in definition.enabledFilters|sort_by('position') if filter.enabled %}
                    {{ sylius_grid_render_filter(grid, filter) }}

                    {% if loop.index0 % 2 %}
                        </div>
                        <div class=\"two fields\">
                    {% endif %}
                {% endfor %}
                </div>
                {{ buttons.filter() }}
                {{ buttons.resetFilters(path) }}
            </form>
        </div>
    </div>
{% endif %}

<div class=\"ui segment overflow-x-auto\">
    {% if definition.limits|length > 1 and data|length > min(definition.limits) %}
    <div class=\"ui two column fluid stackable grid\">
        <div class=\"fourteen wide column\">
            {{ pagination.simple(data) }}
        </div>
        <div class=\"two wide column\">
            <div class=\"ui fluid one item menu sylius-paginate\">
                {{ pagination.perPage(data, definition.limits) }}
            </div>
        </div>
    </div>
    {% else %}
        {{ pagination.simple(data) }}
    {% endif %}
    {% if data|length > 0 %}
        <table class=\"ui sortable stackable celled table\">
            <thead>
            <tr>
                {{ table.headers(grid, definition, app.request.attributes) }}
            </tr>
            </thead>
            <tbody>
            {% for row in data %}
                {{ table.row(grid, definition, row) }}
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
    {{ pagination.simple(data) }}
</div>
", "@SyliusUi/Grid/_default.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\_default.html.twig");
    }
}
