<?php

/* SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig */
class __TwigTemplate_3dc2e41064ee9b1c6570a8386442a9295bfc51cd164587d84476f5ce2c9e5913 extends Twig_Template
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
        $__internal_6e7cec5f7812fb5de300a86a3ca8c832774424b87a2fe88cb561eb521bd71e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7cec5f7812fb5de300a86a3ca8c832774424b87a2fe88cb561eb521bd71e29->enter($__internal_6e7cec5f7812fb5de300a86a3ca8c832774424b87a2fe88cb561eb521bd71e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig"));

        $__internal_6c29c6e00ca47fcba3007957bbcf4580beb5e9a88f414c79ae67df24109c2283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c29c6e00ca47fcba3007957bbcf4580beb5e9a88f414c79ae67df24109c2283->enter($__internal_6c29c6e00ca47fcba3007957bbcf4580beb5e9a88f414c79ae67df24109c2283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig", 1);
        // line 2
        echo "
<div class=\"ui top attached styled header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_default_address"), "html", null, true);
        echo "</div>
<div class=\"ui attached segment\" id=\"sylius-default-address\">
    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            ";
        // line 7
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig", 7)->display(array_merge($context, array("address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 7, $this->getSourceContext()); })()))));
        // line 8
        echo "        </div>
        <div class=\"right aligned column\">
            <div class=\"ui vertical icon labeled buttons\">
                ";
        // line 11
        echo $context["buttons"]->macro_edit($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 11, $this->getSourceContext()); })()), "id", array()))));
        echo "
                ";
        // line 12
        echo $context["buttons"]->macro_delete($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->getSourceContext()); })()), "id", array()))), null, true, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->getSourceContext()); })()), "id", array()));
        echo "
            </div>
        </div>
    </div>
</div>
<div class=\"ui divider\"></div>
";
        
        $__internal_6e7cec5f7812fb5de300a86a3ca8c832774424b87a2fe88cb561eb521bd71e29->leave($__internal_6e7cec5f7812fb5de300a86a3ca8c832774424b87a2fe88cb561eb521bd71e29_prof);

        
        $__internal_6c29c6e00ca47fcba3007957bbcf4580beb5e9a88f414c79ae67df24109c2283->leave($__internal_6c29c6e00ca47fcba3007957bbcf4580beb5e9a88f414c79ae67df24109c2283_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  44 => 11,  39 => 8,  37 => 7,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

<div class=\"ui top attached styled header\">{{ 'sylius.ui.your_default_address'|trans }}</div>
<div class=\"ui attached segment\" id=\"sylius-default-address\">
    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': address} %}
        </div>
        <div class=\"right aligned column\">
            <div class=\"ui vertical icon labeled buttons\">
                {{ buttons.edit(path('sylius_shop_account_address_book_update', {'id': address.id})) }}
                {{ buttons.delete(path('sylius_shop_account_address_book_delete', {'id': address.id}), null, true, address.id) }}
            </div>
        </div>
    </div>
</div>
<div class=\"ui divider\"></div>
", "SyliusShopBundle:Account/AddressBook:_defaultAddress.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/AddressBook/_defaultAddress.html.twig");
    }
}
