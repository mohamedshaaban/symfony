<?php

/* @SyliusUi/Macro/table.html.twig */
class __TwigTemplate_a79eb60a6305cd8d2ffacd869a64516ec639df364916dcefa59646fd46f17b57 extends Twig_Template
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
        $__internal_1f92fdfa4431df7719151097731ec96cb1789e547e5cdcaa3e5dd89ee3ba5bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f92fdfa4431df7719151097731ec96cb1789e547e5cdcaa3e5dd89ee3ba5bd3->enter($__internal_1f92fdfa4431df7719151097731ec96cb1789e547e5cdcaa3e5dd89ee3ba5bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/table.html.twig"));

        $__internal_e1306ea30c9f9aa460c4dc221f6891d0b99789b1c8c3ffd296615edc2edf08a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1306ea30c9f9aa460c4dc221f6891d0b99789b1c8c3ffd296615edc2edf08a8->enter($__internal_e1306ea30c9f9aa460c4dc221f6891d0b99789b1c8c3ffd296615edc2edf08a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/table.html.twig"));

        // line 17
        echo "
";
        
        $__internal_1f92fdfa4431df7719151097731ec96cb1789e547e5cdcaa3e5dd89ee3ba5bd3->leave($__internal_1f92fdfa4431df7719151097731ec96cb1789e547e5cdcaa3e5dd89ee3ba5bd3_prof);

        
        $__internal_e1306ea30c9f9aa460c4dc221f6891d0b99789b1c8c3ffd296615edc2edf08a8->leave($__internal_e1306ea30c9f9aa460c4dc221f6891d0b99789b1c8c3ffd296615edc2edf08a8_prof);

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
            $__internal_36201737eaaeff5467f829aaab6447a76915ca6ba1e0419baa93f0a3c9111317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_36201737eaaeff5467f829aaab6447a76915ca6ba1e0419baa93f0a3c9111317->enter($__internal_36201737eaaeff5467f829aaab6447a76915ca6ba1e0419baa93f0a3c9111317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "headers"));

            $__internal_121cd7372470c523c84ee10266147b1ccecfb68993bd2614185cbf963be549ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_121cd7372470c523c84ee10266147b1ccecfb68993bd2614185cbf963be549ae->enter($__internal_121cd7372470c523c84ee10266147b1ccecfb68993bd2614185cbf963be549ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "headers"));

            // line 2
            echo "    ";
            $context["sorting"] = $this->loadTemplate("@SyliusUi/Macro/sorting.html.twig", "@SyliusUi/Macro/table.html.twig", 2);
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
            
            $__internal_121cd7372470c523c84ee10266147b1ccecfb68993bd2614185cbf963be549ae->leave($__internal_121cd7372470c523c84ee10266147b1ccecfb68993bd2614185cbf963be549ae_prof);

            
            $__internal_36201737eaaeff5467f829aaab6447a76915ca6ba1e0419baa93f0a3c9111317->leave($__internal_36201737eaaeff5467f829aaab6447a76915ca6ba1e0419baa93f0a3c9111317_prof);


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
            $__internal_82ff1b9584ef286c030ac1be0c9b313b384249f3cfa8b0506206cec04457c72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_82ff1b9584ef286c030ac1be0c9b313b384249f3cfa8b0506206cec04457c72a->enter($__internal_82ff1b9584ef286c030ac1be0c9b313b384249f3cfa8b0506206cec04457c72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "row"));

            $__internal_590d474ee9afc632984763eb25bad8d5e1810fe6719af479fadf5fc3f4bbb584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_590d474ee9afc632984763eb25bad8d5e1810fe6719af479fadf5fc3f4bbb584->enter($__internal_590d474ee9afc632984763eb25bad8d5e1810fe6719af479fadf5fc3f4bbb584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "row"));

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
            
            $__internal_590d474ee9afc632984763eb25bad8d5e1810fe6719af479fadf5fc3f4bbb584->leave($__internal_590d474ee9afc632984763eb25bad8d5e1810fe6719af479fadf5fc3f4bbb584_prof);

            
            $__internal_82ff1b9584ef286c030ac1be0c9b313b384249f3cfa8b0506206cec04457c72a->leave($__internal_82ff1b9584ef286c030ac1be0c9b313b384249f3cfa8b0506206cec04457c72a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/table.html.twig";
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
", "@SyliusUi/Macro/table.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Macro\\table.html.twig");
    }
}
