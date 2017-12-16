<?php

/* SyliusShopBundle:Register:_form.html.twig */
class __TwigTemplate_9aa878f795844c88098c1fda7165fe713ac7063ae9c1cfffae016fa254aa9da2 extends Twig_Template
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
        $__internal_63ccf465b57fa89c0574f6ef826baa4166ff5d31cc8fe7617d84cfbdb89f04a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ccf465b57fa89c0574f6ef826baa4166ff5d31cc8fe7617d84cfbdb89f04a2->enter($__internal_63ccf465b57fa89c0574f6ef826baa4166ff5d31cc8fe7617d84cfbdb89f04a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Register:_form.html.twig"));

        $__internal_c7fb26605135e9db58ee8db92dc1b37801258547fade76cb2706b0bc1314a559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fb26605135e9db58ee8db92dc1b37801258547fade76cb2706b0bc1314a559->enter($__internal_c7fb26605135e9db58ee8db92dc1b37801258547fade76cb2706b0bc1314a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Register:_form.html.twig"));

        // line 1
        echo "<h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.personal_information"), "html", null, true);
        echo "</h4>
<div class=\"two fields\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "firstName", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "lastName", array()), 'row');
        echo "
</div>
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "email", array()), 'row');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "phoneNumber", array()), 'row');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "subscribedToNewsletter", array()), 'row');
        echo "
<h4 class=\"ui dividing header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.account_credentials"), "html", null, true);
        echo "</h4>
";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "user", array()), "plainPassword", array()), "first", array()), 'row');
        echo "
";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "user", array()), "plainPassword", array()), "second", array()), 'row');
        echo "
";
        
        $__internal_63ccf465b57fa89c0574f6ef826baa4166ff5d31cc8fe7617d84cfbdb89f04a2->leave($__internal_63ccf465b57fa89c0574f6ef826baa4166ff5d31cc8fe7617d84cfbdb89f04a2_prof);

        
        $__internal_c7fb26605135e9db58ee8db92dc1b37801258547fade76cb2706b0bc1314a559->leave($__internal_c7fb26605135e9db58ee8db92dc1b37801258547fade76cb2706b0bc1314a559_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Register:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  35 => 4,  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui dividing header\">{{ 'sylius.ui.personal_information'|trans }}</h4>
<div class=\"two fields\">
    {{ form_row(form.firstName) }}
    {{ form_row(form.lastName) }}
</div>
{{ form_row(form.email) }}
{{ form_row(form.phoneNumber) }}
{{ form_row(form.subscribedToNewsletter) }}
<h4 class=\"ui dividing header\">{{ 'sylius.ui.account_credentials'|trans }}</h4>
{{ form_row(form.user.plainPassword.first) }}
{{ form_row(form.user.plainPassword.second) }}
", "SyliusShopBundle:Register:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Register/_form.html.twig");
    }
}
