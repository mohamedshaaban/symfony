<?php

/* SyliusUiBundle::_flashes.html.twig */
class __TwigTemplate_3232446c46f93ccbeb11e896f179a5f0d06931c44979a660d47e5dc62dc70954 extends Twig_Template
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
        $__internal_ff5dec7d337258c6590903c74323df9c37e1d74fd32b0d04a04994bf8de3bffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5dec7d337258c6590903c74323df9c37e1d74fd32b0d04a04994bf8de3bffc->enter($__internal_ff5dec7d337258c6590903c74323df9c37e1d74fd32b0d04a04994bf8de3bffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_flashes.html.twig"));

        $__internal_ab321e246d7fe48e5c955ed75518829b5caedf67b5d83dcd45e26a9fb00de5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab321e246d7fe48e5c955ed75518829b5caedf67b5d83dcd45e26a9fb00de5b5->enter($__internal_ab321e246d7fe48e5c955ed75518829b5caedf67b5d83dcd45e26a9fb00de5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_flashes.html.twig"));

        // line 1
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "session", array())) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "session", array()), "started", array()))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 3
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                    // line 4
                    echo "            ";
                    if (("error" == $context["type"])) {
                        // line 5
                        echo "                ";
                        $context["result"] = "negative";
                        // line 6
                        echo "                ";
                        $context["icon"] = "remove";
                        // line 7
                        echo "            ";
                    }
                    // line 8
                    echo "            ";
                    if (("info" == $context["type"])) {
                        // line 9
                        echo "                ";
                        $context["result"] = "info";
                        // line 10
                        echo "                ";
                        $context["icon"] = "info";
                        // line 11
                        echo "            ";
                    }
                    // line 12
                    echo "            <div class=\"ui icon ";
                    echo twig_escape_filter($this->env, ((array_key_exists("result", $context)) ? (_twig_default_filter((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 12, $this->getSourceContext()); })()), "positive")) : ("positive")), "html", null, true);
                    echo " message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"";
                    // line 14
                    echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 14, $this->getSourceContext()); })()), "checkmark")) : ("checkmark")), "html", null, true);
                    echo " icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        ";
                    // line 17
                    $context["header"] = ("sylius.ui." . $context["type"]);
                    // line 18
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
                    echo "
                    </div>
                    <p>
                    ";
                    // line 21
                    if (twig_test_iterable($context["flash"])) {
                        // line 22
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["flash"], "message", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["flash"], "parameters", array()), "flashes"), "html", null, true);
                        echo "
                    ";
                    } else {
                        // line 24
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flash"], array(), "flashes"), "html", null, true);
                        echo "
                    ";
                    }
                    // line 26
                    echo "                    </p>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ff5dec7d337258c6590903c74323df9c37e1d74fd32b0d04a04994bf8de3bffc->leave($__internal_ff5dec7d337258c6590903c74323df9c37e1d74fd32b0d04a04994bf8de3bffc_prof);

        
        $__internal_ab321e246d7fe48e5c955ed75518829b5caedf67b5d83dcd45e26a9fb00de5b5->leave($__internal_ab321e246d7fe48e5c955ed75518829b5caedf67b5d83dcd45e26a9fb00de5b5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle::_flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  96 => 26,  90 => 24,  84 => 22,  82 => 21,  75 => 18,  73 => 17,  67 => 14,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  43 => 6,  40 => 5,  37 => 4,  32 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.session is not null and app.session.started %}
    {% for type in ['success', 'error', 'info', 'warning'] %}
        {% for flash in app.session.flashbag.get(type) %}
            {% if 'error' == type %}
                {% set result = 'negative' %}
                {% set icon = 'remove' %}
            {% endif %}
            {% if 'info' == type %}
                {% set result = 'info' %}
                {% set icon = 'info' %}
            {% endif %}
            <div class=\"ui icon {{ result|default('positive') }} message sylius-flash-message\">
                <i class=\"close icon\"></i>
                <i class=\"{{ icon|default('checkmark') }} icon\"></i>
                <div class=\"content\">
                    <div class=\"header\">
                        {% set header = 'sylius.ui.'~type %}
                        {{ header|trans }}
                    </div>
                    <p>
                    {% if flash is iterable %}
                        {{ flash.message|trans(flash.parameters, 'flashes') }}
                    {% else %}
                        {{ flash|trans({}, 'flashes') }}
                    {% endif %}
                    </p>
                </div>
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}
", "SyliusUiBundle::_flashes.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/_flashes.html.twig");
    }
}
