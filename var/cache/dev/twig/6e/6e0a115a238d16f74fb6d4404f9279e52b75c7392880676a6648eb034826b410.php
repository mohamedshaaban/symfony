<?php

/* SyliusShopBundle::login.html.twig */
class __TwigTemplate_3a0062df93b64aa7819c1925b0b591bc5426c6ed4f0d219f8f091b9789f3b254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::login.html.twig", 1);
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
        $__internal_97fe4f5348baea781e89fa7cfa33116c5e295f3dafeaf0469f3c7e55a10ec599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fe4f5348baea781e89fa7cfa33116c5e295f3dafeaf0469f3c7e55a10ec599->enter($__internal_97fe4f5348baea781e89fa7cfa33116c5e295f3dafeaf0469f3c7e55a10ec599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::login.html.twig"));

        $__internal_bde1c4294b75bce0eb1291bf27cb6c8a08a36db35d920a7c959ed7e167ba262e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde1c4294b75bce0eb1291bf27cb6c8a08a36db35d920a7c959ed7e167ba262e->enter($__internal_bde1c4294b75bce0eb1291bf27cb6c8a08a36db35d920a7c959ed7e167ba262e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::login.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97fe4f5348baea781e89fa7cfa33116c5e295f3dafeaf0469f3c7e55a10ec599->leave($__internal_97fe4f5348baea781e89fa7cfa33116c5e295f3dafeaf0469f3c7e55a10ec599_prof);

        
        $__internal_bde1c4294b75bce0eb1291bf27cb6c8a08a36db35d920a7c959ed7e167ba262e->leave($__internal_bde1c4294b75bce0eb1291bf27cb6c8a08a36db35d920a7c959ed7e167ba262e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bb29a2e624a2d027e3f9ff656fb4981cd5c6cb0f82e29d8d067c9100c12caacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb29a2e624a2d027e3f9ff656fb4981cd5c6cb0f82e29d8d067c9100c12caacd->enter($__internal_bb29a2e624a2d027e3f9ff656fb4981cd5c6cb0f82e29d8d067c9100c12caacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dce3221df43a495e2a451d4b0aa7e44ed5fb5af60d9bfd583f173fede793774c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce3221df43a495e2a451d4b0aa7e44ed5fb5af60d9bfd583f173fede793774c->enter($__internal_dce3221df43a495e2a451d4b0aa7e44ed5fb5af60d9bfd583f173fede793774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Login/_header.html.twig", "SyliusShopBundle::login.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_content_header"));
        echo "

    <div class=\"ui padded segment\">
        <div class=\"ui two column very relaxed stackable grid\">
            <div class=\"column\">
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.before_login"));
        echo "

                <h4 class=\"ui dividing header\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.registered_customers"), "html", null, true);
        echo "</h4>
                <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.if_you_have_an_account_sign_in_with_your_email_address"), "html", null, true);
        echo ".</p>
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login_check"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 18
        $this->loadTemplate("@SyliusShop/Login/_form.html.twig", "SyliusShopBundle::login.html.twig", 18)->display($context);
        // line 19
        echo "
                    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "

                    <button type=\"submit\" class=\"ui blue submit button\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.login"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_request_password_reset_token");
        echo "\" class=\"ui right floated button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.forgot_password"), "html", null, true);
        echo "</a>
                    <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "

                ";
        // line 27
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_login"));
        echo "
            </div>
            <div class=\"ui hidden vertical divider\">
            </div>
            <div class=\"column\">
                ";
        // line 32
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.before_register"));
        echo "

                ";
        // line 34
        $this->loadTemplate("@SyliusShop/Login/_register.html.twig", "SyliusShopBundle::login.html.twig", 34)->display($context);
        // line 35
        echo "
                ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.login.after_register"));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_dce3221df43a495e2a451d4b0aa7e44ed5fb5af60d9bfd583f173fede793774c->leave($__internal_dce3221df43a495e2a451d4b0aa7e44ed5fb5af60d9bfd583f173fede793774c_prof);

        
        $__internal_bb29a2e624a2d027e3f9ff656fb4981cd5c6cb0f82e29d8d067c9100c12caacd->leave($__internal_bb29a2e624a2d027e3f9ff656fb4981cd5c6cb0f82e29d8d067c9100c12caacd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  127 => 35,  125 => 34,  120 => 32,  112 => 27,  107 => 25,  103 => 24,  97 => 23,  93 => 22,  88 => 20,  85 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  66 => 13,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Login/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.login.after_content_header') }}

    <div class=\"ui padded segment\">
        <div class=\"ui two column very relaxed stackable grid\">
            <div class=\"column\">
                {{ sonata_block_render_event('sylius.shop.login.before_login') }}

                <h4 class=\"ui dividing header\">{{ 'sylius.ui.registered_customers'|trans }}</h4>
                <p>{{ 'sylius.ui.if_you_have_an_account_sign_in_with_your_email_address'|trans }}.</p>
                {{ form_start(form, {'action': path('sylius_shop_login_check'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    {% include '@SyliusShop/Login/_form.html.twig' %}

                    {{ sonata_block_render_event('sylius.shop.login.form', {'form': form}) }}

                    <button type=\"submit\" class=\"ui blue submit button\">{{ 'sylius.ui.login'|trans }}</button>
                    <a href=\"{{ path('sylius_shop_request_password_reset_token') }}\" class=\"ui right floated button\">{{ 'sylius.ui.forgot_password'|trans }}</a>
                    <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\">
                {{ form_end(form, {'render_rest': false}) }}

                {{ sonata_block_render_event('sylius.shop.login.after_login') }}
            </div>
            <div class=\"ui hidden vertical divider\">
            </div>
            <div class=\"column\">
                {{ sonata_block_render_event('sylius.shop.login.before_register') }}

                {% include '@SyliusShop/Login/_register.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.login.after_register') }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle::login.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/login.html.twig");
    }
}
