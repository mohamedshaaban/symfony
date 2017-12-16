<?php

/* SyliusShopBundle:Common/Form:_login.html.twig */
class __TwigTemplate_3a61d7ff7b53a20cd43f6cd686ee9b9e0a7c031825f04230e63bb07c7d7e7355 extends Twig_Template
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
        $__internal_b77931fde35838b09263ec6e9b7b3fea62c9b52ca61d24a4272899d625f72611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77931fde35838b09263ec6e9b7b3fea62c9b52ca61d24a4272899d625f72611->enter($__internal_b77931fde35838b09263ec6e9b7b3fea62c9b52ca61d24a4272899d625f72611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_login.html.twig"));

        $__internal_6ad77cf5982ed568af3ec9b85c51d03406b14ec8d3f6846a6887e45b5b591f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad77cf5982ed568af3ec9b85c51d03406b14ec8d3f6846a6887e45b5b591f48->enter($__internal_6ad77cf5982ed568af3ec9b85c51d03406b14ec8d3f6846a6887e45b5b591f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_login.html.twig"));

        // line 1
        echo "<div class=\"one field\" id=\"sylius-api-login\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_ajax_user_check_action"))));
        echo "

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.password"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("shop_authenticate"), "html", null, true);
        echo "\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" data-url=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login_check");
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sign_in"), "html", null, true);
        echo "
        </a>
    </div>
    <div class=\"ui red fluid top pointing basic label hidden sylius-validation-error\" id=\"sylius-api-validation-error\">
    </div>
</div>
";
        
        $__internal_b77931fde35838b09263ec6e9b7b3fea62c9b52ca61d24a4272899d625f72611->leave($__internal_b77931fde35838b09263ec6e9b7b3fea62c9b52ca61d24a4272899d625f72611_prof);

        
        $__internal_6ad77cf5982ed568af3ec9b85c51d03406b14ec8d3f6846a6887e45b5b591f48->leave($__internal_6ad77cf5982ed568af3ec9b85c51d03406b14ec8d3f6846a6887e45b5b591f48_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Form:_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  42 => 7,  38 => 6,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"one field\" id=\"sylius-api-login\">
    {{ form_errors(form.email) }}
    {{ form_row(form.email, {'attr': {'data-url': path('sylius_shop_ajax_user_check_action')}}) }}

    <div class=\"ui action input\" id=\"sylius-api-login-form\">
        <input type=\"password\" placeholder=\"{{ 'sylius.ui.password'|trans }}\">
        <input type=\"hidden\" name=\"_csrf_shop_security_token\" value=\"{{ csrf_token('shop_authenticate') }}\">
        <a class=\"ui blue button\" href=\"#\" id=\"sylius-api-login-submit\" data-url=\"{{ path('sylius_shop_login_check') }}\">
            {{ 'sylius.ui.sign_in'|trans }}
        </a>
    </div>
    <div class=\"ui red fluid top pointing basic label hidden sylius-validation-error\" id=\"sylius-api-validation-error\">
    </div>
</div>
", "SyliusShopBundle:Common/Form:_login.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Form/_login.html.twig");
    }
}
