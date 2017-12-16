<?php

/* SyliusAdminBundle::_channelLinks.html.twig */
class __TwigTemplate_5c8e1ad546971fc513e4cdab0b797530b495caf66a693111430ab97625892039 extends Twig_Template
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
        $__internal_e38845f9884b6719f240251885290c9a99cf3f0f347d20fc4120ca30ff142712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38845f9884b6719f240251885290c9a99cf3f0f347d20fc4120ca30ff142712->enter($__internal_e38845f9884b6719f240251885290c9a99cf3f0f347d20fc4120ca30ff142712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_channelLinks.html.twig"));

        $__internal_daeb8bbd6e0722ce4e6c9886093d84e4fc60cb5485fed81998e2e4b787c08d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daeb8bbd6e0722ce4e6c9886093d84e4fc60cb5485fed81998e2e4b787c08d85->enter($__internal_daeb8bbd6e0722ce4e6c9886093d84e4fc60cb5485fed81998e2e4b787c08d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle::_channelLinks.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 1, $this->getSourceContext()); })())) > 1)) {
            // line 2
            echo "    <div class=\"ui simple dropdown item\">
        <span>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_your_store"), "html", null, true);
            echo "
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 8, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["channel"], "hostname", array()))) {
                    // line 9
                    echo "            <a href=\"http://";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["channel"], "hostname", array()), "html", null, true);
                    echo "\" target=\"_blank\" class=\"item\">
                ";
                    // line 10
                    $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "SyliusAdminBundle::_channelLinks.html.twig", 10)->display($context);
                    // line 11
                    echo "            </a>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
";
        } elseif ((twig_length_filter($this->env,         // line 15
(isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 15, $this->getSourceContext()); })())) == 1)) {
            // line 16
            echo "    ";
            $context["channel"] = twig_first($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 16, $this->getSourceContext()); })()));
            // line 17
            echo "
    ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 18, $this->getSourceContext()); })()), "hostname", array()))) {
                // line 19
                echo "    <a href=\"http://";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 19, $this->getSourceContext()); })()), "hostname", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"item\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.view_your_store"), "html", null, true);
                echo "</a>
    ";
            }
        }
        
        $__internal_e38845f9884b6719f240251885290c9a99cf3f0f347d20fc4120ca30ff142712->leave($__internal_e38845f9884b6719f240251885290c9a99cf3f0f347d20fc4120ca30ff142712_prof);

        
        $__internal_daeb8bbd6e0722ce4e6c9886093d84e4fc60cb5485fed81998e2e4b787c08d85->leave($__internal_daeb8bbd6e0722ce4e6c9886093d84e4fc60cb5485fed81998e2e4b787c08d85_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle::_channelLinks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  67 => 13,  56 => 11,  54 => 10,  49 => 9,  38 => 8,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if channels|length > 1 %}
    <div class=\"ui simple dropdown item\">
        <span>
            {{ 'sylius.ui.view_your_store'|trans }}
        </span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            {% for channel in channels if channel.hostname is not empty %}
            <a href=\"http://{{ channel.hostname }}\" target=\"_blank\" class=\"item\">
                {% include '@SyliusAdmin/Common/_channel.html.twig' %}
            </a>
            {% endfor %}
        </div>
    </div>
{% elseif channels|length == 1 %}
    {% set channel = channels|first %}

    {% if channel.hostname is not empty %}
    <a href=\"http://{{ channel.hostname }}\" target=\"_blank\" class=\"item\">{{ 'sylius.ui.view_your_store'|trans }}</a>
    {% endif %}
{% endif %}
", "SyliusAdminBundle::_channelLinks.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/_channelLinks.html.twig");
    }
}
