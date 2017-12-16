<?php

/* SyliusAdminBundle:Crud/Index:_headerTitle.html.twig */
class __TwigTemplate_3b275b7339762fecdcafb59a012b14e82b80b477f8e7acdce160dee28c68aaa3 extends Twig_Template
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
        $__internal_b982f9d1b54723d7ad14315fe8d91059572e9c34fdfc23df369e584b481e6c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b982f9d1b54723d7ad14315fe8d91059572e9c34fdfc23df369e584b481e6c14->enter($__internal_b982f9d1b54723d7ad14315fe8d91059572e9c34fdfc23df369e584b481e6c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig"));

        $__internal_d0f80051cd8b7160e64dc52047291888f11a98178165dd200e32d4b2484891f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f80051cd8b7160e64dc52047291888f11a98178165dd200e32d4b2484891f5->enter($__internal_d0f80051cd8b7160e64dc52047291888f11a98178165dd200e32d4b2484891f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })())), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "list")) : ("list")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null))));
        echo "
";
        
        $__internal_b982f9d1b54723d7ad14315fe8d91059572e9c34fdfc23df369e584b481e6c14->leave($__internal_b982f9d1b54723d7ad14315fe8d91059572e9c34fdfc23df369e584b481e6c14_prof);

        
        $__internal_d0f80051cd8b7160e64dc52047291888f11a98178165dd200e32d4b2484891f5->leave($__internal_d0f80051cd8b7160e64dc52047291888f11a98178165dd200e32d4b2484891f5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/headers.html.twig' as headers %}

{{ headers.default(header|trans, configuration.vars.icon|default('list'), configuration.vars.subheader|default(null)|trans) }}
", "SyliusAdminBundle:Crud/Index:_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Index/_headerTitle.html.twig");
    }
}
