<?php

/* SyliusAdminBundle:Crud/Update:_headerTitle.html.twig */
class __TwigTemplate_24cccc0278808c407d7ce920ec0b1b3a42df43a831529104a4445c4188c6ad18 extends Twig_Template
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
        $__internal_51496e3154ff05f6b64ffce466b8b3f56fb36c0ac3807debeb80662a2de2682a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51496e3154ff05f6b64ffce466b8b3f56fb36c0ac3807debeb80662a2de2682a->enter($__internal_51496e3154ff05f6b64ffce466b8b3f56fb36c0ac3807debeb80662a2de2682a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig"));

        $__internal_68e835c06097053d03e8717936c9876df051210af2ec8ad313f7da37f0e6d580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e835c06097053d03e8717936c9876df051210af2ec8ad313f7da37f0e6d580->enter($__internal_68e835c06097053d03e8717936c9876df051210af2ec8ad313f7da37f0e6d580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })())), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "pencil")) : ("pencil")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null))));
        echo "
";
        
        $__internal_51496e3154ff05f6b64ffce466b8b3f56fb36c0ac3807debeb80662a2de2682a->leave($__internal_51496e3154ff05f6b64ffce466b8b3f56fb36c0ac3807debeb80662a2de2682a_prof);

        
        $__internal_68e835c06097053d03e8717936c9876df051210af2ec8ad313f7da37f0e6d580->leave($__internal_68e835c06097053d03e8717936c9876df051210af2ec8ad313f7da37f0e6d580_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig";
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
", "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Update/_headerTitle.html.twig");
    }
}
