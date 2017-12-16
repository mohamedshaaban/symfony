<?php

/* @SyliusAdmin/Macro/translationForm.html.twig */
class __TwigTemplate_8f795ff24c9cee59ce0cb7a45d6779c9c55dd2f709519926d247afaf5be69286 extends Twig_Template
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
        $__internal_8cff7acbe9530040cbdda56ca10afcb8a33d6bfceb71ea046465594b95cfdde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cff7acbe9530040cbdda56ca10afcb8a33d6bfceb71ea046465594b95cfdde3->enter($__internal_8cff7acbe9530040cbdda56ca10afcb8a33d6bfceb71ea046465594b95cfdde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Macro/translationForm.html.twig"));

        $__internal_fa798b21f034e1be14aeecfb42fd15ffa5e8c01e6dfd432dec60f898198e7471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa798b21f034e1be14aeecfb42fd15ffa5e8c01e6dfd432dec60f898198e7471->enter($__internal_fa798b21f034e1be14aeecfb42fd15ffa5e8c01e6dfd432dec60f898198e7471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Macro/translationForm.html.twig"));

        // line 20
        echo "
";
        
        $__internal_8cff7acbe9530040cbdda56ca10afcb8a33d6bfceb71ea046465594b95cfdde3->leave($__internal_8cff7acbe9530040cbdda56ca10afcb8a33d6bfceb71ea046465594b95cfdde3_prof);

        
        $__internal_fa798b21f034e1be14aeecfb42fd15ffa5e8c01e6dfd432dec60f898198e7471->leave($__internal_fa798b21f034e1be14aeecfb42fd15ffa5e8c01e6dfd432dec60f898198e7471_prof);

    }

    // line 1
    public function macro_translationForm($__translations__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translations" => $__translations__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7be65d9624f2de16d24bba4e8fe58f1ecca28d198398081aef3c0169c3772ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_7be65d9624f2de16d24bba4e8fe58f1ecca28d198398081aef3c0169c3772ff3->enter($__internal_7be65d9624f2de16d24bba4e8fe58f1ecca28d198398081aef3c0169c3772ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            $__internal_5a3c19b3d336f3f3324f116e87ac58d8cd881df1df1a4cf530661f4b6288738b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5a3c19b3d336f3f3324f116e87ac58d8cd881df1df1a4cf530661f4b6288738b->enter($__internal_5a3c19b3d336f3f3324f116e87ac58d8cd881df1df1a4cf530661f4b6288738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            // line 2
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Macro/translationForm.html.twig", 2);
            // line 3
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 5, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 6
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 7
                if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 9
                echo $context["flags"]->macro_fromLocaleCode($context["locale"]);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 11
                if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 13
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "                </div>
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
";
            
            $__internal_5a3c19b3d336f3f3324f116e87ac58d8cd881df1df1a4cf530661f4b6288738b->leave($__internal_5a3c19b3d336f3f3324f116e87ac58d8cd881df1df1a4cf530661f4b6288738b_prof);

            
            $__internal_7be65d9624f2de16d24bba4e8fe58f1ecca28d198398081aef3c0169c3772ff3->leave($__internal_7be65d9624f2de16d24bba4e8fe58f1ecca28d198398081aef3c0169c3772ff3_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 21
    public function macro_translationFormWithSlug($__translations__ = null, $__slugFieldTemplate__ = null, $__resource__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "translations" => $__translations__,
            "slugFieldTemplate" => $__slugFieldTemplate__,
            "resource" => $__resource__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_86bead67a07ed5779466e31733177b5a57bb95867f5504072c795c6bdca903e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_86bead67a07ed5779466e31733177b5a57bb95867f5504072c795c6bdca903e9->enter($__internal_86bead67a07ed5779466e31733177b5a57bb95867f5504072c795c6bdca903e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            $__internal_8756ecd779a79d90467085f1112978e48950aa8d9696e1e84fdc74b8bed76d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8756ecd779a79d90467085f1112978e48950aa8d9696e1e84fdc74b8bed76d6c->enter($__internal_8756ecd779a79d90467085f1112978e48950aa8d9696e1e84fdc74b8bed76d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            // line 22
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusAdmin/Macro/translationForm.html.twig", 22);
            // line 23
            echo "
    <div class=\"ui styled fluid accordion\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new Twig_Error_Runtime('Variable "translations" does not exist.', 25, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
                // line 26
                echo "            <div data-locale=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
                <div class=\"title";
                // line 27
                if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    <i class=\"dropdown icon\"></i>
                    ";
                // line 29
                echo $context["flags"]->macro_fromLocaleCode($context["locale"]);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"])), "html", null, true);
                echo "
                </div>
                <div class=\"ui content";
                // line 31
                if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()))) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationForm"]);
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
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 33
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["field"], "vars", array()), "name", array()) != "slug")) {
                        // line 34
                        echo "                            ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                        ";
                    } else {
                        // line 36
                        echo "                            ";
                        $this->loadTemplate((isset($context["slugFieldTemplate"]) || array_key_exists("slugFieldTemplate", $context) ? $context["slugFieldTemplate"] : (function () { throw new Twig_Error_Runtime('Variable "slugFieldTemplate" does not exist.', 36, $this->getSourceContext()); })()), "@SyliusAdmin/Macro/translationForm.html.twig", 36)->display(array_merge($context, array("slugField" => twig_get_attribute($this->env, $this->getSourceContext(), $context["translationForm"], "slug", array()), "resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 36, $this->getSourceContext()); })()))));
                        // line 37
                        echo "                        ";
                    }
                    // line 38
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                </div>
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </div>
";
            
            $__internal_8756ecd779a79d90467085f1112978e48950aa8d9696e1e84fdc74b8bed76d6c->leave($__internal_8756ecd779a79d90467085f1112978e48950aa8d9696e1e84fdc74b8bed76d6c_prof);

            
            $__internal_86bead67a07ed5779466e31733177b5a57bb95867f5504072c795c6bdca903e9->leave($__internal_86bead67a07ed5779466e31733177b5a57bb95867f5504072c795c6bdca903e9_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Macro/translationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 42,  263 => 39,  249 => 38,  246 => 37,  243 => 36,  237 => 34,  234 => 33,  217 => 32,  211 => 31,  204 => 29,  197 => 27,  192 => 26,  175 => 25,  171 => 23,  168 => 22,  148 => 21,  132 => 18,  116 => 15,  107 => 13,  103 => 12,  97 => 11,  90 => 9,  83 => 7,  78 => 6,  61 => 5,  57 => 3,  54 => 2,  36 => 1,  25 => 20,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro translationForm(translations) %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}
                        {{ form_row(field) }}
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro translationFormWithSlug(translations, slugFieldTemplate, resource) %}
    {% import '@SyliusUi/Macro/flags.html.twig' as flags %}

    <div class=\"ui styled fluid accordion\">
        {% for locale, translationForm in translations %}
            <div data-locale=\"{{ locale }}\">
                <div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
                    <i class=\"dropdown icon\"></i>
                    {{ flags.fromLocaleCode(locale) }} {{ locale|sylius_locale_name }}
                </div>
                <div class=\"ui content{% if 0 == loop.index0 %} active{% endif %}\">
                    {% for field in translationForm %}
                        {% if field.vars.name != 'slug' %}
                            {{ form_row(field) }}
                        {% else %}
                            {% include slugFieldTemplate with { 'slugField': translationForm.slug, 'resource': resource } %}
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endmacro %}
", "@SyliusAdmin/Macro/translationForm.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Macro\\translationForm.html.twig");
    }
}
