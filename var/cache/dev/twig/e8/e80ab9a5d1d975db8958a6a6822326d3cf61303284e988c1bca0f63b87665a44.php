<?php

/* SyliusShopBundle:Account:dashboard.html.twig */
class __TwigTemplate_0e2d710ddea11ebe5271ac3f76940f536e25e0135cbfbb9ce0637e1dde898d00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:dashboard.html.twig", 1);
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
        $__internal_7831b1b45edf601270cea480d1167f17d2c5982dc1789e7df876ee3ce643ac6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7831b1b45edf601270cea480d1167f17d2c5982dc1789e7df876ee3ce643ac6e->enter($__internal_7831b1b45edf601270cea480d1167f17d2c5982dc1789e7df876ee3ce643ac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:dashboard.html.twig"));

        $__internal_6de3c493acc0422745fc132a00c39a01b2236b81e59c38673833cbb9e8b72fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de3c493acc0422745fc132a00c39a01b2236b81e59c38673833cbb9e8b72fd0->enter($__internal_6de3c493acc0422745fc132a00c39a01b2236b81e59c38673833cbb9e8b72fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7831b1b45edf601270cea480d1167f17d2c5982dc1789e7df876ee3ce643ac6e->leave($__internal_7831b1b45edf601270cea480d1167f17d2c5982dc1789e7df876ee3ce643ac6e_prof);

        
        $__internal_6de3c493acc0422745fc132a00c39a01b2236b81e59c38673833cbb9e8b72fd0->leave($__internal_6de3c493acc0422745fc132a00c39a01b2236b81e59c38673833cbb9e8b72fd0_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4e71360b0f7b31e18b940d2eb84b931ec4a0bcbe858615b36c5431d3263b9708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e71360b0f7b31e18b940d2eb84b931ec4a0bcbe858615b36c5431d3263b9708->enter($__internal_4e71360b0f7b31e18b940d2eb84b931ec4a0bcbe858615b36c5431d3263b9708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_4b0647bb86d3ec5899dcd3f6493eac4ceabea823d72f2f5a97588a2178c42cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0647bb86d3ec5899dcd3f6493eac4ceabea823d72f2f5a97588a2178c42cc1->enter($__internal_4b0647bb86d3ec5899dcd3f6493eac4ceabea823d72f2f5a97588a2178c42cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_4b0647bb86d3ec5899dcd3f6493eac4ceabea823d72f2f5a97588a2178c42cc1->leave($__internal_4b0647bb86d3ec5899dcd3f6493eac4ceabea823d72f2f5a97588a2178c42cc1_prof);

        
        $__internal_4e71360b0f7b31e18b940d2eb84b931ec4a0bcbe858615b36c5431d3263b9708->leave($__internal_4e71360b0f7b31e18b940d2eb84b931ec4a0bcbe858615b36c5431d3263b9708_prof);

    }

    // line 11
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_f452786a0d37c3e947e266dd4608934c3d68a84374b65d51e29ab2ca1f523496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f452786a0d37c3e947e266dd4608934c3d68a84374b65d51e29ab2ca1f523496->enter($__internal_f452786a0d37c3e947e266dd4608934c3d68a84374b65d51e29ab2ca1f523496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_caefa0c74da2ba6966df3577601579a7fbf144ed46dd18e3931c3dcb88e3b9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caefa0c74da2ba6966df3577601579a7fbf144ed46dd18e3931c3dcb88e3b9d4->enter($__internal_caefa0c74da2ba6966df3577601579a7fbf144ed46dd18e3931c3dcb88e3b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 12
        echo "    <h1 class=\"ui dividing header\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.manage_your_personal_information_and_preferences"), "html", null, true);
        echo "</div>
    </h1>

    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.dashboard.after_content_header", array("customer" => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 17, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui large list\" id=\"customer-information\">
        <div class=\"item\">
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 21, $this->getSourceContext()); })()), "fullName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"item\">
            <strong>
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 25, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "
            </strong>
        </div>
        <div class=\"item\">
            ";
        // line 29
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 29, $this->getSourceContext()); })()), "user", array()), "verified", array())) {
            // line 30
            echo "                <span class=\"ui icon green basic label\"><i class=\"checkmark icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.verified"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 32
            echo "                <span class=\"ui icon red basic label\"><i class=\"remove icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.not_verified"), "html", null, true);
            echo "</span>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    ";
        // line 37
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.dashboard.after_information", array("customer" => (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 37, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui text menu\">
        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_profile_update");
        echo "\" class=\"item\"><i class=\"pencil icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_change_password");
        echo "\" class=\"item\"><i class=\"lock icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_password"), "html", null, true);
        echo "</a>
        ";
        // line 42
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 42, $this->getSourceContext()); })()), "user", array()), "verified", array())) {
            // line 43
            echo "            <form class=\"item\" id=\"verification-form\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_user_request_verification_token");
            echo "\" method=\"post\">
                <button type=\"submit\" class=\"ui basic icon mini button\">
                    <i class=\"checkmark icon\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.verify"), "html", null, true);
            echo "
                </button>
            </form>
        ";
        }
        // line 49
        echo "    </div>
";
        
        $__internal_caefa0c74da2ba6966df3577601579a7fbf144ed46dd18e3931c3dcb88e3b9d4->leave($__internal_caefa0c74da2ba6966df3577601579a7fbf144ed46dd18e3931c3dcb88e3b9d4_prof);

        
        $__internal_f452786a0d37c3e947e266dd4608934c3d68a84374b65d51e29ab2ca1f523496->leave($__internal_f452786a0d37c3e947e266dd4608934c3d68a84374b65d51e29ab2ca1f523496_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 49,  161 => 45,  155 => 43,  153 => 42,  147 => 41,  141 => 40,  135 => 37,  130 => 34,  124 => 32,  118 => 30,  116 => 29,  109 => 25,  102 => 21,  95 => 17,  89 => 14,  85 => 13,  82 => 12,  73 => 11,  60 => 7,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% block breadcrumb %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">{{ 'sylius.ui.my_account'|trans }}</div>
    </div>
{% endblock %}

{% block subcontent %}
    <h1 class=\"ui dividing header\">
        {{ 'sylius.ui.my_account'|trans }}
        <div class=\"sub header\">{{ 'sylius.ui.manage_your_personal_information_and_preferences'|trans }}</div>
    </h1>

    {{ sonata_block_render_event('sylius.shop.account.dashboard.after_content_header', {'customer': customer}) }}

    <div class=\"ui large list\" id=\"customer-information\">
        <div class=\"item\">
            {{ customer.fullName }}
        </div>
        <div class=\"item\">
            <strong>
                {{ customer.email }}
            </strong>
        </div>
        <div class=\"item\">
            {% if customer.user.verified %}
                <span class=\"ui icon green basic label\"><i class=\"checkmark icon\"></i> {{ 'sylius.ui.verified'|trans }}</span>
            {% else %}
                <span class=\"ui icon red basic label\"><i class=\"remove icon\"></i> {{ 'sylius.ui.not_verified'|trans }}</span>
            {% endif %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.shop.account.dashboard.after_information', {'customer': customer}) }}

    <div class=\"ui text menu\">
        <a href=\"{{ path('sylius_shop_account_profile_update') }}\" class=\"item\"><i class=\"pencil icon\"></i> {{ 'sylius.ui.edit'|trans }}</a>
        <a href=\"{{ path('sylius_shop_account_change_password') }}\" class=\"item\"><i class=\"lock icon\"></i> {{ 'sylius.ui.change_password'|trans }}</a>
        {% if not customer.user.verified %}
            <form class=\"item\" id=\"verification-form\" action=\"{{ path('sylius_shop_user_request_verification_token') }}\" method=\"post\">
                <button type=\"submit\" class=\"ui basic icon mini button\">
                    <i class=\"checkmark icon\"></i> {{ 'sylius.ui.verify'|trans }}
                </button>
            </form>
        {% endif %}
    </div>
{% endblock %}
", "SyliusShopBundle:Account:dashboard.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/dashboard.html.twig");
    }
}
