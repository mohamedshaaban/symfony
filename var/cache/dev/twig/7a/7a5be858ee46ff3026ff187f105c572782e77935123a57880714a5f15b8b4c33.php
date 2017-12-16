<?php

/* SyliusShopBundle:Product/Show:_variantsPricing.html.twig */
class __TwigTemplate_90abdbaf191f92abb79090e9155bbcb9f76d80afdf14319decb1c531b876183b extends Twig_Template
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
        $__internal_126b65cfd77a8006808c5608d94648146cea5d16178c63f39224d8f6da072807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126b65cfd77a8006808c5608d94648146cea5d16178c63f39224d8f6da072807->enter($__internal_126b65cfd77a8006808c5608d94648146cea5d16178c63f39224d8f6da072807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_variantsPricing.html.twig"));

        $__internal_ee305ff8b353cb7694de475c9f846342a117235745bfe82ff004417fd0437989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee305ff8b353cb7694de475c9f846342a117235745bfe82ff004417fd0437989->enter($__internal_ee305ff8b353cb7694de475c9f846342a117235745bfe82ff004417fd0437989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_variantsPricing.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Product/Show:_variantsPricing.html.twig", 1);
        // line 2
        echo "
<div id=\"sylius-variants-pricing\" data-unavailable-text=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.unavailable"), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pricing"]) || array_key_exists("pricing", $context) ? $context["pricing"] : (function () { throw new Twig_Error_Runtime('Variable "pricing" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 5
            echo "    <div ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["price"]);
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                echo "data-";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "=\"";
                if (($context["option"] == "value")) {
                    echo $context["money"]->macro_convertAndFormat($context["value"]);
                } else {
                    echo twig_escape_filter($this->env, twig_replace_filter($context["value"], array("\"" => "'")), "html", null, true);
                }
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
        
        $__internal_126b65cfd77a8006808c5608d94648146cea5d16178c63f39224d8f6da072807->leave($__internal_126b65cfd77a8006808c5608d94648146cea5d16178c63f39224d8f6da072807_prof);

        
        $__internal_ee305ff8b353cb7694de475c9f846342a117235745bfe82ff004417fd0437989->leave($__internal_ee305ff8b353cb7694de475c9f846342a117235745bfe82ff004417fd0437989_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_variantsPricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  38 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div id=\"sylius-variants-pricing\" data-unavailable-text=\"{{ 'sylius.ui.unavailable'|trans }}\">
{% for price in pricing %}
    <div {% for option, value in price %}data-{{ option }}=\"{% if option == 'value' %}{{ money.convertAndFormat(value) }}{% else %}{{ value|replace({'\\\"': '\\''}) }}{% endif %}\" {% endfor %}></div>
{% endfor %}
</div>
", "SyliusShopBundle:Product/Show:_variantsPricing.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_variantsPricing.html.twig");
    }
}
