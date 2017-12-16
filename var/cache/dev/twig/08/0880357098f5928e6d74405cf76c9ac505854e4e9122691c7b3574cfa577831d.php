<?php

/* SyliusAdminBundle:Macro:translationForm.html.twig */
class __TwigTemplate_47eb4d9941133604adb16112eca8cba9c1424aefc4f6f0627b74b6a83c6fbca7 extends Twig_Template
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
        $__internal_caf3a681d91101550b535746a8bba241eb7193b3e3ffce2ea5a4d6f009a9631c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf3a681d91101550b535746a8bba241eb7193b3e3ffce2ea5a4d6f009a9631c->enter($__internal_caf3a681d91101550b535746a8bba241eb7193b3e3ffce2ea5a4d6f009a9631c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Macro:translationForm.html.twig"));

        $__internal_bb12bfea66a5d9930ba476eb9df6cada92bb263b6ae514942e10b51b619687ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb12bfea66a5d9930ba476eb9df6cada92bb263b6ae514942e10b51b619687ac->enter($__internal_bb12bfea66a5d9930ba476eb9df6cada92bb263b6ae514942e10b51b619687ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Macro:translationForm.html.twig"));

        // line 20
        echo "
";
        
        $__internal_caf3a681d91101550b535746a8bba241eb7193b3e3ffce2ea5a4d6f009a9631c->leave($__internal_caf3a681d91101550b535746a8bba241eb7193b3e3ffce2ea5a4d6f009a9631c_prof);

        
        $__internal_bb12bfea66a5d9930ba476eb9df6cada92bb263b6ae514942e10b51b619687ac->leave($__internal_bb12bfea66a5d9930ba476eb9df6cada92bb263b6ae514942e10b51b619687ac_prof);

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
            $__internal_a1ab699d56c84fbfcd32d44ebfcadb3989db271fc4ab57742a0b14d3044d0263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a1ab699d56c84fbfcd32d44ebfcadb3989db271fc4ab57742a0b14d3044d0263->enter($__internal_a1ab699d56c84fbfcd32d44ebfcadb3989db271fc4ab57742a0b14d3044d0263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            $__internal_1f22a0d1c60d57e6b0d88e8272b3a297f86967311908109b91dc350208f4204f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1f22a0d1c60d57e6b0d88e8272b3a297f86967311908109b91dc350208f4204f->enter($__internal_1f22a0d1c60d57e6b0d88e8272b3a297f86967311908109b91dc350208f4204f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationForm"));

            // line 2
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Macro:translationForm.html.twig", 2);
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
            
            $__internal_1f22a0d1c60d57e6b0d88e8272b3a297f86967311908109b91dc350208f4204f->leave($__internal_1f22a0d1c60d57e6b0d88e8272b3a297f86967311908109b91dc350208f4204f_prof);

            
            $__internal_a1ab699d56c84fbfcd32d44ebfcadb3989db271fc4ab57742a0b14d3044d0263->leave($__internal_a1ab699d56c84fbfcd32d44ebfcadb3989db271fc4ab57742a0b14d3044d0263_prof);


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
            $__internal_ae53ea189994886d28a23aa632505f5a2a5b6f61ee0e312dc2ce212f4c858ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ae53ea189994886d28a23aa632505f5a2a5b6f61ee0e312dc2ce212f4c858ae5->enter($__internal_ae53ea189994886d28a23aa632505f5a2a5b6f61ee0e312dc2ce212f4c858ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            $__internal_505c1cba76fcc06a805096656ca13842b315790e665a0dc7612d11cc8c926ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_505c1cba76fcc06a805096656ca13842b315790e665a0dc7612d11cc8c926ee4->enter($__internal_505c1cba76fcc06a805096656ca13842b315790e665a0dc7612d11cc8c926ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "translationFormWithSlug"));

            // line 22
            echo "    ";
            $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Macro:translationForm.html.twig", 22);
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
                        $this->loadTemplate((isset($context["slugFieldTemplate"]) || array_key_exists("slugFieldTemplate", $context) ? $context["slugFieldTemplate"] : (function () { throw new Twig_Error_Runtime('Variable "slugFieldTemplate" does not exist.', 36, $this->getSourceContext()); })()), "SyliusAdminBundle:Macro:translationForm.html.twig", 36)->display(array_merge($context, array("slugField" => twig_get_attribute($this->env, $this->getSourceContext(), $context["translationForm"], "slug", array()), "resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 36, $this->getSourceContext()); })()))));
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
            
            $__internal_505c1cba76fcc06a805096656ca13842b315790e665a0dc7612d11cc8c926ee4->leave($__internal_505c1cba76fcc06a805096656ca13842b315790e665a0dc7612d11cc8c926ee4_prof);

            
            $__internal_ae53ea189994886d28a23aa632505f5a2a5b6f61ee0e312dc2ce212f4c858ae5->leave($__internal_ae53ea189994886d28a23aa632505f5a2a5b6f61ee0e312dc2ce212f4c858ae5_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Macro:translationForm.html.twig";
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
", "SyliusAdminBundle:Macro:translationForm.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Macro/translationForm.html.twig");
    }
}
