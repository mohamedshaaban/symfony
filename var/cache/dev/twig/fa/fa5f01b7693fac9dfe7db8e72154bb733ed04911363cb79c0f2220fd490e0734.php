<?php

/* @SyliusShop/Login/_form.html.twig */
class __TwigTemplate_39a5580111e1c29fdf8b0ed69dec168f53859823c76c0a0e1c3a3ad2ce3d8155 extends Twig_Template
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
        $__internal_02869ecfe66e0e11df29a13964db03720b328adce2ba2d05b468e135317f8c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02869ecfe66e0e11df29a13964db03720b328adce2ba2d05b468e135317f8c77->enter($__internal_02869ecfe66e0e11df29a13964db03720b328adce2ba2d05b468e135317f8c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_form.html.twig"));

        $__internal_4c7d7922cecda6a6a356684d1cdc6db8fe57e391d07d3228fa64d1e065fd9db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7d7922cecda6a6a356684d1cdc6db8fe57e391d07d3228fa64d1e065fd9db4->enter($__internal_4c7d7922cecda6a6a356684d1cdc6db8fe57e391d07d3228fa64d1e065fd9db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_form.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Login/_form.html.twig", 1);
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
        
        $__internal_02869ecfe66e0e11df29a13964db03720b328adce2ba2d05b468e135317f8c77->leave($__internal_02869ecfe66e0e11df29a13964db03720b328adce2ba2d05b468e135317f8c77_prof);

        
        $__internal_4c7d7922cecda6a6a356684d1cdc6db8fe57e391d07d3228fa64d1e065fd9db4->leave($__internal_4c7d7922cecda6a6a356684d1cdc6db8fe57e391d07d3228fa64d1e065fd9db4_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_form.html.twig";
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
", "@SyliusShop/Login/_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Login\\_form.html.twig");
    }
}
