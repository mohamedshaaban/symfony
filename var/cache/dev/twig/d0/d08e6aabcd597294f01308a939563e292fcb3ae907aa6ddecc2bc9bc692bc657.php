<?php

/* SyliusUiBundle:Menu:sidebar.html.twig */
class __TwigTemplate_6d3024a26e0794a3772f820113d8f5cd112479b9c013c2079cd895616beb7e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusUiBundle:Menu:sidebar.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f628800d1f13ce6432cff60ee5b817622853d6275f615f124ead910e4fa9a86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f628800d1f13ce6432cff60ee5b817622853d6275f615f124ead910e4fa9a86a->enter($__internal_f628800d1f13ce6432cff60ee5b817622853d6275f615f124ead910e4fa9a86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:sidebar.html.twig"));

        $__internal_c83b0f54f92520d212e0b5704d79eb6257f8eb85a279762d6cd6d9436fff3129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83b0f54f92520d212e0b5704d79eb6257f8eb85a279762d6cd6d9436fff3129->enter($__internal_c83b0f54f92520d212e0b5704d79eb6257f8eb85a279762d6cd6d9436fff3129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f628800d1f13ce6432cff60ee5b817622853d6275f615f124ead910e4fa9a86a->leave($__internal_f628800d1f13ce6432cff60ee5b817622853d6275f615f124ead910e4fa9a86a_prof);

        
        $__internal_c83b0f54f92520d212e0b5704d79eb6257f8eb85a279762d6cd6d9436fff3129->leave($__internal_c83b0f54f92520d212e0b5704d79eb6257f8eb85a279762d6cd6d9436fff3129_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_e62024a93155c00fb1f51ac417a4b27082ec29df9d7304f97b1510c377475e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62024a93155c00fb1f51ac417a4b27082ec29df9d7304f97b1510c377475e24->enter($__internal_e62024a93155c00fb1f51ac417a4b27082ec29df9d7304f97b1510c377475e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_64304add659e41689d14e5c6bfb687ffac8d373599322a832353d5b074feec53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64304add659e41689d14e5c6bfb687ffac8d373599322a832353d5b074feec53->enter($__internal_64304add659e41689d14e5c6bfb687ffac8d373599322a832353d5b074feec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_64304add659e41689d14e5c6bfb687ffac8d373599322a832353d5b074feec53->leave($__internal_64304add659e41689d14e5c6bfb687ffac8d373599322a832353d5b074feec53_prof);

        
        $__internal_e62024a93155c00fb1f51ac417a4b27082ec29df9d7304f97b1510c377475e24->leave($__internal_e62024a93155c00fb1f51ac417a4b27082ec29df9d7304f97b1510c377475e24_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_a050354a508b8ff29ff88c2a0f280fa1892bb926f44c4e1b928b0606e390774f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a050354a508b8ff29ff88c2a0f280fa1892bb926f44c4e1b928b0606e390774f->enter($__internal_a050354a508b8ff29ff88c2a0f280fa1892bb926f44c4e1b928b0606e390774f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_eef095735c00c581463e902d5ce473dc17040ddf2736f20b553343a6017b4112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef095735c00c581463e902d5ce473dc17040ddf2736f20b553343a6017b4112->enter($__internal_eef095735c00c581463e902d5ce473dc17040ddf2736f20b553343a6017b4112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 11
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 12, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 12, $this->getSourceContext()); })())), "method")) {
            // line 13
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 13, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 13, $this->getSourceContext()); })()), "currentClass", array())));
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 14, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 14, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 14, $this->getSourceContext()); })()), "matchingDepth", array())), "method")) {
            // line 15
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 15, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 15, $this->getSourceContext()); })()), "ancestorClass", array())));
        }
        // line 17
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 17, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
            // line 18
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 18, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 18, $this->getSourceContext()); })()), "firstClass", array())));
        }
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "actsLikeLast", array())) {
            // line 21
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 21, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 21, $this->getSourceContext()); })()), "lastClass", array())));
        }
        // line 23
        echo "
";
        // line 25
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 25, $this->getSourceContext()); })()), "depth", array()) === 0))) {
            // line 26
            echo "    ";
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 26, $this->getSourceContext()); })()), "branch_class", array())) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 26, $this->getSourceContext()); })()), "displayChildren", array()))) {
                // line 27
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 27, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 27, $this->getSourceContext()); })()), "branch_class", array())));
                // line 28
                echo "    ";
            }
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(),         // line 29
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 29, $this->getSourceContext()); })()), "leaf_class", array()))) {
            // line 30
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 30, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 30, $this->getSourceContext()); })()), "leaf_class", array())));
        }
        // line 33
        $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->getSourceContext()); })()), "attributes", array());
        // line 34
        if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 34, $this->getSourceContext()); })()))) {
            // line 35
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 35, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 35, $this->getSourceContext()); })()), " ")));
        }
        // line 37
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 37, $this->getSourceContext()); })()), "level", array()) === 1)) {
            // line 38
            echo "<div class=\"item ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 38, $this->getSourceContext()); })()), "class", array()), "html", null, true);
            }
            echo "\">
    <div class=\"header\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "label", array())), "html", null, true);
            echo "</div>
    <div class=\"menu\">
        ";
            // line 41
            $this->displayBlock("list", $context, $blocks);
            echo "
    </div>
</div>
";
        } else {
            // line 45
            echo "<a class=\"item ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 45, $this->getSourceContext()); })()), "class", array()), "html", null, true);
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 45, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
            echo "\">
    ";
            // line 46
            $this->displayBlock("icon", $context, $blocks);
            echo "
    ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 47, $this->getSourceContext()); })()), "label", array())), "html", null, true);
            echo "
</a>
";
        }
        
        $__internal_eef095735c00c581463e902d5ce473dc17040ddf2736f20b553343a6017b4112->leave($__internal_eef095735c00c581463e902d5ce473dc17040ddf2736f20b553343a6017b4112_prof);

        
        $__internal_a050354a508b8ff29ff88c2a0f280fa1892bb926f44c4e1b928b0606e390774f->leave($__internal_a050354a508b8ff29ff88c2a0f280fa1892bb926f44c4e1b928b0606e390774f_prof);

    }

    // line 52
    public function block_icon($context, array $blocks = array())
    {
        $__internal_f36edf876a1bd6363479daea193c3ed174e7cd5c20fa595e5a20c5e19992ae98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36edf876a1bd6363479daea193c3ed174e7cd5c20fa595e5a20c5e19992ae98->enter($__internal_f36edf876a1bd6363479daea193c3ed174e7cd5c20fa595e5a20c5e19992ae98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_bc60625d5a4a846e0e5bb6a69eba94f14328498d3fce2e67183207c7d5dc27cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc60625d5a4a846e0e5bb6a69eba94f14328498d3fce2e67183207c7d5dc27cb->enter($__internal_bc60625d5a4a846e0e5bb6a69eba94f14328498d3fce2e67183207c7d5dc27cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        // line 53
        $context["icon"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "labelAttribute", array(0 => "icon"), "method");
        // line 54
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 54, $this->getSourceContext()); })())) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 54, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></i> ";
        }
        
        $__internal_bc60625d5a4a846e0e5bb6a69eba94f14328498d3fce2e67183207c7d5dc27cb->leave($__internal_bc60625d5a4a846e0e5bb6a69eba94f14328498d3fce2e67183207c7d5dc27cb_prof);

        
        $__internal_f36edf876a1bd6363479daea193c3ed174e7cd5c20fa595e5a20c5e19992ae98->leave($__internal_f36edf876a1bd6363479daea193c3ed174e7cd5c20fa595e5a20c5e19992ae98_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Menu:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 54,  205 => 53,  196 => 52,  182 => 47,  178 => 46,  169 => 45,  162 => 41,  157 => 39,  150 => 38,  148 => 37,  145 => 35,  143 => 34,  141 => 33,  138 => 30,  136 => 29,  133 => 28,  131 => 27,  128 => 26,  126 => 25,  123 => 23,  120 => 21,  118 => 20,  115 => 18,  113 => 17,  110 => 15,  108 => 14,  106 => 13,  104 => 12,  102 => 11,  93 => 9,  68 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block list %}
{% for item in item.children %}
    {{ block('item') }}
{% endfor %}
{% endblock %}

{% block item %}
{# building the class of the item #}
{%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
{%- if matcher.isCurrent(item) %}
    {%- set classes = classes|merge([options.currentClass]) %}
{%- elseif matcher.isAncestor(item, options.matchingDepth) %}
    {%- set classes = classes|merge([options.ancestorClass]) %}
{%- endif %}
{%- if item.actsLikeFirst %}
    {%- set classes = classes|merge([options.firstClass]) %}
{%- endif %}
{%- if item.actsLikeLast %}
    {%- set classes = classes|merge([options.lastClass]) %}
{%- endif %}

{# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
{% if item.hasChildren and options.depth is not same as(0) %}
    {% if options.branch_class is not empty and item.displayChildren %}
        {%- set classes = classes|merge([options.branch_class]) %}
    {% endif %}
{% elseif options.leaf_class is not empty %}
    {%- set classes = classes|merge([options.leaf_class]) %}
{%- endif %}

{%- set attributes = item.attributes %}
{%- if classes is not empty %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
{%- endif %}
{% if item.level is same as(1) %}
<div class=\"item {% if attributes.class is defined %}{{ attributes.class }}{% endif %}\">
    <div class=\"header\">{{ item.label|trans }}</div>
    <div class=\"menu\">
        {{ block('list') }}
    </div>
</div>
{% else %}
<a class=\"item {% if attributes.class is defined %}{{ attributes.class }}{% endif %}\" href=\"{{ item.uri }}\">
    {{ block('icon') }}
    {{ item.label|trans }}
</a>
{% endif %}
{% endblock %}

{% block icon %}
{% set icon = item.labelAttribute('icon') %}
{% if icon %}<i class=\"icon {{ icon }}\"></i> {% endif %}
{% endblock %}

", "SyliusUiBundle:Menu:sidebar.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Menu/sidebar.html.twig");
    }
}
