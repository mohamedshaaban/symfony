<?php

/* SyliusShopBundle:Menu:_currencySwitch.html.twig */
class __TwigTemplate_62909896f3bd4dfdfd50a646f93c918ebf33e6feb4ff29a937a312ba10e8a75c extends Twig_Template
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
        $__internal_496280d9117c5cd09d572dcf9b14f115a5a88776ec05e7f9bc9e9a1e589929e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496280d9117c5cd09d572dcf9b14f115a5a88776ec05e7f9bc9e9a1e589929e8->enter($__internal_496280d9117c5cd09d572dcf9b14f115a5a88776ec05e7f9bc9e9a1e589929e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Menu:_currencySwitch.html.twig"));

        $__internal_a7e546f9c9bf8524de1cd144d080fbbb27ab7366e8c1097ab2c386d839a48374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e546f9c9bf8524de1cd144d080fbbb27ab7366e8c1097ab2c386d839a48374->enter($__internal_a7e546f9c9bf8524de1cd144d080fbbb27ab7366e8c1097ab2c386d839a48374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Menu:_currencySwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new Twig_Error_Runtime('Variable "currencies" does not exist.', 1, $this->getSourceContext()); })())) > 1)) {
            // line 2
            echo "    <div class=\"ui pointing dropdown link item\" id=\"sylius-currency-selector\">
        <span class=\"text sylius-active-currency\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "</span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new Twig_Error_Runtime('Variable "currencies" does not exist.', 6, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 7
                echo "                ";
                if ( !($context["code"] === (isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 7, $this->getSourceContext()); })()))) {
                    // line 8
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_switch_currency", array("code" => $context["code"])), "html", null, true);
                    echo "\" class=\"item sylius-available-currency\">
                    ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
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
        
        $__internal_496280d9117c5cd09d572dcf9b14f115a5a88776ec05e7f9bc9e9a1e589929e8->leave($__internal_496280d9117c5cd09d572dcf9b14f115a5a88776ec05e7f9bc9e9a1e589929e8_prof);

        
        $__internal_a7e546f9c9bf8524de1cd144d080fbbb27ab7366e8c1097ab2c386d839a48374->leave($__internal_a7e546f9c9bf8524de1cd144d080fbbb27ab7366e8c1097ab2c386d839a48374_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Menu:_currencySwitch.html.twig";
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
        return new Twig_Source("{% if currencies|length > 1 %}
    <div class=\"ui pointing dropdown link item\" id=\"sylius-currency-selector\">
        <span class=\"text sylius-active-currency\">{{ active }}</span>
        <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
            {% for code in currencies %}
                {% if code is not same as(active) %}
                <a href=\"{{ path('sylius_shop_switch_currency', {'code': code}) }}\" class=\"item sylius-available-currency\">
                    {{ code }}
                </a>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endif %}
", "SyliusShopBundle:Menu:_currencySwitch.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Menu/_currencySwitch.html.twig");
    }
}
