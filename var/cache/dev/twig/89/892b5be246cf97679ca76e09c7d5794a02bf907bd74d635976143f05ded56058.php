<?php

/* SyliusShopBundle::register.html.twig */
class __TwigTemplate_35d0871617cfcd546e9c2b0d2a34d171c1902ffd5e18c97dc931a644f94c166f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::register.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4604f9897753364d10b8bef19a2ecb4266e12454eb34f254242aa4243064cb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4604f9897753364d10b8bef19a2ecb4266e12454eb34f254242aa4243064cb3a->enter($__internal_4604f9897753364d10b8bef19a2ecb4266e12454eb34f254242aa4243064cb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::register.html.twig"));

        $__internal_7f8452ad39bb130de5cc947e023effb9e2e88d60388064dace168732063dc005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8452ad39bb130de5cc947e023effb9e2e88d60388064dace168732063dc005->enter($__internal_7f8452ad39bb130de5cc947e023effb9e2e88d60388064dace168732063dc005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::register.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4604f9897753364d10b8bef19a2ecb4266e12454eb34f254242aa4243064cb3a->leave($__internal_4604f9897753364d10b8bef19a2ecb4266e12454eb34f254242aa4243064cb3a_prof);

        
        $__internal_7f8452ad39bb130de5cc947e023effb9e2e88d60388064dace168732063dc005->leave($__internal_7f8452ad39bb130de5cc947e023effb9e2e88d60388064dace168732063dc005_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e905c7397db5fb1af3290cc1077a3c97afff3de65b9c2de1fcbd57d0d3a1739c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e905c7397db5fb1af3290cc1077a3c97afff3de65b9c2de1fcbd57d0d3a1739c->enter($__internal_e905c7397db5fb1af3290cc1077a3c97afff3de65b9c2de1fcbd57d0d3a1739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d243ebf3dce8a5357367abb872bcd7ce65afd8e73b52afcc79e2c351b602dd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d243ebf3dce8a5357367abb872bcd7ce65afd8e73b52afcc79e2c351b602dd52->enter($__internal_d243ebf3dce8a5357367abb872bcd7ce65afd8e73b52afcc79e2c351b602dd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Register/_header.html.twig", "SyliusShopBundle::register.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.register.after_content_header"));
        echo "

    <div class=\"ui padded segment\">
        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.register.before_form"));
        echo "

        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_register"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
            ";
        // line 14
        $this->loadTemplate("@SyliusShop/Register/_form.html.twig", "SyliusShopBundle::register.html.twig", 14)->display($context);
        // line 15
        echo "
            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.register.form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "

            <button type=\"submit\" class=\"ui large primary button\">
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create_an_account"), "html", null, true);
        echo "
            </button>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_d243ebf3dce8a5357367abb872bcd7ce65afd8e73b52afcc79e2c351b602dd52->leave($__internal_d243ebf3dce8a5357367abb872bcd7ce65afd8e73b52afcc79e2c351b602dd52_prof);

        
        $__internal_e905c7397db5fb1af3290cc1077a3c97afff3de65b9c2de1fcbd57d0d3a1739c->leave($__internal_e905c7397db5fb1af3290cc1077a3c97afff3de65b9c2de1fcbd57d0d3a1739c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  89 => 21,  84 => 19,  78 => 16,  75 => 15,  73 => 14,  69 => 13,  64 => 11,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Register/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.register.after_content_header') }}

    <div class=\"ui padded segment\">
        {{ sonata_block_render_event('sylius.shop.register.before_form') }}

        {{ form_start(form, {'action': path('sylius_shop_register'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            {% include '@SyliusShop/Register/_form.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.register.form', {'form': form}) }}

            <button type=\"submit\" class=\"ui large primary button\">
                {{ 'sylius.ui.create_an_account'|trans }}
            </button>
        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle::register.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/register.html.twig");
    }
}
