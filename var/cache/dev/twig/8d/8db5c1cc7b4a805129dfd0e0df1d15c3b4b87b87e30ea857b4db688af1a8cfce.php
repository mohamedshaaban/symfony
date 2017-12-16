<?php

/* SyliusShopBundle:Menu:_localeSwitch.html.twig */
class __TwigTemplate_80542e4873788e3b91ede578802b07e36c08a9987264caf96155949f36d6618b extends Twig_Template
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
        $__internal_ac8b07fa9ab42c9f69730a7f64949c18ea1e2252b6be812a6cc14587842fc8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8b07fa9ab42c9f69730a7f64949c18ea1e2252b6be812a6cc14587842fc8d3->enter($__internal_ac8b07fa9ab42c9f69730a7f64949c18ea1e2252b6be812a6cc14587842fc8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Menu:_localeSwitch.html.twig"));

        $__internal_6e953fb66f96281f0a77680fd2865245972dfde68e828203592adac58195abd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e953fb66f96281f0a77680fd2865245972dfde68e828203592adac58195abd0->enter($__internal_6e953fb66f96281f0a77680fd2865245972dfde68e828203592adac58195abd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Menu:_localeSwitch.html.twig"));

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
        
        $__internal_ac8b07fa9ab42c9f69730a7f64949c18ea1e2252b6be812a6cc14587842fc8d3->leave($__internal_ac8b07fa9ab42c9f69730a7f64949c18ea1e2252b6be812a6cc14587842fc8d3_prof);

        
        $__internal_6e953fb66f96281f0a77680fd2865245972dfde68e828203592adac58195abd0->leave($__internal_6e953fb66f96281f0a77680fd2865245972dfde68e828203592adac58195abd0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Menu:_localeSwitch.html.twig";
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
", "SyliusShopBundle:Menu:_localeSwitch.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Menu/_localeSwitch.html.twig");
    }
}
