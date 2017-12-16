<?php

/* @SyliusAdmin/Crud/Update/_headerTitle.html.twig */
class __TwigTemplate_79fea4f4fbfcd7da2b8d7e5b3c2b2013f24532b59fc19ec0bc2fcce4a8a758ca extends Twig_Template
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
        $__internal_7c7525dcd7ed95b9703a165a144ce9188acacf15a0644b8315b44e9a22fb534e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7525dcd7ed95b9703a165a144ce9188acacf15a0644b8315b44e9a22fb534e->enter($__internal_7c7525dcd7ed95b9703a165a144ce9188acacf15a0644b8315b44e9a22fb534e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Update/_headerTitle.html.twig"));

        $__internal_88c3bf0beb6b0ad53d9d8d11515c14c34db301191ac6c6b3554497da6f8aff75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c3bf0beb6b0ad53d9d8d11515c14c34db301191ac6c6b3554497da6f8aff75->enter($__internal_88c3bf0beb6b0ad53d9d8d11515c14c34db301191ac6c6b3554497da6f8aff75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Update/_headerTitle.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "@SyliusAdmin/Crud/Update/_headerTitle.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })())), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "pencil")) : ("pencil")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null))));
        echo "
";
        
        $__internal_7c7525dcd7ed95b9703a165a144ce9188acacf15a0644b8315b44e9a22fb534e->leave($__internal_7c7525dcd7ed95b9703a165a144ce9188acacf15a0644b8315b44e9a22fb534e_prof);

        
        $__internal_88c3bf0beb6b0ad53d9d8d11515c14c34db301191ac6c6b3554497da6f8aff75->leave($__internal_88c3bf0beb6b0ad53d9d8d11515c14c34db301191ac6c6b3554497da6f8aff75_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Update/_headerTitle.html.twig";
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

{{ headers.default(header|trans, configuration.vars.icon|default('pencil'), configuration.vars.subheader|default(null)|trans) }}
", "@SyliusAdmin/Crud/Update/_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Update\\_headerTitle.html.twig");
    }
}
