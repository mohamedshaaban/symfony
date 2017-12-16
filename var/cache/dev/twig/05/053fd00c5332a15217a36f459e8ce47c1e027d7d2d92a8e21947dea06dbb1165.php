<?php

/* SyliusShopBundle:Account:resetPassword.html.twig */
class __TwigTemplate_ca5eb696db3952484b09d7b9d18d976e7e9c27f968bd94081b0a97b98ee018b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Account:resetPassword.html.twig", 1);
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
        $__internal_bb0c1ee87817691cccb6a276259166833cd31a601342e4e6a28a3aa9100416c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0c1ee87817691cccb6a276259166833cd31a601342e4e6a28a3aa9100416c4->enter($__internal_bb0c1ee87817691cccb6a276259166833cd31a601342e4e6a28a3aa9100416c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:resetPassword.html.twig"));

        $__internal_4a8912594a910fb0b3178b941c1a3fa67bc3195c6f7c2c7b05def8bb1bbece6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8912594a910fb0b3178b941c1a3fa67bc3195c6f7c2c7b05def8bb1bbece6e->enter($__internal_4a8912594a910fb0b3178b941c1a3fa67bc3195c6f7c2c7b05def8bb1bbece6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:resetPassword.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb0c1ee87817691cccb6a276259166833cd31a601342e4e6a28a3aa9100416c4->leave($__internal_bb0c1ee87817691cccb6a276259166833cd31a601342e4e6a28a3aa9100416c4_prof);

        
        $__internal_4a8912594a910fb0b3178b941c1a3fa67bc3195c6f7c2c7b05def8bb1bbece6e->leave($__internal_4a8912594a910fb0b3178b941c1a3fa67bc3195c6f7c2c7b05def8bb1bbece6e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_aeac6ff43b7679b5e5ffc808a54ba0a5ea27c03943de729286a2ba0a0579f1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeac6ff43b7679b5e5ffc808a54ba0a5ea27c03943de729286a2ba0a0579f1eb->enter($__internal_aeac6ff43b7679b5e5ffc808a54ba0a5ea27c03943de729286a2ba0a0579f1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_37317ea16c9bc629ff33cb7ae2e70dca06706537a07013d82fd63b526f8c624d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37317ea16c9bc629ff33cb7ae2e70dca06706537a07013d82fd63b526f8c624d->enter($__internal_37317ea16c9bc629ff33cb7ae2e70dca06706537a07013d82fd63b526f8c624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui three column centered grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular lock icon\"></i>
                <div class=\"content\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reset_password"), "html", null, true);
        echo "
                    <div class=\"sub header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.set_a_new_password_for_your_account"), "html", null, true);
        echo "</div>
                </div>
            </h1>
            <div class=\"ui segment\">
                ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_password_reset", array("token" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->getSourceContext()); })()), "passwordResetToken", array()))), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "password", array()), "first", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.form.user_reset_password.new")));
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "password", array()), "second", array()), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.form.user_reset_password.confirmation")));
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
                <button type=\"submit\" class=\"ui fluid large primary submit button\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reset"), "html", null, true);
        echo "</button>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_37317ea16c9bc629ff33cb7ae2e70dca06706537a07013d82fd63b526f8c624d->leave($__internal_37317ea16c9bc629ff33cb7ae2e70dca06706537a07013d82fd63b526f8c624d_prof);

        
        $__internal_aeac6ff43b7679b5e5ffc808a54ba0a5ea27c03943de729286a2ba0a0579f1eb->leave($__internal_aeac6ff43b7679b5e5ffc808a54ba0a5ea27c03943de729286a2ba0a0579f1eb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:resetPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  64 => 13,  60 => 12,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui three column centered grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                <i class=\"circular lock icon\"></i>
                <div class=\"content\">
                    {{ 'sylius.ui.reset_password'|trans }}
                    <div class=\"sub header\">{{ 'sylius.ui.set_a_new_password_for_your_account'|trans }}</div>
                </div>
            </h1>
            <div class=\"ui segment\">
                {{ form_start(form, {'action': path('sylius_shop_password_reset', {'token' : user.passwordResetToken}), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
                {{ form_row(form.password.first, {'label': 'sylius.form.user_reset_password.new'|trans}) }}
                {{ form_row(form.password.second, {'label': 'sylius.form.user_reset_password.confirmation'|trans}) }}
                {{ form_row(form._token) }}
                <button type=\"submit\" class=\"ui fluid large primary submit button\">{{ 'sylius.ui.reset'|trans }}</button>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Account:resetPassword.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/resetPassword.html.twig");
    }
}
