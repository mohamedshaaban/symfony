<?php

/* SyliusUiBundle:Menu:sidebar.html.twig */
class __TwigTemplate_5437deda6a9a6a1414f1a26d9fa8ac8bb07561527ed9d5687a33bebdc9bc9f16 extends Twig_Template
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
        $__internal_729fd0e360fe4bc12b97acd1edd7cce3d9d16984b3a14ae56c698c34affcfcf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729fd0e360fe4bc12b97acd1edd7cce3d9d16984b3a14ae56c698c34affcfcf9->enter($__internal_729fd0e360fe4bc12b97acd1edd7cce3d9d16984b3a14ae56c698c34affcfcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:sidebar.html.twig"));

        $__internal_b8e36a104478e0b6cd8ca62e99a5c7d53bb478dbc555250a70d5a0d260a4314a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e36a104478e0b6cd8ca62e99a5c7d53bb478dbc555250a70d5a0d260a4314a->enter($__internal_b8e36a104478e0b6cd8ca62e99a5c7d53bb478dbc555250a70d5a0d260a4314a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_729fd0e360fe4bc12b97acd1edd7cce3d9d16984b3a14ae56c698c34affcfcf9->leave($__internal_729fd0e360fe4bc12b97acd1edd7cce3d9d16984b3a14ae56c698c34affcfcf9_prof);

        
        $__internal_b8e36a104478e0b6cd8ca62e99a5c7d53bb478dbc555250a70d5a0d260a4314a->leave($__internal_b8e36a104478e0b6cd8ca62e99a5c7d53bb478dbc555250a70d5a0d260a4314a_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_598f3c39aa9f4dbe5ac7020c62493cc79592d4631fdb49126868011b3a6b2d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598f3c39aa9f4dbe5ac7020c62493cc79592d4631fdb49126868011b3a6b2d00->enter($__internal_598f3c39aa9f4dbe5ac7020c62493cc79592d4631fdb49126868011b3a6b2d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_94f6faec73d9cd5a7bd820a90e307cf0d001860569adea5411eb2bad81f6b73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f6faec73d9cd5a7bd820a90e307cf0d001860569adea5411eb2bad81f6b73c->enter($__internal_94f6faec73d9cd5a7bd820a90e307cf0d001860569adea5411eb2bad81f6b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_94f6faec73d9cd5a7bd820a90e307cf0d001860569adea5411eb2bad81f6b73c->leave($__internal_94f6faec73d9cd5a7bd820a90e307cf0d001860569adea5411eb2bad81f6b73c_prof);

        
        $__internal_598f3c39aa9f4dbe5ac7020c62493cc79592d4631fdb49126868011b3a6b2d00->leave($__internal_598f3c39aa9f4dbe5ac7020c62493cc79592d4631fdb49126868011b3a6b2d00_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_d1c91e19db2a3d0a17b3a4e37e20916b82ca9f3694bb9ca11c1c6a07d7d68009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c91e19db2a3d0a17b3a4e37e20916b82ca9f3694bb9ca11c1c6a07d7d68009->enter($__internal_d1c91e19db2a3d0a17b3a4e37e20916b82ca9f3694bb9ca11c1c6a07d7d68009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_4935217ec2e2464bf0e39d9c283e07790b53d9b878620b76f0732d6ed5df525b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4935217ec2e2464bf0e39d9c283e07790b53d9b878620b76f0732d6ed5df525b->enter($__internal_4935217ec2e2464bf0e39d9c283e07790b53d9b878620b76f0732d6ed5df525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_4935217ec2e2464bf0e39d9c283e07790b53d9b878620b76f0732d6ed5df525b->leave($__internal_4935217ec2e2464bf0e39d9c283e07790b53d9b878620b76f0732d6ed5df525b_prof);

        
        $__internal_d1c91e19db2a3d0a17b3a4e37e20916b82ca9f3694bb9ca11c1c6a07d7d68009->leave($__internal_d1c91e19db2a3d0a17b3a4e37e20916b82ca9f3694bb9ca11c1c6a07d7d68009_prof);

    }

    // line 52
    public function block_icon($context, array $blocks = array())
    {
        $__internal_ef9131e3d8713a79d23e1b02e2e21bba24c538013b5b46c8626004e1e296c28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9131e3d8713a79d23e1b02e2e21bba24c538013b5b46c8626004e1e296c28e->enter($__internal_ef9131e3d8713a79d23e1b02e2e21bba24c538013b5b46c8626004e1e296c28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_4ceda8081ad6daf97c53fa0c1ffb80c39fb6c0825ce0a709b6c95d31edd1d81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ceda8081ad6daf97c53fa0c1ffb80c39fb6c0825ce0a709b6c95d31edd1d81f->enter($__internal_4ceda8081ad6daf97c53fa0c1ffb80c39fb6c0825ce0a709b6c95d31edd1d81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        // line 53
        $context["icon"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "labelAttribute", array(0 => "icon"), "method");
        // line 54
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 54, $this->getSourceContext()); })())) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 54, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></i> ";
        }
        
        $__internal_4ceda8081ad6daf97c53fa0c1ffb80c39fb6c0825ce0a709b6c95d31edd1d81f->leave($__internal_4ceda8081ad6daf97c53fa0c1ffb80c39fb6c0825ce0a709b6c95d31edd1d81f_prof);

        
        $__internal_ef9131e3d8713a79d23e1b02e2e21bba24c538013b5b46c8626004e1e296c28e->leave($__internal_ef9131e3d8713a79d23e1b02e2e21bba24c538013b5b46c8626004e1e296c28e_prof);

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

", "SyliusUiBundle:Menu:sidebar.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Menu\\sidebar.html.twig");
    }
}
