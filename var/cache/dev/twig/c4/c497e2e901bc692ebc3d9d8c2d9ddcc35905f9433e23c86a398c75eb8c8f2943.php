<?php

/* SyliusAdminBundle:Customer:_form.html.twig */
class __TwigTemplate_c2a865311087b116a87876cdd7433829513321ed4f495ecd1834caa86a23875e extends Twig_Template
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
        $__internal_b79851b07d4782fb25680f5f4d01c449d0ccbec3aebebe3d8304e2e3296f2ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79851b07d4782fb25680f5f4d01c449d0ccbec3aebebe3d8304e2e3296f2ffa->enter($__internal_b79851b07d4782fb25680f5f4d01c449d0ccbec3aebebe3d8304e2e3296f2ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:_form.html.twig"));

        $__internal_06119a399eaa1c5237b7cb3a80d8c5aea8d977850eabc83ca7f0672eeb22433c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06119a399eaa1c5237b7cb3a80d8c5aea8d977850eabc83ca7f0672eeb22433c->enter($__internal_06119a399eaa1c5237b7cb3a80d8c5aea8d977850eabc83ca7f0672eeb22433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:_form.html.twig"));

        // line 1
        echo "<div class=\"ui two column stackable grid\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'errors');
        echo "
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_details"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "firstName", array()), 'row');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "lastName", array()), 'row');
        echo "
            </div>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "group", array()), 'row');
        echo "
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.extra_information"), "html", null, true);
        echo "</h4>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "gender", array()), 'row');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "birthday", array()), 'row');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "phoneNumber", array()), 'row');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "subscribedToNewsletter", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.account_credentials"), "html", null, true);
        echo "</h4>
            ";
        // line 24
        if ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 24, $this->getSourceContext()); })()), "user", array())) || (null === twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 24, $this->getSourceContext()); })()), "user", array()), "id", array())))) {
            // line 25
            echo "                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">
                       ";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "createUser", array()), 'row');
            echo "
                    </div>
                </div>
            ";
        }
        // line 31
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "user", array(), "any", true, true)) {
            // line 32
            echo "                <div id=\"user-form\" ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "user", array(), "any", false, true), "vars", array(), "any", false, true), "data", array(), "any", false, true), "id", array(), "any", true, true)) {
                echo " style=\"display: none\" ";
            }
            echo ">
                    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "user", array()), "plainPassword", array()), 'row');
            echo "
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "user", array()), "enabled", array()), 'row');
            echo "
                </div>
            ";
        }
        // line 37
        echo "        </div>
    </div>
</div>
";
        
        $__internal_b79851b07d4782fb25680f5f4d01c449d0ccbec3aebebe3d8304e2e3296f2ffa->leave($__internal_b79851b07d4782fb25680f5f4d01c449d0ccbec3aebebe3d8304e2e3296f2ffa_prof);

        
        $__internal_06119a399eaa1c5237b7cb3a80d8c5aea8d977850eabc83ca7f0672eeb22433c->leave($__internal_06119a399eaa1c5237b7cb3a80d8c5aea8d977850eabc83ca7f0672eeb22433c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  113 => 34,  109 => 33,  102 => 32,  99 => 31,  92 => 27,  88 => 25,  86 => 24,  82 => 23,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  52 => 11,  48 => 10,  43 => 8,  39 => 7,  34 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui two column stackable grid\">
    {{ form_errors(form) }}
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.customer_details'|trans }}</h4>
            <div class=\"two fields\">
                {{ form_row(form.firstName) }}
                {{ form_row(form.lastName) }}
            </div>
            {{ form_row(form.email) }}
            {{ form_row(form.group) }}
        </div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.extra_information'|trans }}</h4>
            {{ form_row(form.gender) }}
            {{ form_row(form.birthday) }}
            {{ form_row(form.phoneNumber) }}
            {{ form_row(form.subscribedToNewsletter) }}
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.account_credentials'|trans }}</h4>
            {% if customer.user is empty or customer.user.id is null %}
                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">
                       {{ form_row(form.createUser) }}
                    </div>
                </div>
            {% endif %}
            {% if form.user is defined %}
                <div id=\"user-form\" {% if form.user.vars.data.id is not defined %} style=\"display: none\" {% endif %}>
                    {{ form_row(form.user.plainPassword) }}
                    {{ form_row(form.user.enabled) }}
                </div>
            {% endif %}
        </div>
    </div>
</div>
", "SyliusAdminBundle:Customer:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/_form.html.twig");
    }
}
