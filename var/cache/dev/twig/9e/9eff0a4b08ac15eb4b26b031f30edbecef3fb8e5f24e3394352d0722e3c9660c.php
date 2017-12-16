<?php

/* @SyliusAdmin/Dashboard/_channelSwitch.html.twig */
class __TwigTemplate_5738246f43345e8e8d69b9c4bcf5c3f91401e24f172929d0652384885d9f0f17 extends Twig_Template
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
        $__internal_96c03f7b7f20130504c650eebb703f0bc5d52b5eceda20c02510ae38e3931392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c03f7b7f20130504c650eebb703f0bc5d52b5eceda20c02510ae38e3931392->enter($__internal_96c03f7b7f20130504c650eebb703f0bc5d52b5eceda20c02510ae38e3931392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig"));

        $__internal_a38556e90c0edb0ca246ac4ed9d1e2c6049bd51b58f476bfc4dfc842873b23ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38556e90c0edb0ca246ac4ed9d1e2c6049bd51b58f476bfc4dfc842873b23ba->enter($__internal_a38556e90c0edb0ca246ac4ed9d1e2c6049bd51b58f476bfc4dfc842873b23ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 1, $this->getSourceContext()); })())) > 1)) {
            // line 2
            echo "
";
            // line 3
            $context["selected"] = twig_first($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 3, $this->getSourceContext()); })()));
            // line 4
            $context["code"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "channel"), "method");
            // line 5
            echo "
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 6, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 7
                echo "    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["channel"], "code", array()) === (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new Twig_Error_Runtime('Variable "code" does not exist.', 7, $this->getSourceContext()); })()))) {
                    // line 8
                    echo "        ";
                    $context["selected"] = $context["channel"];
                    // line 9
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
<div class=\"ui floating dropdown labeled icon button\">
    <i class=\"share alternate icon\"></i>
    <span class=\"text\">
        ";
            // line 15
            $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", 15)->display(array_merge($context, array("channel" => (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 15, $this->getSourceContext()); })()))));
            // line 16
            echo "    </span>
    <div class=\"menu\">
        <div class=\"ui icon search input\">
            <i class=\"search icon\"></i>
            <input type=\"text\" placeholder=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.search"), "html", null, true);
            echo "...\">
        </div>
        <div class=\"scrolling menu\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 23, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 24
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard", array("channel" => twig_get_attribute($this->env, $this->getSourceContext(), $context["channel"], "code", array()))), "html", null, true);
                echo "\" class=\"item\">
                    ";
                // line 25
                $this->loadTemplate("@SyliusAdmin/Common/_channel.html.twig", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", 25)->display($context);
                // line 26
                echo "                </a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
    </div>
</div>
";
        }
        
        $__internal_96c03f7b7f20130504c650eebb703f0bc5d52b5eceda20c02510ae38e3931392->leave($__internal_96c03f7b7f20130504c650eebb703f0bc5d52b5eceda20c02510ae38e3931392_prof);

        
        $__internal_a38556e90c0edb0ca246ac4ed9d1e2c6049bd51b58f476bfc4dfc842873b23ba->leave($__internal_a38556e90c0edb0ca246ac4ed9d1e2c6049bd51b58f476bfc4dfc842873b23ba_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_channelSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  98 => 26,  96 => 25,  91 => 24,  74 => 23,  68 => 20,  62 => 16,  60 => 15,  54 => 11,  47 => 9,  44 => 8,  41 => 7,  37 => 6,  34 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if channels|length > 1 %}

{% set selected = channels|first %}
{% set code = app.request.query.get('channel') %}

{% for channel in channels %}
    {% if channel.code is same as(code) %}
        {% set selected = channel %}
    {% endif %}
{% endfor %}

<div class=\"ui floating dropdown labeled icon button\">
    <i class=\"share alternate icon\"></i>
    <span class=\"text\">
        {% include '@SyliusAdmin/Common/_channel.html.twig' with {'channel': selected} %}
    </span>
    <div class=\"menu\">
        <div class=\"ui icon search input\">
            <i class=\"search icon\"></i>
            <input type=\"text\" placeholder=\"{{ 'sylius.ui.search'|trans }}...\">
        </div>
        <div class=\"scrolling menu\">
            {% for channel in channels %}
                <a href=\"{{ path('sylius_admin_dashboard', {'channel': channel.code}) }}\" class=\"item\">
                    {% include '@SyliusAdmin/Common/_channel.html.twig' %}
                </a>
            {% endfor %}
        </div>
    </div>
</div>
{% endif %}
", "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Dashboard\\_channelSwitch.html.twig");
    }
}
