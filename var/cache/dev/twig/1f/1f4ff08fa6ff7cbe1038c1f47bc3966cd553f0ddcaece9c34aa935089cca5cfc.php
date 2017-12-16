<?php

/* SyliusShopBundle:Account/Order/Show:_header.html.twig */
class __TwigTemplate_fd176ef0d2fb1ac9dc6d0da1782066b5219a59cc4f97da045a55c664ce10d78a extends Twig_Template
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
        $__internal_fed84e49fc2e3cf67d9afa992fa97be64f58c498fb4f224d623f80416976b8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed84e49fc2e3cf67d9afa992fa97be64f58c498fb4f224d623f80416976b8f8->enter($__internal_fed84e49fc2e3cf67d9afa992fa97be64f58c498fb4f224d623f80416976b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Show:_header.html.twig"));

        $__internal_b3d259f644d7c93fe4dbd9ecc9917f2016ace24e0aec14fd9724bab4aab72748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d259f644d7c93fe4dbd9ecc9917f2016ace24e0aec14fd9724bab4aab72748->enter($__internal_b3d259f644d7c93fe4dbd9ecc9917f2016ace24e0aec14fd9724bab4aab72748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Show:_header.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/Order/Show:_header.html.twig", 1);
        // line 2
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusShopBundle:Account/Order/Show:_header.html.twig", 2);
        // line 3
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 7, $this->getSourceContext()); })()), "number", array()), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 11
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->getSourceContext()); })()), "checkoutCompletedAt", array()));
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 14
        $this->loadTemplate(array(0 => ((("@SyliusShop/Account/Order/Label/State" . "/") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 14, $this->getSourceContext()); })()), "state", array())) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "SyliusShopBundle:Account/Order/Show:_header.html.twig", 14)->display(array_merge($context, array("value" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui." . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 14, $this->getSourceContext()); })()), "state", array()))))));
        // line 15
        echo "                </div>
                <div class=\"item\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->getSourceContext()); })()), "currencyCode", array()), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 20
        echo $context["flags"]->macro_fromLocaleCode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 20, $this->getSourceContext()); })()), "localeCode", array()));
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\LocaleExtension')->locale(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 20, $this->getSourceContext()); })()), "localeCode", array()));
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>

";
        // line 27
        if (twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->getSourceContext()); })()), "paymentState", array()), array(0 => "awaiting_payment"))) {
            // line 28
            echo "    ";
            echo $context["buttons"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_order_show", array("tokenValue" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->getSourceContext()); })()), "tokenValue", array()))), "sylius.ui.pay", null, "credit card alternative", "fluid blue");
            echo "
";
        }
        
        $__internal_fed84e49fc2e3cf67d9afa992fa97be64f58c498fb4f224d623f80416976b8f8->leave($__internal_fed84e49fc2e3cf67d9afa992fa97be64f58c498fb4f224d623f80416976b8f8_prof);

        
        $__internal_b3d259f644d7c93fe4dbd9ecc9917f2016ace24e0aec14fd9724bab4aab72748->leave($__internal_b3d259f644d7c93fe4dbd9ecc9917f2016ace24e0aec14fd9724bab4aab72748_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  73 => 27,  62 => 20,  56 => 17,  52 => 15,  50 => 14,  44 => 11,  35 => 7,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.order'|trans }} #{{ order.number }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    {{ order.checkoutCompletedAt|format_date }}
                </div>
                <div class=\"item\">
                    {% include [('@SyliusShop/Account/Order/Label/State' ~ '/' ~ order.state ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': ('sylius.ui.' ~ order.state)|trans} %}
                </div>
                <div class=\"item\">
                    {{ order.currencyCode }}
                </div>
                <div class=\"item\">
                    {{ flags.fromLocaleCode(order.localeCode) }}{{ order.localeCode|locale }}
                </div>
            </div>
        </div>
    </div>
</h1>

{% if order.paymentState in ['awaiting_payment'] %}
    {{ buttons.default(path('sylius_shop_order_show', {'tokenValue': order.tokenValue}), 'sylius.ui.pay', null, 'credit card alternative', 'fluid blue') }}
{% endif %}
", "SyliusShopBundle:Account/Order/Show:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Show/_header.html.twig");
    }
}
