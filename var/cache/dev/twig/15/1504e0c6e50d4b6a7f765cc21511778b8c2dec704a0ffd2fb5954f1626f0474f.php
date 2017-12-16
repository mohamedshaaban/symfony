<?php

/* SyliusShopBundle:Account/AddressBook:_item.html.twig */
class __TwigTemplate_d8f18b9f35ba2eb2f8556f060240b0c16f0fcafb12e649b66d52f1ec5787afee extends Twig_Template
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
        $__internal_582b87cae46d31bcfbe194d2fc6953b107b04ee44bf691a4b009ecd49fdbadc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582b87cae46d31bcfbe194d2fc6953b107b04ee44bf691a4b009ecd49fdbadc4->enter($__internal_582b87cae46d31bcfbe194d2fc6953b107b04ee44bf691a4b009ecd49fdbadc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_item.html.twig"));

        $__internal_4e3b0722268a752df231b01685992aafba2011ed678557eb2e9d129ed95841eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3b0722268a752df231b01685992aafba2011ed678557eb2e9d129ed95841eb->enter($__internal_4e3b0722268a752df231b01685992aafba2011ed678557eb2e9d129ed95841eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_item.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/AddressBook:_item.html.twig", 1);
        // line 2
        echo "
<div class=\"eight wide column\">
    <div class=\"ui segment address\">
        <div class=\"ui stackable two column grid\">
            <div class=\"column\">
                ";
        // line 7
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Account/AddressBook:_item.html.twig", 7)->display(array_merge($context, array("address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 7, $this->getSourceContext()); })()))));
        // line 8
        echo "            </div>
            <div class=\"right aligned column\">
                <div class=\"ui vertical small icon labeled buttons\">
                    ";
        // line 11
        echo $context["buttons"]->macro_edit($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 11, $this->getSourceContext()); })()), "id", array()))));
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_set_as_default", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->getSourceContext()); })()), "id", array()))));
        echo "
                    ";
        // line 13
        echo $context["buttons"]->macro_delete($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 13, $this->getSourceContext()); })()), "id", array()))), null, true, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 13, $this->getSourceContext()); })()), "id", array()));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_582b87cae46d31bcfbe194d2fc6953b107b04ee44bf691a4b009ecd49fdbadc4->leave($__internal_582b87cae46d31bcfbe194d2fc6953b107b04ee44bf691a4b009ecd49fdbadc4_prof);

        
        $__internal_4e3b0722268a752df231b01685992aafba2011ed678557eb2e9d129ed95841eb->leave($__internal_4e3b0722268a752df231b01685992aafba2011ed678557eb2e9d129ed95841eb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  45 => 12,  41 => 11,  36 => 8,  34 => 7,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

<div class=\"eight wide column\">
    <div class=\"ui segment address\">
        <div class=\"ui stackable two column grid\">
            <div class=\"column\">
                {% include '@SyliusShop/Common/_address.html.twig' with {'address': address} %}
            </div>
            <div class=\"right aligned column\">
                <div class=\"ui vertical small icon labeled buttons\">
                    {{ buttons.edit(path('sylius_shop_account_address_book_update', {'id': address.id})) }}
                    {{ render(path('sylius_shop_account_address_book_set_as_default', {'id': address.id})) }}
                    {{ buttons.delete(path('sylius_shop_account_address_book_delete', {'id': address.id}), null, true, address.id) }}
                </div>
            </div>
        </div>
    </div>
</div>
", "SyliusShopBundle:Account/AddressBook:_item.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/AddressBook/_item.html.twig");
    }
}
