<?php

/* SyliusShopBundle:Account/AddressBook:create.html.twig */
class __TwigTemplate_710aa4bd126ba59c7992e7ff895c74efb27047c27677ad8569fd1451301934f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "SyliusShopBundle:Account/AddressBook:create.html.twig", 1);
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
        $__internal_56c1ee5da38e9412f645062ce50f52d8c5665cdf7295d9d87b865f9f6bf9e969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c1ee5da38e9412f645062ce50f52d8c5665cdf7295d9d87b865f9f6bf9e969->enter($__internal_56c1ee5da38e9412f645062ce50f52d8c5665cdf7295d9d87b865f9f6bf9e969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:create.html.twig"));

        $__internal_2cca9abbf2a2e3ef6ec18740af31b7588220b6a28c132dd8941a89d9abf365d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cca9abbf2a2e3ef6ec18740af31b7588220b6a28c132dd8941a89d9abf365d0->enter($__internal_2cca9abbf2a2e3ef6ec18740af31b7588220b6a28c132dd8941a89d9abf365d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:create.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56c1ee5da38e9412f645062ce50f52d8c5665cdf7295d9d87b865f9f6bf9e969->leave($__internal_56c1ee5da38e9412f645062ce50f52d8c5665cdf7295d9d87b865f9f6bf9e969_prof);

        
        $__internal_2cca9abbf2a2e3ef6ec18740af31b7588220b6a28c132dd8941a89d9abf365d0->leave($__internal_2cca9abbf2a2e3ef6ec18740af31b7588220b6a28c132dd8941a89d9abf365d0_prof);

    }

    // line 5
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_ea4562b4fe11659d128a1f455bb6433f049567fe721a9cb5caef4559f7e9c91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4562b4fe11659d128a1f455bb6433f049567fe721a9cb5caef4559f7e9c91d->enter($__internal_ea4562b4fe11659d128a1f455bb6433f049567fe721a9cb5caef4559f7e9c91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_b99a8d0412138f8579b6993427b45fe9ca2df59c4b2186497cfccaed46012ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99a8d0412138f8579b6993427b45fe9ca2df59c4b2186497cfccaed46012ca2->enter($__internal_b99a8d0412138f8579b6993427b45fe9ca2df59c4b2186497cfccaed46012ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 6
        echo "    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address_book"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_address"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.create.after_content_header", array("address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_create"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
            ";
        // line 15
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "SyliusShopBundle:Account/AddressBook:create.html.twig", 15)->display(array_merge($context, array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()))));
        // line 16
        echo "            <div class=\"ui two column grid\">
                <div class=\"column\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_index");
        echo "\" class=\"ui large icon labeled button\">
                        <i class=\"left arrow icon\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
        echo "
                    </a>
                </div>
                <div class=\"right aligned column\">
                    <button type=\"submit\" class=\"ui large icon labeled blue button\">
                        <i class=\"icon plus\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>

        ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.create.form", array("address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 29, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_b99a8d0412138f8579b6993427b45fe9ca2df59c4b2186497cfccaed46012ca2->leave($__internal_b99a8d0412138f8579b6993427b45fe9ca2df59c4b2186497cfccaed46012ca2_prof);

        
        $__internal_ea4562b4fe11659d128a1f455bb6433f049567fe721a9cb5caef4559f7e9c91d->leave($__internal_ea4562b4fe11659d128a1f455bb6433f049567fe721a9cb5caef4559f7e9c91d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  106 => 31,  101 => 29,  93 => 24,  85 => 19,  81 => 18,  77 => 16,  75 => 15,  71 => 14,  66 => 12,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/AddressBook/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block subcontent %}
    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.address_book'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.add_address'|trans }}</div>
        </h1>

        {{ sonata_block_render_event('sylius.shop.account.address_book.create.after_content_header', {'address': address}) }}

        {{ form_start(form, {'action': path('sylius_shop_account_address_book_create'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form} %}
            <div class=\"ui two column grid\">
                <div class=\"column\">
                    <a href=\"{{ path('sylius_shop_account_address_book_index') }}\" class=\"ui large icon labeled button\">
                        <i class=\"left arrow icon\"></i> {{ 'sylius.ui.cancel'|trans }}
                    </a>
                </div>
                <div class=\"right aligned column\">
                    <button type=\"submit\" class=\"ui large icon labeled blue button\">
                        <i class=\"icon plus\"></i> {{ 'sylius.ui.add'|trans }}
                    </button>
                </div>
            </div>

        {{ sonata_block_render_event('sylius.shop.account.address_book.create.form', {'address': address}) }}

        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Account/AddressBook:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/AddressBook/create.html.twig");
    }
}
