<?php

/* SyliusUiBundle:Macro:table.html.twig */
class __TwigTemplate_ce55ec8ef530572ec75760e68f229c287caf96707dee08ee2ec73c1fc0893316 extends Twig_Template
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
        $__internal_e92f3a88be87d5bc56352aba600edf8f5e6cb24000c7c5fed558fc691d3c4a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92f3a88be87d5bc56352aba600edf8f5e6cb24000c7c5fed558fc691d3c4a05->enter($__internal_e92f3a88be87d5bc56352aba600edf8f5e6cb24000c7c5fed558fc691d3c4a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:table.html.twig"));

        $__internal_b0fdab2a55642c1bd5a1a1a597ed643acdb694b04e1375833c5781365c28f309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fdab2a55642c1bd5a1a1a597ed643acdb694b04e1375833c5781365c28f309->enter($__internal_b0fdab2a55642c1bd5a1a1a597ed643acdb694b04e1375833c5781365c28f309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Macro:table.html.twig"));

        // line 17
        echo "
";
        
        $__internal_e92f3a88be87d5bc56352aba600edf8f5e6cb24000c7c5fed558fc691d3c4a05->leave($__internal_e92f3a88be87d5bc56352aba600edf8f5e6cb24000c7c5fed558fc691d3c4a05_prof);

        
        $__internal_b0fdab2a55642c1bd5a1a1a597ed643acdb694b04e1375833c5781365c28f309->leave($__internal_b0fdab2a55642c1bd5a1a1a597ed643acdb694b04e1375833c5781365c28f309_prof);

    }

    // line 1
    public function macro_headers($__grid__ = null, $__definition__ = null, $__requestAttributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "definition" => $__definition__,
            "requestAttributes" => $__requestAttributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7db215629e056e0497297e600766476efa65734557a06175f6042be3b364e46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7db215629e056e0497297e600766476efa65734557a06175f6042be3b364e46c->enter($__internal_7db215629e056e0497297e600766476efa65734557a06175f6042be3b364e46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "headers"));

            $__internal_919155a09e9042f2f23b9cb65cd5b9196a530ad039d19f1398e7721165851837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_919155a09e9042f2f23b9cb65cd5b9196a530ad039d19f1398e7721165851837->enter($__internal_919155a09e9042f2f23b9cb65cd5b9196a530ad039d19f1398e7721165851837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "headers"));

            // line 2
            echo "    ";
            $context["sorting"] = $this->loadTemplate("@SyliusUi/Macro/sorting.html.twig", "SyliusUiBundle:Macro:table.html.twig", 2);
            // line 3
            echo "
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 4, $this->getSourceContext()); })()), "fields", array()), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 5
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "enabled", array())) {
                    // line 6
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "isSortable", array())) {
                        // line 7
                        echo "                ";
                        echo $context["sorting"]->macro_tableHeader((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 7, $this->getSourceContext()); })()), $context["field"], (isset($context["requestAttributes"]) || array_key_exists("requestAttributes", $context) ? $context["requestAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "requestAttributes" does not exist.', 7, $this->getSourceContext()); })()));
                        echo "
            ";
                    } else {
                        // line 9
                        echo "                <th class=\"sylius-table-column-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "name", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "label", array())), "html", null, true);
                        echo "</th>
            ";
                    }
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "item", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 13, $this->getSourceContext()); })()), "getActions", array(0 => "item"), "method")) > 0))) {
                // line 14
                echo "        <th class=\"sylius-table-column-actions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.actions"), "html", null, true);
                echo "</th>
    ";
            }
            
            $__internal_919155a09e9042f2f23b9cb65cd5b9196a530ad039d19f1398e7721165851837->leave($__internal_919155a09e9042f2f23b9cb65cd5b9196a530ad039d19f1398e7721165851837_prof);

            
            $__internal_7db215629e056e0497297e600766476efa65734557a06175f6042be3b364e46c->leave($__internal_7db215629e056e0497297e600766476efa65734557a06175f6042be3b364e46c_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 18
    public function macro_row($__grid__ = null, $__definition__ = null, $__row__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "grid" => $__grid__,
            "definition" => $__definition__,
            "row" => $__row__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c51785eb1b641b649505c3ac02f7786c4412e2b38a378481c43fd14d99f7f270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c51785eb1b641b649505c3ac02f7786c4412e2b38a378481c43fd14d99f7f270->enter($__internal_c51785eb1b641b649505c3ac02f7786c4412e2b38a378481c43fd14d99f7f270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "row"));

            $__internal_372c07fa2b83eae98846d5f12e443f6c95a08bcb753f28e1a94ffcf6d6d311bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_372c07fa2b83eae98846d5f12e443f6c95a08bcb753f28e1a94ffcf6d6d311bb->enter($__internal_372c07fa2b83eae98846d5f12e443f6c95a08bcb753f28e1a94ffcf6d6d311bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "row"));

            // line 19
            echo "    <tr class=\"item\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 20, $this->getSourceContext()); })()), "enabledFields", array()), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 21
                echo "        <td>";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_field')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 21, $this->getSourceContext()); })()), $context["field"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 21, $this->getSourceContext()); })())));
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "item", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 23, $this->getSourceContext()); })()), "getEnabledActions", array(0 => "item"), "method")) > 0))) {
                // line 24
                echo "        <td>
            <div class=\"ui buttons\">
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 26, $this->getSourceContext()); })()), "getEnabledActions", array(0 => "item"), "method"), "position"));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 27
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 27, $this->getSourceContext()); })()), $context["action"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 27, $this->getSourceContext()); })())));
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </div>
            ";
                // line 30
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "subitem", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 30, $this->getSourceContext()); })()), "getEnabledActions", array(0 => "subitem"), "method")) > 0))) {
                    // line 31
                    echo "            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sylius\Bundle\UiBundle\Twig\SortByExtension')->sortBy(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 33, $this->getSourceContext()); })()), "getEnabledActions", array(0 => "subitem"), "method"), "position"));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 34
                        echo "                    ";
                        echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 34, $this->getSourceContext()); })()), $context["action"], (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 34, $this->getSourceContext()); })())));
                        echo "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "            </div>
            ";
                }
                // line 38
                echo "        </td>
    ";
            }
            // line 40
            echo "    </tr>
";
            
            $__internal_372c07fa2b83eae98846d5f12e443f6c95a08bcb753f28e1a94ffcf6d6d311bb->leave($__internal_372c07fa2b83eae98846d5f12e443f6c95a08bcb753f28e1a94ffcf6d6d311bb_prof);

            
            $__internal_c51785eb1b641b649505c3ac02f7786c4412e2b38a378481c43fd14d99f7f270->leave($__internal_c51785eb1b641b649505c3ac02f7786c4412e2b38a378481c43fd14d99f7f270_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Macro:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 40,  199 => 38,  195 => 36,  186 => 34,  182 => 33,  178 => 31,  176 => 30,  173 => 29,  164 => 27,  160 => 26,  156 => 24,  153 => 23,  144 => 21,  140 => 20,  137 => 19,  117 => 18,  98 => 14,  95 => 13,  89 => 12,  86 => 11,  78 => 9,  72 => 7,  69 => 6,  66 => 5,  62 => 4,  59 => 3,  56 => 2,  36 => 1,  25 => 17,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro headers(grid, definition, requestAttributes) %}
    {% import '@SyliusUi/Macro/sorting.html.twig' as sorting %}

    {% for field in definition.fields|sort_by('position') %}
        {% if field.enabled %}
            {% if field.isSortable %}
                {{ sorting.tableHeader(grid, field, requestAttributes) }}
            {% else %}
                <th class=\"sylius-table-column-{{ field.name }}\">{{ field.label|trans }}</th>
            {% endif %}
        {% endif %}
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getActions('item')|length > 0 %}
        <th class=\"sylius-table-column-actions\">{{ 'sylius.ui.actions'|trans }}</th>
    {% endif %}
{% endmacro %}

{% macro row(grid, definition, row) %}
    <tr class=\"item\">
    {% for field in definition.enabledFields|sort_by('position') %}
        <td>{{ sylius_grid_render_field(grid, field, row) }}</td>
    {% endfor %}
    {% if definition.actionGroups.item is defined and definition.getEnabledActions('item')|length > 0 %}
        <td>
            <div class=\"ui buttons\">
                {% for action in definition.getEnabledActions('item')|sort_by('position') %}
                    {{ sylius_grid_render_action(grid, action, row) }}
                {% endfor %}
            </div>
            {% if definition.actionGroups.subitem is defined and definition.getEnabledActions('subitem')|length > 0 %}
            <div class=\"ui divider\"></div>
            <div class=\"ui buttons\">
                {% for action in definition.getEnabledActions('subitem')|sort_by('position') %}
                    {{ sylius_grid_render_action(grid, action, row) }}
                {% endfor %}
            </div>
            {% endif %}
        </td>
    {% endif %}
    </tr>
{% endmacro %}
", "SyliusUiBundle:Macro:table.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Macro/table.html.twig");
    }
}
