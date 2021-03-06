<?php

/* SyliusThemeBundle:Collector:theme.html.twig */
class __TwigTemplate_992f86ddd381b1aaa0028c1dc3ff8f43e74c53aa0582956c705e62402da4f2d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "SyliusThemeBundle:Collector:theme.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a52ee0a3f4c15107859caabe0682cef19277367f3e8b1e1089a321185ed6f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a52ee0a3f4c15107859caabe0682cef19277367f3e8b1e1089a321185ed6f51->enter($__internal_6a52ee0a3f4c15107859caabe0682cef19277367f3e8b1e1089a321185ed6f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusThemeBundle:Collector:theme.html.twig"));

        $__internal_7c2fa485d961b5902bfc12845649e02394574255bd3645a2a95036b35a9a7ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2fa485d961b5902bfc12845649e02394574255bd3645a2a95036b35a9a7ebf->enter($__internal_7c2fa485d961b5902bfc12845649e02394574255bd3645a2a95036b35a9a7ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusThemeBundle:Collector:theme.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a52ee0a3f4c15107859caabe0682cef19277367f3e8b1e1089a321185ed6f51->leave($__internal_6a52ee0a3f4c15107859caabe0682cef19277367f3e8b1e1089a321185ed6f51_prof);

        
        $__internal_7c2fa485d961b5902bfc12845649e02394574255bd3645a2a95036b35a9a7ebf->leave($__internal_7c2fa485d961b5902bfc12845649e02394574255bd3645a2a95036b35a9a7ebf_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b934beca5940121bc11f75ebf7f30192257f2792bd74d8d37af387cecfadb635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b934beca5940121bc11f75ebf7f30192257f2792bd74d8d37af387cecfadb635->enter($__internal_b934beca5940121bc11f75ebf7f30192257f2792bd74d8d37af387cecfadb635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e26fbf3b324dd87a3dfea8f07a64b6df8c7eac667e47f0d93a4b1cb34a99744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e26fbf3b324dd87a3dfea8f07a64b6df8c7eac667e47f0d93a4b1cb34a99744->enter($__internal_7e26fbf3b324dd87a3dfea8f07a64b6df8c7eac667e47f0d93a4b1cb34a99744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "themes", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@SyliusTheme/Collector/Icon/theme.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "usedTheme", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "usedTheme", array()), twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "themes", array())))) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "themes", array())))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>All themes</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "themes", array())), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Used themes</b>
                <span class=\"sf-toolbar-status\">";
            // line 20
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "usedThemes", array())), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig");
            echo "
    ";
        }
        
        $__internal_7e26fbf3b324dd87a3dfea8f07a64b6df8c7eac667e47f0d93a4b1cb34a99744->leave($__internal_7e26fbf3b324dd87a3dfea8f07a64b6df8c7eac667e47f0d93a4b1cb34a99744_prof);

        
        $__internal_b934beca5940121bc11f75ebf7f30192257f2792bd74d8d37af387cecfadb635->leave($__internal_b934beca5940121bc11f75ebf7f30192257f2792bd74d8d37af387cecfadb635_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d844a036994ff0a65e59f6604e0ff3bb85b3c1f2b09b18b062d612ee99f39d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d844a036994ff0a65e59f6604e0ff3bb85b3c1f2b09b18b062d612ee99f39d90->enter($__internal_d844a036994ff0a65e59f6604e0ff3bb85b3c1f2b09b18b062d612ee99f39d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33b4d2689aec1abd20d9378b2c7b07e53f51a3b4b779e2ee11480d8730e55fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b4d2689aec1abd20d9378b2c7b07e53f51a3b4b779e2ee11480d8730e55fc7->enter($__internal_33b4d2689aec1abd20d9378b2c7b07e53f51a3b4b779e2ee11480d8730e55fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "usedThemes", array()))) {
            echo "disabled";
        }
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_include($this->env, $context, "@SyliusTheme/Collector/Icon/theme.svg");
        echo "</span>
        <strong>Themes</strong>
        <span class=\"count\">
            <span>";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->getSourceContext()); })()), "usedThemes", array())), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_33b4d2689aec1abd20d9378b2c7b07e53f51a3b4b779e2ee11480d8730e55fc7->leave($__internal_33b4d2689aec1abd20d9378b2c7b07e53f51a3b4b779e2ee11480d8730e55fc7_prof);

        
        $__internal_d844a036994ff0a65e59f6604e0ff3bb85b3c1f2b09b18b062d612ee99f39d90->leave($__internal_d844a036994ff0a65e59f6604e0ff3bb85b3c1f2b09b18b062d612ee99f39d90_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32f6a74e8ade9a1f804cfcab3a0b1084423033f79dd62d1a936b13166270fa6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f6a74e8ade9a1f804cfcab3a0b1084423033f79dd62d1a936b13166270fa6e->enter($__internal_32f6a74e8ade9a1f804cfcab3a0b1084423033f79dd62d1a936b13166270fa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea53bb077eede64beb7d8b536d709d9e08077e0807ce44ce5f88d71bc77d906f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea53bb077eede64beb7d8b536d709d9e08077e0807ce44ce5f88d71bc77d906f->enter($__internal_ea53bb077eede64beb7d8b536d709d9e08077e0807ce44ce5f88d71bc77d906f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    <h2>Theme Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 43, $this->getSourceContext()); })()), "usedThemes", array())), "html", null, true);
        echo "</span>
            <span class=\"label\">Used themes</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 48
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 48, $this->getSourceContext()); })()), "themes", array())), "html", null, true);
        echo "</span>
            <span class=\"label\">All themes</span>
        </div>
    </div>

    <h2>Themes List</h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Used <span class=\"badge\">";
        // line 57
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 57, $this->getSourceContext()); })()), "usedThemes", array())), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes used.
                </p>

                ";
        // line 64
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 64, $this->getSourceContext()); })()), "usedThemes", array()))) {
            // line 65
            echo "                    <div class=\"empty\">
                        <p>No themes were used.</p>
                    </div>
                ";
        } else {
            // line 69
            echo "                    ";
            echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 69, $this->getSourceContext()); })()), "usedThemes", array()));
            echo "
                ";
        }
        // line 71
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">All <span class=\"badge\">";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 75, $this->getSourceContext()); })()), "themes", array())), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes found.
                </p>

                ";
        // line 82
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 82, $this->getSourceContext()); })()), "themes", array()))) {
            // line 83
            echo "                    <div class=\"empty\">
                        <p>No themes were found.</p>
                    </div>
                ";
        } else {
            // line 87
            echo "                    ";
            echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 87, $this->getSourceContext()); })()), "themes", array()));
            echo "
                ";
        }
        // line 89
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_ea53bb077eede64beb7d8b536d709d9e08077e0807ce44ce5f88d71bc77d906f->leave($__internal_ea53bb077eede64beb7d8b536d709d9e08077e0807ce44ce5f88d71bc77d906f_prof);

        
        $__internal_32f6a74e8ade9a1f804cfcab3a0b1084423033f79dd62d1a936b13166270fa6e->leave($__internal_32f6a74e8ade9a1f804cfcab3a0b1084423033f79dd62d1a936b13166270fa6e_prof);

    }

    // line 94
    public function macro_render_table($__themes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "themes" => $__themes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7b8d49739158472c57d2b2188934e41deb55868c592518c6ab3a1b9c4973b64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7b8d49739158472c57d2b2188934e41deb55868c592518c6ab3a1b9c4973b64e->enter($__internal_7b8d49739158472c57d2b2188934e41deb55868c592518c6ab3a1b9c4973b64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_545b23184de565e7ed0c563afb1a8971d4cbff1949dc647faf7518a4dee7e040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_545b23184de565e7ed0c563afb1a8971d4cbff1949dc647faf7518a4dee7e040->enter($__internal_545b23184de565e7ed0c563afb1a8971d4cbff1949dc647faf7518a4dee7e040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 95
            echo "    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new Twig_Error_Runtime('Variable "themes" does not exist.', 104, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 105
                echo "            <tr>
                <td class=\"font-normal text-small text-bold\">";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "name", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "path", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["theme"], "description", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "        </tbody>
    </table>
";
            
            $__internal_545b23184de565e7ed0c563afb1a8971d4cbff1949dc647faf7518a4dee7e040->leave($__internal_545b23184de565e7ed0c563afb1a8971d4cbff1949dc647faf7518a4dee7e040_prof);

            
            $__internal_7b8d49739158472c57d2b2188934e41deb55868c592518c6ab3a1b9c4973b64e->leave($__internal_7b8d49739158472c57d2b2188934e41deb55868c592518c6ab3a1b9c4973b64e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusThemeBundle:Collector:theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 111,  291 => 108,  287 => 107,  283 => 106,  280 => 105,  276 => 104,  265 => 95,  247 => 94,  234 => 89,  228 => 87,  222 => 83,  220 => 82,  210 => 75,  204 => 71,  198 => 69,  192 => 65,  190 => 64,  180 => 57,  168 => 48,  160 => 43,  154 => 39,  145 => 38,  131 => 33,  125 => 30,  118 => 29,  109 => 28,  96 => 24,  93 => 23,  87 => 20,  79 => 15,  75 => 13,  73 => 12,  70 => 11,  65 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.themes is not empty %}
        {% set icon %}
            {{ include('@SyliusTheme/Collector/Icon/theme.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.usedTheme|default(collector.themes|length) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>All themes</b>
                <span class=\"sf-toolbar-status\">{{ collector.themes|length }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Used themes</b>
                <span class=\"sf-toolbar-status\">{{ collector.usedThemes|length }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig') }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {% if collector.usedThemes is empty %}disabled{% endif %}\">
        <span class=\"icon\">{{ include('@SyliusTheme/Collector/Icon/theme.svg') }}</span>
        <strong>Themes</strong>
        <span class=\"count\">
            <span>{{ collector.usedThemes|length }}</span>
        </span>
    </span>
{% endblock %}

{% block panel %}
    <h2>Theme Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.usedThemes|length }}</span>
            <span class=\"label\">Used themes</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.themes|length }}</span>
            <span class=\"label\">All themes</span>
        </div>
    </div>

    <h2>Themes List</h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Used <span class=\"badge\">{{ collector.usedThemes|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes used.
                </p>

                {% if collector.usedThemes is empty %}
                    <div class=\"empty\">
                        <p>No themes were used.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(collector.usedThemes) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">All <span class=\"badge\">{{ collector.themes|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These are themes found.
                </p>

                {% if collector.themes is empty %}
                    <div class=\"empty\">
                        <p>No themes were found.</p>
                    </div>
                {% else %}
                    {{ helper.render_table(collector.themes) }}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% macro render_table(themes) %}
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Path</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        {% for theme in themes %}
            <tr>
                <td class=\"font-normal text-small text-bold\">{{ theme.name }}</td>
                <td class=\"font-normal text-small\">{{ theme.path }}</td>
                <td class=\"font-normal text-small\">{{ theme.description }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "SyliusThemeBundle:Collector:theme.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Resources\\views\\Collector\\theme.html.twig");
    }
}
