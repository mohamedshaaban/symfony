<?php

/* SyliusUiBundle:Grid/Action:default.html.twig */
class __TwigTemplate_e7314711e88d20407644af2f6a7217001f7e82df90739c4f27edab165d93e182 extends Twig_Template
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
        $__internal_1682381133339f6f8e8c1bf019ace60b06942fb966d154b1661add48e3d33375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1682381133339f6f8e8c1bf019ace60b06942fb966d154b1661add48e3d33375->enter($__internal_1682381133339f6f8e8c1bf019ace60b06942fb966d154b1661add48e3d33375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:default.html.twig"));

        $__internal_575ff216d90b43cfb4b0bbc81df4529d2d5c438de93fd0b4fa7fd1e3315389b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575ff216d90b43cfb4b0bbc81df4529d2d5c438de93fd0b4fa7fd1e3315389b9->enter($__internal_575ff216d90b43cfb4b0bbc81df4529d2d5c438de93fd0b4fa7fd1e3315389b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:default.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Grid/Action:default.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["path"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "url", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["options"] ?? null), "link", array(), "any", false, true), "url", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), "link", array()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), "link", array()), "parameters", array())))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), "link", array()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 3, $this->getSourceContext()); })()), "link", array()), "parameters", array()))));
        // line 4
        echo "
";
        // line 5
        echo $context["buttons"]->macro_default((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 5, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), null, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 5, $this->getSourceContext()); })()), "icon", array()));
        echo "
";
        
        $__internal_1682381133339f6f8e8c1bf019ace60b06942fb966d154b1661add48e3d33375->leave($__internal_1682381133339f6f8e8c1bf019ace60b06942fb966d154b1661add48e3d33375_prof);

        
        $__internal_575ff216d90b43cfb4b0bbc81df4529d2d5c438de93fd0b4fa7fd1e3315389b9->leave($__internal_575ff216d90b43cfb4b0bbc81df4529d2d5c438de93fd0b4fa7fd1e3315389b9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% set path = options.link.url|default(path(options.link.route, options.link.parameters)) %}

{{ buttons.default(path, action.label, null, action.icon) }}
", "SyliusUiBundle:Grid/Action:default.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Action/default.html.twig");
    }
}
