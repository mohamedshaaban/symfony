<?php

/* @SyliusUi/Grid/Action/links.html.twig */
class __TwigTemplate_e56ebda4982f07de26542bd77b419db2b0475fb791e0a81b91216d00f540feac extends Twig_Template
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
        $__internal_9a1abd600fd64f2b5d24bd33411ebddde9606e1043594c7de9b84960d66d003f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1abd600fd64f2b5d24bd33411ebddde9606e1043594c7de9b84960d66d003f->enter($__internal_9a1abd600fd64f2b5d24bd33411ebddde9606e1043594c7de9b84960d66d003f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Action/links.html.twig"));

        $__internal_e5e0e06581e977a7d7f9ddb6f6ecd2ce61f76db29471bb3bf5efa4cb3123b081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e0e06581e977a7d7f9ddb6f6ecd2ce61f76db29471bb3bf5efa4cb3123b081->enter($__internal_e5e0e06581e977a7d7f9ddb6f6ecd2ce61f76db29471bb3bf5efa4cb3123b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Action/links.html.twig"));

        // line 1
        $context["visible"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "visible", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "visible", array())) : (true));
        // line 2
        echo "
";
        // line 3
        if ((isset($context["visible"]) || array_key_exists("visible", $context) ? $context["visible"] : (function () { throw new Twig_Error_Runtime('Variable "visible" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div class=\"ui";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "icon", array(), "any", true, true)) {
                echo " labeled icon";
            }
            echo " floating dropdown ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "class", array()), "")) : ("")), "html", null, true);
            echo " link button\">
        ";
            // line 5
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "icon", array(), "any", true, true)) {
                echo "<i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 5, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
                echo " icon\"></i>";
            }
            // line 6
            echo "        <span class=\"text\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 6, $this->getSourceContext()); })()), "label", array())), "html", null, true);
            echo "</span>
        <div class=\"menu\">
            ";
            // line 8
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "header", array(), "any", true, true)) {
                // line 9
                echo "            <div class=\"header\">
                ";
                // line 10
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "header", array(), "any", false, true), "icon", array(), "any", true, true)) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 10, $this->getSourceContext()); })()), "header", array()), "icon", array()), "html", null, true);
                    echo " icon\"></i>";
                }
                // line 11
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 11, $this->getSourceContext()); })()), "header", array()), "label", array())), "html", null, true);
                echo "
            </div>
            <div class=\"divider\"></div>
            ";
            }
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 15, $this->getSourceContext()); })()), "links", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 16
                echo "                ";
                $context["is_link_visible"] = ((twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "visible", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["link"], "visible", array())) : (true));
                // line 17
                echo "
                ";
                // line 18
                if ((isset($context["is_link_visible"]) || array_key_exists("is_link_visible", $context) ? $context["is_link_visible"] : (function () { throw new Twig_Error_Runtime('Variable "is_link_visible" does not exist.', 18, $this->getSourceContext()); })())) {
                    // line 19
                    echo "                    ";
                    $this->loadTemplate("@SyliusUi/Grid/Action/_link.html.twig", "@SyliusUi/Grid/Action/links.html.twig", 19)->display($context);
                    // line 20
                    echo "                ";
                }
                // line 21
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    </div>
";
        }
        
        $__internal_9a1abd600fd64f2b5d24bd33411ebddde9606e1043594c7de9b84960d66d003f->leave($__internal_9a1abd600fd64f2b5d24bd33411ebddde9606e1043594c7de9b84960d66d003f_prof);

        
        $__internal_e5e0e06581e977a7d7f9ddb6f6ecd2ce61f76db29471bb3bf5efa4cb3123b081->leave($__internal_e5e0e06581e977a7d7f9ddb6f6ecd2ce61f76db29471bb3bf5efa4cb3123b081_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Action/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 22,  104 => 21,  101 => 20,  98 => 19,  96 => 18,  93 => 17,  90 => 16,  72 => 15,  64 => 11,  58 => 10,  55 => 9,  53 => 8,  47 => 6,  41 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set visible = options.visible is defined ? options.visible : true %}

{% if visible %}
    <div class=\"ui{% if options.icon is defined %} labeled icon{% endif %} floating dropdown {{ options.class|default('') }} link button\">
        {% if options.icon is defined %}<i class=\"{{ options.icon }} icon\"></i>{% endif %}
        <span class=\"text\">{{ action.label|trans }}</span>
        <div class=\"menu\">
            {% if options.header is defined %}
            <div class=\"header\">
                {% if options.header.icon is defined %}<i class=\"{{ options.header.icon }} icon\"></i>{% endif %}
                {{ options.header.label|trans }}
            </div>
            <div class=\"divider\"></div>
            {% endif %}
            {% for link in options.links %}
                {% set is_link_visible = link.visible is defined ? link.visible : true %}

                {% if is_link_visible %}
                    {% include '@SyliusUi/Grid/Action/_link.html.twig' %}
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}
", "@SyliusUi/Grid/Action/links.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\Action\\links.html.twig");
    }
}
