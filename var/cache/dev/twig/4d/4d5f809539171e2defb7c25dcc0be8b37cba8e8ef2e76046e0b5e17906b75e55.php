<?php

/* SyliusShopBundle:Account:changePassword.html.twig */
class __TwigTemplate_073d78f00a32369d39fbaa6f01b0e3ce44bc97f462653875e0bf355de5459045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:changePassword.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28f6e825208b7c3e812d9066a607ecff0de8eb53d1877884ac7254506db33209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f6e825208b7c3e812d9066a607ecff0de8eb53d1877884ac7254506db33209->enter($__internal_28f6e825208b7c3e812d9066a607ecff0de8eb53d1877884ac7254506db33209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:changePassword.html.twig"));

        $__internal_dc9cac764edf2f9cc93b751d8dafaa6960c4b25beb179027467e8bb3798bc269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9cac764edf2f9cc93b751d8dafaa6960c4b25beb179027467e8bb3798bc269->enter($__internal_dc9cac764edf2f9cc93b751d8dafaa6960c4b25beb179027467e8bb3798bc269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:changePassword.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f6e825208b7c3e812d9066a607ecff0de8eb53d1877884ac7254506db33209->leave($__internal_28f6e825208b7c3e812d9066a607ecff0de8eb53d1877884ac7254506db33209_prof);

        
        $__internal_dc9cac764edf2f9cc93b751d8dafaa6960c4b25beb179027467e8bb3798bc269->leave($__internal_dc9cac764edf2f9cc93b751d8dafaa6960c4b25beb179027467e8bb3798bc269_prof);

    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_27775cab8516384ccf9bc327418128f4b8b29c5eef7a9de5ba30c99b4b75d8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27775cab8516384ccf9bc327418128f4b8b29c5eef7a9de5ba30c99b4b75d8fe->enter($__internal_27775cab8516384ccf9bc327418128f4b8b29c5eef7a9de5ba30c99b4b75d8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_240776ad1345d0660537b5d2763b9d17f58168fadcac228d64984c42f88c0dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240776ad1345d0660537b5d2763b9d17f58168fadcac228d64984c42f88c0dd8->enter($__internal_240776ad1345d0660537b5d2763b9d17f58168fadcac228d64984c42f88c0dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 6
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_password"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_240776ad1345d0660537b5d2763b9d17f58168fadcac228d64984c42f88c0dd8->leave($__internal_240776ad1345d0660537b5d2763b9d17f58168fadcac228d64984c42f88c0dd8_prof);

        
        $__internal_27775cab8516384ccf9bc327418128f4b8b29c5eef7a9de5ba30c99b4b75d8fe->leave($__internal_27775cab8516384ccf9bc327418128f4b8b29c5eef7a9de5ba30c99b4b75d8fe_prof);

    }

    // line 15
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_c24fee3ea1998dee8bc1f2780f201717aa6c6a5334db42f2aeb36f44bc560120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24fee3ea1998dee8bc1f2780f201717aa6c6a5334db42f2aeb36f44bc560120->enter($__internal_c24fee3ea1998dee8bc1f2780f201717aa6c6a5334db42f2aeb36f44bc560120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_bf457e1a8e4813a3e2211f15ccf9cb2131ad51c3b7bbbfd1d41ef4362df8a79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf457e1a8e4813a3e2211f15ccf9cb2131ad51c3b7bbbfd1d41ef4362df8a79f->enter($__internal_bf457e1a8e4813a3e2211f15ccf9cb2131ad51c3b7bbbfd1d41ef4362df8a79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 16
        echo "    <div class=\"ui segment\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_change_password"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
        <h1 class=\"ui dividing header\">
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_password"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.set_a_new_password_for_your_account"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.change_password.after_content_header", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "currentPassword", array()), 'row');
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "newPassword", array()), "first", array()), 'row');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "newPassword", array()), "second", array()), 'row');
        echo "

        ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.change_password.form", array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()))));
        echo "

        <button type=\"submit\" class=\"ui large primary button\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_bf457e1a8e4813a3e2211f15ccf9cb2131ad51c3b7bbbfd1d41ef4362df8a79f->leave($__internal_bf457e1a8e4813a3e2211f15ccf9cb2131ad51c3b7bbbfd1d41ef4362df8a79f_prof);

        
        $__internal_c24fee3ea1998dee8bc1f2780f201717aa6c6a5334db42f2aeb36f44bc560120->leave($__internal_c24fee3ea1998dee8bc1f2780f201717aa6c6a5334db42f2aeb36f44bc560120_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  137 => 32,  133 => 31,  128 => 29,  123 => 27,  119 => 26,  115 => 25,  110 => 23,  104 => 20,  100 => 19,  95 => 17,  92 => 16,  83 => 15,  70 => 11,  63 => 9,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block breadcrumb %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> / </div>
        <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">{{ 'sylius.ui.change_password'|trans }}</div>
    </div>
{% endblock %}

{% block subcontent %}
    <div class=\"ui segment\">
        {{ form_start(form, {'action': path('sylius_shop_account_change_password'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.change_password'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.set_a_new_password_for_your_account'|trans }}</div>
        </h1>

        {{ sonata_block_render_event('sylius.shop.account.change_password.after_content_header', {'form': form}) }}

        {{ form_row(form.currentPassword) }}
        {{ form_row(form.newPassword.first) }}
        {{ form_row(form.newPassword.second) }}

        {{ sonata_block_render_event('sylius.shop.account.change_password.form', {'form': form}) }}

        <button type=\"submit\" class=\"ui large primary button\">{{ 'sylius.ui.save_changes'|trans }}</button>
        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Account:changePassword.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/changePassword.html.twig");
    }
}
