<?php

/* @SyliusAdmin/Crud/Create/_headerTitle.html.twig */
class __TwigTemplate_ff23bdab5a5779d9036936a9395858b3692c38a4968281fd46f359fdf7667bdb extends Twig_Template
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
        $__internal_469b4d84abdf3a1d35b2da7bf4ae541b5e7cc4dfb20e3f7a0cddcc0047550e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469b4d84abdf3a1d35b2da7bf4ae541b5e7cc4dfb20e3f7a0cddcc0047550e5f->enter($__internal_469b4d84abdf3a1d35b2da7bf4ae541b5e7cc4dfb20e3f7a0cddcc0047550e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Create/_headerTitle.html.twig"));

        $__internal_13ab23a610401dca56ebb0e8f744f41d0a2a960522a9e6f543fe8be8a189c0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ab23a610401dca56ebb0e8f744f41d0a2a960522a9e6f543fe8be8a189c0af->enter($__internal_13ab23a610401dca56ebb0e8f744f41d0a2a960522a9e6f543fe8be8a189c0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Create/_headerTitle.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "@SyliusAdmin/Crud/Create/_headerTitle.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })())), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "plus")) : ("plus")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null))));
        echo "
";
        
        $__internal_469b4d84abdf3a1d35b2da7bf4ae541b5e7cc4dfb20e3f7a0cddcc0047550e5f->leave($__internal_469b4d84abdf3a1d35b2da7bf4ae541b5e7cc4dfb20e3f7a0cddcc0047550e5f_prof);

        
        $__internal_13ab23a610401dca56ebb0e8f744f41d0a2a960522a9e6f543fe8be8a189c0af->leave($__internal_13ab23a610401dca56ebb0e8f744f41d0a2a960522a9e6f543fe8be8a189c0af_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Create/_headerTitle.html.twig";
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
", "@SyliusAdmin/Crud/Create/_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Create\\_headerTitle.html.twig");
    }
}
