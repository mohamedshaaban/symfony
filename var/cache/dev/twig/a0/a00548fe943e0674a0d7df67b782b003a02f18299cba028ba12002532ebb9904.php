<?php

/* SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig */
class __TwigTemplate_dfa0299f44c66ecb1d05e64b3a893bdbebdcbea6cebe3a486e455389348e9767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusUiBundle:Form:theme.html.twig", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusUiBundle:Form:theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_594384d985fa5fcecffef6b524694c9443c2ae0fec54a45058ac353b70a4b533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594384d985fa5fcecffef6b524694c9443c2ae0fec54a45058ac353b70a4b533->enter($__internal_594384d985fa5fcecffef6b524694c9443c2ae0fec54a45058ac353b70a4b533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig"));

        $__internal_dddc214489f4062d3acfd9bda68c0aa3c06329bd75aa44ee23b4be696dc71321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddc214489f4062d3acfd9bda68c0aa3c06329bd75aa44ee23b4be696dc71321->enter($__internal_dddc214489f4062d3acfd9bda68c0aa3c06329bd75aa44ee23b4be696dc71321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594384d985fa5fcecffef6b524694c9443c2ae0fec54a45058ac353b70a4b533->leave($__internal_594384d985fa5fcecffef6b524694c9443c2ae0fec54a45058ac353b70a4b533_prof);

        
        $__internal_dddc214489f4062d3acfd9bda68c0aa3c06329bd75aa44ee23b4be696dc71321->leave($__internal_dddc214489f4062d3acfd9bda68c0aa3c06329bd75aa44ee23b4be696dc71321_prof);

    }

    // line 3
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_ac7c577caf59c0af459c68d23a1e6d1ceda60905d4e70a51e8eaa92865b20889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7c577caf59c0af459c68d23a1e6d1ceda60905d4e70a51e8eaa92865b20889->enter($__internal_ac7c577caf59c0af459c68d23a1e6d1ceda60905d4e70a51e8eaa92865b20889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_d62b796b1cc0d54ed0b10c6202c45893b074da7fc5d488c3f5cd7731d143cb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62b796b1cc0d54ed0b10c6202c45893b074da7fc5d488c3f5cd7731d143cb24->enter($__internal_d62b796b1cc0d54ed0b10c6202c45893b074da7fc5d488c3f5cd7731d143cb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig", 4);
        // line 5
        echo "    ";
        $context["self"] = $this;
        // line 6
        echo "
    <div class=\"ui top attached tabular menu\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 8, $this->getSourceContext()); })()), "translations", array()));
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
        foreach ($context['_seq'] as $context["localeCode"] => $context["translationForm"]) {
            // line 9
            echo "            <a class=\"item";
            if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
            echo "\">
                ";
            // line 10
            echo $context["flags"]->macro_fromLocaleCode($context["localeCode"]);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["localeCode"])), "html", null, true);
            echo "
            </a>
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
        unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), "translations", array()));
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
        foreach ($context['_seq'] as $context["localeCode"] => $context["translationForm"]) {
            // line 16
            echo "        <div class=\"ui bottom attached tab segment";
            if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()))) {
                echo " active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["localeCode"], "html", null, true);
            echo "\">
            ";
            // line 17
            ob_start();
            // line 18
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 19
                echo "                    ";
                if (($context["localeCode"] == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "localeCode", array()), "vars", array()), "value", array()))) {
                    // line 20
                    echo "                        ";
                    echo $context["self"]->macro_collection_item($context["child"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 20, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()));
                    echo "
                    ";
                }
                // line 22
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 24
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d62b796b1cc0d54ed0b10c6202c45893b074da7fc5d488c3f5cd7731d143cb24->leave($__internal_d62b796b1cc0d54ed0b10c6202c45893b074da7fc5d488c3f5cd7731d143cb24_prof);

        
        $__internal_ac7c577caf59c0af459c68d23a1e6d1ceda60905d4e70a51e8eaa92865b20889->leave($__internal_ac7c577caf59c0af459c68d23a1e6d1ceda60905d4e70a51e8eaa92865b20889_prof);

    }

    // line 28
    public function macro_collection_item($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "allow_delete" => $__allow_delete__,
            "button_delete_label" => $__button_delete_label__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fac2059c4cecae6625570cbd91804daf48712cb698beed7c3bb51b36c826594c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_fac2059c4cecae6625570cbd91804daf48712cb698beed7c3bb51b36c826594c->enter($__internal_fac2059c4cecae6625570cbd91804daf48712cb698beed7c3bb51b36c826594c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_0cfc75e0530b48c40d4696f9c4adeafad5bae93d2f6afd11ed0bed0b02bdf3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0cfc75e0530b48c40d4696f9c4adeafad5bae93d2f6afd11ed0bed0b02bdf3e6->enter($__internal_0cfc75e0530b48c40d4696f9c4adeafad5bae93d2f6afd11ed0bed0b02bdf3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 29
            echo "    <div class=\"attribute\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "vars", array()), "data", array()), "attribute", array()), "code", array()), "html", null, true);
            echo "\">
        ";
            // line 30
            $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "vars", array()), "id", array());
            // line 31
            echo "        ";
            if (twig_in_filter("checkbox", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "children", array()), "value", array()), "vars", array()), "block_prefixes", array()))) {
                // line 32
                echo "            <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                ";
                // line 33
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "value", array()), 'widget');
                echo "
                <label>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "vars", array()), "value", array()), "attribute", array()), "name", array()), "html", null, true);
                echo "</label>
            </div>
            <button class=\"ui red right labeled icon button\" style=\"float: right;\">
                <i class=\"remove icon\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
                echo "
            </button>
        ";
            } else {
                // line 40
                echo "            <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                <div class=\"ui label\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "vars", array()), "value", array()), "attribute", array()), "name", array()), "html", null, true);
                echo "</div>
                ";
                // line 42
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "value", array()), 'widget');
                echo "
                <button class=\"ui red right labeled icon button\">
                    <i class=\"remove icon\"></i> ";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delete"), "html", null, true);
                echo "
                </button>
            </div>
            ";
                // line 47
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "value", array()), 'errors');
                echo "
        ";
            }
            // line 49
            echo "        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "attribute", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "attribute", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "vars", array()), "data", array()), "attribute", array()), "code", array()), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "localeCode", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "localeCode", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "localeCode", array()), "vars", array()), "value", array()), "html", null, true);
            echo "\"/>
    </div>
";
            
            $__internal_0cfc75e0530b48c40d4696f9c4adeafad5bae93d2f6afd11ed0bed0b02bdf3e6->leave($__internal_0cfc75e0530b48c40d4696f9c4adeafad5bae93d2f6afd11ed0bed0b02bdf3e6_prof);

            
            $__internal_fac2059c4cecae6625570cbd91804daf48712cb698beed7c3bb51b36c826594c->leave($__internal_fac2059c4cecae6625570cbd91804daf48712cb698beed7c3bb51b36c826594c_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 50,  275 => 49,  270 => 47,  264 => 44,  259 => 42,  255 => 41,  252 => 40,  246 => 37,  240 => 34,  236 => 33,  233 => 32,  230 => 31,  228 => 30,  223 => 29,  202 => 28,  179 => 24,  176 => 23,  162 => 22,  156 => 20,  153 => 19,  135 => 18,  133 => 17,  124 => 16,  107 => 15,  103 => 13,  84 => 10,  75 => 9,  58 => 8,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusUiBundle:Form:theme.html.twig' %}

{% block collection_widget -%}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}
    {% import _self as self %}

    <div class=\"ui top attached tabular menu\">
        {% for localeCode, translationForm in attr.translations %}
            <a class=\"item{% if 0 == loop.index0 %} active{% endif %}\" data-tab=\"{{ localeCode }}\">
                {{ flags.fromLocaleCode(localeCode) }} {{ localeCode|sylius_locale_name }}
            </a>
        {% endfor %}
    </div>

    {% for localeCode, translationForm in attr.translations %}
        <div class=\"ui bottom attached tab segment{% if 0 == loop.index0 %} active{% endif %}\" data-tab=\"{{ localeCode }}\">
            {% spaceless %}
                {% for child in form %}
                    {% if localeCode == child.localeCode.vars.value %}
                        {{ self.collection_item(child, allow_delete, button_delete_label, loop.index0) }}
                    {% endif %}
                {% endfor %}
            {% endspaceless %}
        </div>
    {% endfor %}
{%- endblock collection_widget %}

{% macro collection_item(form, allow_delete, button_delete_label, index) %}
    <div class=\"attribute\" data-id=\"{{ form.vars.data.attribute.code }}\">
        {% set id = form.vars.id %}
        {% if 'checkbox' in form.children.value.vars.block_prefixes %}
            <div class=\"ui toggle checkbox\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                {{ form_widget(form.value) }}
                <label>{{ form.vars.value.attribute.name }}</label>
            </div>
            <button class=\"ui red right labeled icon button\" style=\"float: right;\">
                <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
            </button>
        {% else %}
            <div class=\"ui right fluid labeled input\" style=\"margin-top: 15px; margin-bottom: 15px;\">
                <div class=\"ui label\">{{ form.vars.value.attribute.name }}</div>
                {{ form_widget(form.value) }}
                <button class=\"ui red right labeled icon button\">
                    <i class=\"remove icon\"></i> {{ 'sylius.ui.delete'|trans }}
                </button>
            </div>
            {{ form_errors(form.value) }}
        {% endif %}
        <input type=\"hidden\" name=\"{{ form.attribute.vars.full_name }}\" id=\"{{ form.attribute.vars.id }}\" value=\"{{ form.vars.data.attribute.code }}\"/>
        <input type=\"hidden\" name=\"{{ form.localeCode.vars.full_name }}\" id=\"{{ form.localeCode.vars.id }}\" value=\"{{ form.localeCode.vars.value }}\"/>
    </div>
{% endmacro %}
", "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Attribute/attributesCollection.html.twig");
    }
}
