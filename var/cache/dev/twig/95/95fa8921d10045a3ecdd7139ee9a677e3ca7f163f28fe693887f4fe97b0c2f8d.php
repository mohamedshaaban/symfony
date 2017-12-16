<?php

/* @SyliusShop/Menu/_localeSwitch.html.twig */
class __TwigTemplate_e75414aba3ccf7c30ebcc8398a6dd780d4158e39c241a84eff7d8d3f1b4ab1e0 extends Twig_Template
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
        $__internal_27a2af8fae4f279d57608f02b9bff5ed077724441d10901d4129ebcced6979a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a2af8fae4f279d57608f02b9bff5ed077724441d10901d4129ebcced6979a9->enter($__internal_27a2af8fae4f279d57608f02b9bff5ed077724441d10901d4129ebcced6979a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_localeSwitch.html.twig"));

        $__internal_475b6e4694e0f18d3c317916860059dac4399f6b66ad3d65ef61c028bbb32166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475b6e4694e0f18d3c317916860059dac4399f6b66ad3d65ef61c028bbb32166->enter($__internal_475b6e4694e0f18d3c317916860059dac4399f6b66ad3d65ef61c028bbb32166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_localeSwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 1, $this->getSourceContext()); })())) > 1)) {
            // line 2
            echo "    <div class=\"ui pointing dropdown link item\" id=\"sylius-locale-selector\">
        <span class=\"text sylius-active-locale\">";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 3, $this->getSourceContext()); })()))), "html", null, true);
            echo "</span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 6, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 7
                echo "                ";
                if ( !($context["code"] === (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 7, $this->getSourceContext()); })()))) {
                    // line 8
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_switch_locale", array("code" => $context["code"])), "html", null, true);
                    echo "\" class=\"item sylius-available-locale\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["code"])), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    </div>
";
        }
        
        $__internal_27a2af8fae4f279d57608f02b9bff5ed077724441d10901d4129ebcced6979a9->leave($__internal_27a2af8fae4f279d57608f02b9bff5ed077724441d10901d4129ebcced6979a9_prof);

        
        $__internal_475b6e4694e0f18d3c317916860059dac4399f6b66ad3d65ef61c028bbb32166->leave($__internal_475b6e4694e0f18d3c317916860059dac4399f6b66ad3d65ef61c028bbb32166_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Menu/_localeSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 12,  48 => 9,  43 => 8,  40 => 7,  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if locales|length > 1 %}
    <div class=\"ui pointing dropdown link item\" id=\"sylius-locale-selector\">
        <span class=\"text sylius-active-locale\">{{ active|sylius_locale_name }}</span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            {% for code in locales %}
                {% if code is not same as(active) %}
                    <a href=\"{{ path('sylius_shop_switch_locale', {'code': code}) }}\" class=\"item sylius-available-locale\">
                        {{ code|sylius_locale_name }}
                    </a>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}
", "@SyliusShop/Menu/_localeSwitch.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Menu\\_localeSwitch.html.twig");
    }
}
