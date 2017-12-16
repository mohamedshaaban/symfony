<?php

/* SyliusShopBundle:Login:_form.html.twig */
class __TwigTemplate_3d22738322f4bffa8aa0523ddefe777f74d6ce9dd06c89db583c992b037125d7 extends Twig_Template
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
        $__internal_beb8d9998527c04ba807e12a1f48f92611609bc9faa7709281630a72f28cb25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb8d9998527c04ba807e12a1f48f92611609bc9faa7709281630a72f28cb25e->enter($__internal_beb8d9998527c04ba807e12a1f48f92611609bc9faa7709281630a72f28cb25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_form.html.twig"));

        $__internal_2b57449917a51b26993e5089b89f994182f4ddf1040ddb0a24c730948cb76b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b57449917a51b26993e5089b89f994182f4ddf1040ddb0a24c730948cb76b6d->enter($__internal_2b57449917a51b26993e5089b89f994182f4ddf1040ddb0a24c730948cb76b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_form.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Login:_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    ";
            echo $context["messages"]->macro_error($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 4, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new Twig_Error_Runtime('Variable "last_error" does not exist.', 4, $this->getSourceContext()); })()), "messageData", array()), "security"));
            echo "
";
        }
        // line 6
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "_username", array()), 'row');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "_password", array()), 'row');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "_remember_me", array()), 'row');
        echo "
";
        
        $__internal_beb8d9998527c04ba807e12a1f48f92611609bc9faa7709281630a72f28cb25e->leave($__internal_beb8d9998527c04ba807e12a1f48f92611609bc9faa7709281630a72f28cb25e_prof);

        
        $__internal_2b57449917a51b26993e5089b89f994182f4ddf1040ddb0a24c730948cb76b6d->leave($__internal_2b57449917a51b26993e5089b89f994182f4ddf1040ddb0a24c730948cb76b6d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Login:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  45 => 8,  41 => 7,  38 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% if last_error %}
    {{ messages.error(last_error.messageKey|trans(last_error.messageData, 'security')) }}
{% endif %}

{{ form_row(form._username) }}
{{ form_row(form._password) }}
{{ form_row(form._remember_me) }}
", "SyliusShopBundle:Login:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Login/_form.html.twig");
    }
}
