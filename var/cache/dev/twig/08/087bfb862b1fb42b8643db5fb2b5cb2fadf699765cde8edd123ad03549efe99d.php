<?php

/* SyliusResourceBundle::forms.html.twig */
class __TwigTemplate_624593e8d395c43bc7b604ce936cb8d1d0e8d2192c54d35395715b987ea1f4e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aee0ed984550e9ab58fe2275a9b648b4f94ac2e42467ccbb0e600f7c6fac219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aee0ed984550e9ab58fe2275a9b648b4f94ac2e42467ccbb0e600f7c6fac219->enter($__internal_1aee0ed984550e9ab58fe2275a9b648b4f94ac2e42467ccbb0e600f7c6fac219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle::forms.html.twig"));

        $__internal_e87072fc9a1c54e505633eae824d08979278eb6d454106b321211d2c34299e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87072fc9a1c54e505633eae824d08979278eb6d454106b321211d2c34299e45->enter($__internal_e87072fc9a1c54e505633eae824d08979278eb6d454106b321211d2c34299e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle::forms.html.twig"));

        // line 1
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 39
        echo "
";
        
        $__internal_1aee0ed984550e9ab58fe2275a9b648b4f94ac2e42467ccbb0e600f7c6fac219->leave($__internal_1aee0ed984550e9ab58fe2275a9b648b4f94ac2e42467ccbb0e600f7c6fac219_prof);

        
        $__internal_e87072fc9a1c54e505633eae824d08979278eb6d454106b321211d2c34299e45->leave($__internal_e87072fc9a1c54e505633eae824d08979278eb6d454106b321211d2c34299e45_prof);

    }

    // line 1
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_2a7c7c31722c7677968437b9da4ab86fa1ea920095eaa6b36d88d774dad47d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7c7c31722c7677968437b9da4ab86fa1ea920095eaa6b36d88d774dad47d00->enter($__internal_2a7c7c31722c7677968437b9da4ab86fa1ea920095eaa6b36d88d774dad47d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_2878e1cec3419925b105231c6cefc3133bcb75d3d3cd8f4c54a31ac3c61df7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2878e1cec3419925b105231c6cefc3133bcb75d3d3cd8f4c54a31ac3c61df7b4->enter($__internal_2878e1cec3419925b105231c6cefc3133bcb75d3d3cd8f4c54a31ac3c61df7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 2
        $context["__internal_3dac8c82f2ecd70f1095cb9bb9c6c37fb406ac2be4cb03b10cd7921fea6cd815"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "SyliusResourceBundle::forms.html.twig", 2);
        // line 3
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 3, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()))) : ("")) . " controls collection-widget")));
        // line 4
        echo "
    ";
        // line 5
        ob_start();
        // line 6
        echo "        <div data-form-type=\"collection\"
             ";
        // line 7
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
             ";
        // line 8
        if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 8, $this->getSourceContext()); })()))) {
            // line 9
            echo "             data-prototype='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "collectionItem", array(0 => (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 9, $this->getSourceContext()); })()), 1 => (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 9, $this->getSourceContext()); })()), 2 => (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 9, $this->getSourceContext()); })()), 3 => "__name__"), "method"));
            echo "'";
        }
        // line 10
        echo ">

            ";
        // line 12
        echo $context["__internal_3dac8c82f2ecd70f1095cb9bb9c6c37fb406ac2be4cb03b10cd7921fea6cd815"]->macro_error(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "errors", array()));
        echo "

            ";
        // line 14
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new Twig_Error_Runtime('Variable "prototypes" does not exist.', 14, $this->getSourceContext()); })()))) : ("")))) {
            // line 15
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new Twig_Error_Runtime('Variable "prototypes" does not exist.', 15, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 16
                echo "                    <input type=\"hidden\"
                           data-form-prototype=\"";
                // line 17
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                           value=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "collectionItem", array(0 => $context["subPrototype"], 1 => (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 18, $this->getSourceContext()); })()), 2 => (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 18, $this->getSourceContext()); })()), 3 => "__name__"), "method"));
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            <div data-form-collection=\"list\"
                 class=\"row collection-list\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()));
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
            // line 25
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "collectionItem", array(0 => $context["child"], 1 => (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 25, $this->getSourceContext()); })()), 2 => (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 25, $this->getSourceContext()); })()), 3 => twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array())), "method"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>

            ";
        // line 29
        if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 29, $this->getSourceContext()); })()))) {
            // line 30
            echo "                <a href=\"#\" class=\"btn btn-success btn-block\"
                   data-form-collection=\"add\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["button_add_label"]) || array_key_exists("button_add_label", $context) ? $context["button_add_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_add_label" does not exist.', 33, $this->getSourceContext()); })())), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 36
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2878e1cec3419925b105231c6cefc3133bcb75d3d3cd8f4c54a31ac3c61df7b4->leave($__internal_2878e1cec3419925b105231c6cefc3133bcb75d3d3cd8f4c54a31ac3c61df7b4_prof);

        
        $__internal_2a7c7c31722c7677968437b9da4ab86fa1ea920095eaa6b36d88d774dad47d00->leave($__internal_2a7c7c31722c7677968437b9da4ab86fa1ea920095eaa6b36d88d774dad47d00_prof);

    }

    // line 40
    public function macro_collectionItem($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
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
            $__internal_20b21066930b51a4996fd435a82ef077d884aba10fd0ad5f791780511ff75812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_20b21066930b51a4996fd435a82ef077d884aba10fd0ad5f791780511ff75812->enter($__internal_20b21066930b51a4996fd435a82ef077d884aba10fd0ad5f791780511ff75812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collectionItem"));

            $__internal_20c4f2f0b118967f243f7e0235d76264c08e58b1b3b47251b45314c9c34b0f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_20c4f2f0b118967f243f7e0235d76264c08e58b1b3b47251b45314c9c34b0f27->enter($__internal_20c4f2f0b118967f243f7e0235d76264c08e58b1b3b47251b45314c9c34b0f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collectionItem"));

            // line 41
            echo "    ";
            ob_start();
            // line 42
            echo "        <div data-form-collection=\"item\"
             data-form-collection-index=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
            echo "\"
             class=\"collection-item\">
            <div class=\"collection-box";
            // line 45
            if ((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })())) == 1)) {
                echo " unique-field";
            }
            echo "\">
                ";
            // line 46
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 46, $this->getSourceContext()); })())) {
                // line 47
                echo "                    <p class=\"text-right\">
                        <a href=\"#\" data-form-collection=\"delete\" class=\"btn btn-danger\">
                            <i class=\"glyphicon glyphicon-remove collection-button-remove\"></i>
                            ";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 50, $this->getSourceContext()); })())), "html", null, true);
                echo "
                        </a>
                    </p>
                ";
            }
            // line 54
            echo "                ";
            if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "children", array()))) {
                // line 55
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), 'widget');
                echo "
                ";
            } else {
                // line 57
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), 'rest');
                echo "
                ";
            }
            // line 59
            echo "            </div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_20c4f2f0b118967f243f7e0235d76264c08e58b1b3b47251b45314c9c34b0f27->leave($__internal_20c4f2f0b118967f243f7e0235d76264c08e58b1b3b47251b45314c9c34b0f27_prof);

            
            $__internal_20b21066930b51a4996fd435a82ef077d884aba10fd0ad5f791780511ff75812->leave($__internal_20b21066930b51a4996fd435a82ef077d884aba10fd0ad5f791780511ff75812_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle::forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 59,  235 => 57,  229 => 55,  226 => 54,  219 => 50,  214 => 47,  212 => 46,  206 => 45,  201 => 43,  198 => 42,  195 => 41,  174 => 40,  162 => 36,  156 => 33,  151 => 30,  149 => 29,  145 => 27,  128 => 25,  111 => 24,  106 => 21,  103 => 20,  95 => 18,  91 => 17,  88 => 16,  83 => 15,  81 => 14,  76 => 12,  72 => 10,  67 => 9,  65 => 8,  61 => 7,  58 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  39 => 1,  28 => 39,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block collection_widget -%}
    {% from 'SyliusResourceBundle:Macros:notification.html.twig' import error %}
    {% set attr = attr|merge({'class': attr.class|default ~ ' controls collection-widget'}) %}

    {% spaceless %}
        <div data-form-type=\"collection\"
             {{ block('widget_container_attributes') }}
             {% if prototype is defined and allow_add %}
             data-prototype='{{ _self.collectionItem(prototype, allow_delete, button_delete_label, '__name__')|e }}'
             {%- endif -%}>

            {{ error(form.vars.errors) }}

            {% if prototypes|default is iterable %}
                {% for key, subPrototype in prototypes %}
                    <input type=\"hidden\"
                           data-form-prototype=\"{{ key }}\"
                           value=\"{{ _self.collectionItem(subPrototype, allow_delete, button_delete_label, '__name__')|e }}\" />
                {% endfor %}
            {% endif %}

            <div data-form-collection=\"list\"
                 class=\"row collection-list\">
                {% for child in form %}
                    {{ _self.collectionItem(child, allow_delete, button_delete_label, loop.index0) }}
                {% endfor %}
            </div>

            {% if prototype is defined and allow_add %}
                <a href=\"#\" class=\"btn btn-success btn-block\"
                   data-form-collection=\"add\">
                    <i class=\"glyphicon glyphicon-plus\"></i>
                    {{ button_add_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endspaceless %}
{%- endblock collection_widget %}

{% macro collectionItem(form, allow_delete, button_delete_label, index) %}
    {% spaceless %}
        <div data-form-collection=\"item\"
             data-form-collection-index=\"{{ index }}\"
             class=\"collection-item\">
            <div class=\"collection-box{% if form|length == 1 %} unique-field{% endif %}\">
                {% if allow_delete %}
                    <p class=\"text-right\">
                        <a href=\"#\" data-form-collection=\"delete\" class=\"btn btn-danger\">
                            <i class=\"glyphicon glyphicon-remove collection-button-remove\"></i>
                            {{ button_delete_label|trans }}
                        </a>
                    </p>
                {% endif %}
                {% if not form.children|length %}
                    {{ form_widget(form) }}
                {% else %}
                    {{ form_rest(form) }}
                {% endif %}
            </div>
        </div>
    {% endspaceless %}
{% endmacro %}
", "SyliusResourceBundle::forms.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle/Resources/views/forms.html.twig");
    }
}
