<?php

/* SyliusShopBundle:Account/AddressBook:update.html.twig */
class __TwigTemplate_c1a921d6aa80f6305024128e4b25b39626668a2c01a2db9057f29a83f410c4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "SyliusShopBundle:Account/AddressBook:update.html.twig", 1);
        $this->blocks = array(
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/AddressBook/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae14293d0f67f0a2ea6e5012b755c5a82da375a6baeb3dda75e15187a380fb53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae14293d0f67f0a2ea6e5012b755c5a82da375a6baeb3dda75e15187a380fb53->enter($__internal_ae14293d0f67f0a2ea6e5012b755c5a82da375a6baeb3dda75e15187a380fb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:update.html.twig"));

        $__internal_cf04e1c133925f77f01629c79fdac40b6c973196db4d1eaf79ec67b3c494524b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf04e1c133925f77f01629c79fdac40b6c973196db4d1eaf79ec67b3c494524b->enter($__internal_cf04e1c133925f77f01629c79fdac40b6c973196db4d1eaf79ec67b3c494524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:update.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae14293d0f67f0a2ea6e5012b755c5a82da375a6baeb3dda75e15187a380fb53->leave($__internal_ae14293d0f67f0a2ea6e5012b755c5a82da375a6baeb3dda75e15187a380fb53_prof);

        
        $__internal_cf04e1c133925f77f01629c79fdac40b6c973196db4d1eaf79ec67b3c494524b->leave($__internal_cf04e1c133925f77f01629c79fdac40b6c973196db4d1eaf79ec67b3c494524b_prof);

    }

    // line 5
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_6b518fec150948b1a30cd03792053e2fe87baa71b4148979bec0b98e185c4789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b518fec150948b1a30cd03792053e2fe87baa71b4148979bec0b98e185c4789->enter($__internal_6b518fec150948b1a30cd03792053e2fe87baa71b4148979bec0b98e185c4789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_bb043f797f92ebb39d57c7590f0d65aab97c08374a8d75fb30646e2f9c891061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb043f797f92ebb39d57c7590f0d65aab97c08374a8d75fb30646e2f9c891061->enter($__internal_bb043f797f92ebb39d57c7590f0d65aab97c08374a8d75fb30646e2f9c891061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 6
        echo "    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address_book"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit_my_address"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.create.after_content_header", array("address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 14, $this->getSourceContext()); })()), "id", array()))), "method" => "PUT", "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "

        ";
        // line 16
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "SyliusShopBundle:Account/AddressBook:update.html.twig", 16)->display(array_merge($context, array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()))));
        // line 17
        echo "
        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_index");
        echo "\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\">
                    <i class=\"icon save\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "
                </button>
            </div>
        </div>

        ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.update.form", array("address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 31, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_bb043f797f92ebb39d57c7590f0d65aab97c08374a8d75fb30646e2f9c891061->leave($__internal_bb043f797f92ebb39d57c7590f0d65aab97c08374a8d75fb30646e2f9c891061_prof);

        
        $__internal_6b518fec150948b1a30cd03792053e2fe87baa71b4148979bec0b98e185c4789->leave($__internal_6b518fec150948b1a30cd03792053e2fe87baa71b4148979bec0b98e185c4789_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  108 => 33,  103 => 31,  95 => 26,  87 => 21,  83 => 20,  78 => 17,  76 => 16,  71 => 14,  66 => 12,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/AddressBook/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block subcontent %}
    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.address_book'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.edit_my_address'|trans }}</div>
        </h1>

        {{ sonata_block_render_event('sylius.shop.account.address_book.create.after_content_header', {'address': address}) }}

        {{ form_start(form, {'action': path('sylius_shop_account_address_book_update', {'id': address.id}), 'method': 'PUT', 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}

        {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form} %}

        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"{{ path('sylius_shop_account_address_book_index') }}\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> {{ 'sylius.ui.cancel'|trans }}
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\">
                    <i class=\"icon save\"></i> {{ 'sylius.ui.save_changes'|trans }}
                </button>
            </div>
        </div>

        {{ sonata_block_render_event('sylius.shop.account.address_book.update.form', {'address': address}) }}

        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Account/AddressBook:update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/AddressBook/update.html.twig");
    }
}
