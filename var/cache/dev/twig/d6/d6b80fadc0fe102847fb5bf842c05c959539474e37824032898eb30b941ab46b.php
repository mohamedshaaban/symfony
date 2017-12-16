<?php

/* SyliusShopBundle:Account:requestPasswordReset.html.twig */
class __TwigTemplate_30f3f056156933094851b60c78a8982240cb0d3293931c1906db1c734cad33a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Account:requestPasswordReset.html.twig", 1);
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
        $__internal_496c078450507cf9a9bad4f6b059f188a1e6b1d73e887b0cc83d2f65474eee74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496c078450507cf9a9bad4f6b059f188a1e6b1d73e887b0cc83d2f65474eee74->enter($__internal_496c078450507cf9a9bad4f6b059f188a1e6b1d73e887b0cc83d2f65474eee74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:requestPasswordReset.html.twig"));

        $__internal_6ea68ba4d84318d7c2c7ce7fd4a5004695b51adfd5a7b8ac958fd99d18647bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea68ba4d84318d7c2c7ce7fd4a5004695b51adfd5a7b8ac958fd99d18647bd9->enter($__internal_6ea68ba4d84318d7c2c7ce7fd4a5004695b51adfd5a7b8ac958fd99d18647bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:requestPasswordReset.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496c078450507cf9a9bad4f6b059f188a1e6b1d73e887b0cc83d2f65474eee74->leave($__internal_496c078450507cf9a9bad4f6b059f188a1e6b1d73e887b0cc83d2f65474eee74_prof);

        
        $__internal_6ea68ba4d84318d7c2c7ce7fd4a5004695b51adfd5a7b8ac958fd99d18647bd9->leave($__internal_6ea68ba4d84318d7c2c7ce7fd4a5004695b51adfd5a7b8ac958fd99d18647bd9_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_353259b3606b47820377aefe4f788c40de6a3c3de171fe3d6d17cf61bf4fef61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353259b3606b47820377aefe4f788c40de6a3c3de171fe3d6d17cf61bf4fef61->enter($__internal_353259b3606b47820377aefe4f788c40de6a3c3de171fe3d6d17cf61bf4fef61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_514c141cd04c647141d9b411eb19a40bddcfb21304ea5c3f7b0135f849ec61c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514c141cd04c647141d9b411eb19a40bddcfb21304ea5c3f7b0135f849ec61c8->enter($__internal_514c141cd04c647141d9b411eb19a40bddcfb21304ea5c3f7b0135f849ec61c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

                ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.request_password_reset_token.after_content_header"));
        echo "
            </h1>
            <div class=\"ui segment\">
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_request_password_reset_token"), "attr" => array("class" => "ui large loadable form", "novalidate" => "novalidate")));
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "

                ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.request_password_reset_token.form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()))));
        echo "

                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
                <button type=\"submit\" class=\"ui fluid large primary submit button\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.reset"), "html", null, true);
        echo "</button>
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_514c141cd04c647141d9b411eb19a40bddcfb21304ea5c3f7b0135f849ec61c8->leave($__internal_514c141cd04c647141d9b411eb19a40bddcfb21304ea5c3f7b0135f849ec61c8_prof);

        
        $__internal_353259b3606b47820377aefe4f788c40de6a3c3de171fe3d6d17cf61bf4fef61->leave($__internal_353259b3606b47820377aefe4f788c40de6a3c3de171fe3d6d17cf61bf4fef61_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:requestPasswordReset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  94 => 25,  90 => 24,  85 => 22,  80 => 20,  76 => 19,  70 => 16,  64 => 13,  60 => 12,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

                {{ sonata_block_render_event('sylius.shop.request_password_reset_token.after_content_header') }}
            </h1>
            <div class=\"ui segment\">
                {{ form_start(form, {'action': path('sylius_shop_request_password_reset_token'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
                {{ form_row(form.email) }}

                {{ sonata_block_render_event('sylius.shop.request_password_reset_token.form', {'form': form}) }}

                {{ form_row(form._token) }}
                <button type=\"submit\" class=\"ui fluid large primary submit button\">{{ 'sylius.ui.reset'|trans }}</button>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Account:requestPasswordReset.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/requestPasswordReset.html.twig");
    }
}
