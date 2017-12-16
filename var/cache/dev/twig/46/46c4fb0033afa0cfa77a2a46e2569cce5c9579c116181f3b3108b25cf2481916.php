<?php

/* SyliusAdminBundle:Crud/Create:_headerTitle.html.twig */
class __TwigTemplate_b1215bfd28f6e74d4decf399e0f07df8b8e3b5ee4a3914fe69cf1520663ff11d extends Twig_Template
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
        $__internal_ba7a74e38e7dd6e505432ede7885a99f944058ee23b29de4f67aeab9b43a82b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7a74e38e7dd6e505432ede7885a99f944058ee23b29de4f67aeab9b43a82b3->enter($__internal_ba7a74e38e7dd6e505432ede7885a99f944058ee23b29de4f67aeab9b43a82b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig"));

        $__internal_640011559d322194407e57b7c81fcc65373368a0f072173f6e8a3d92d49825cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640011559d322194407e57b7c81fcc65373368a0f072173f6e8a3d92d49825cd->enter($__internal_640011559d322194407e57b7c81fcc65373368a0f072173f6e8a3d92d49825cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })())), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "plus")) : ("plus")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null))));
        echo "
";
        
        $__internal_ba7a74e38e7dd6e505432ede7885a99f944058ee23b29de4f67aeab9b43a82b3->leave($__internal_ba7a74e38e7dd6e505432ede7885a99f944058ee23b29de4f67aeab9b43a82b3_prof);

        
        $__internal_640011559d322194407e57b7c81fcc65373368a0f072173f6e8a3d92d49825cd->leave($__internal_640011559d322194407e57b7c81fcc65373368a0f072173f6e8a3d92d49825cd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig";
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

{{ headers.default(header|trans, configuration.vars.icon|default('plus'), configuration.vars.subheader|default(null)|trans) }}
", "SyliusAdminBundle:Crud/Create:_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Create/_headerTitle.html.twig");
    }
}
