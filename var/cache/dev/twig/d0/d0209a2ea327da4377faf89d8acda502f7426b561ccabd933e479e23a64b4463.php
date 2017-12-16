<?php

/* SyliusUiBundle:Grid/Action:applyTransition.html.twig */
class __TwigTemplate_45a8def5a0590a07050cb4b5691dcb72774849a93b8b5837e3e999edc8e8f440 extends Twig_Template
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
        $__internal_0670b68031767eb2990ed286e160e8b5ba2e3b72e7db95ffc8438ee080ef3a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0670b68031767eb2990ed286e160e8b5ba2e3b72e7db95ffc8438ee080ef3a71->enter($__internal_0670b68031767eb2990ed286e160e8b5ba2e3b72e7db95ffc8438ee080ef3a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:applyTransition.html.twig"));

        $__internal_e6b562b83e1e44feb981f515478d0645cd16d49412efac47ea9dd5ce18eff016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b562b83e1e44feb981f515478d0645cd16d49412efac47ea9dd5ce18eff016->enter($__internal_e6b562b83e1e44feb981f515478d0645cd16d49412efac47ea9dd5ce18eff016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Action:applyTransition.html.twig"));

        // line 1
        if ($this->env->getExtension('SM\Extension\Twig\SMExtension')->can((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "transition", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "graph", array()))) {
            // line 2
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 2, $this->getSourceContext()); })()), "link", array()), "route", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 2, $this->getSourceContext()); })()), "link", array()), "parameters", array())), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui loadable ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 4, $this->getSourceContext()); })()), "class", array()), "html", null, true);
            echo " labeled icon button\" type=\"submit\"><i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 4, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
            echo " icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 4, $this->getSourceContext()); })()), "label", array())), "html", null, true);
            echo "</button>
    </form>
";
        }
        
        $__internal_0670b68031767eb2990ed286e160e8b5ba2e3b72e7db95ffc8438ee080ef3a71->leave($__internal_0670b68031767eb2990ed286e160e8b5ba2e3b72e7db95ffc8438ee080ef3a71_prof);

        
        $__internal_e6b562b83e1e44feb981f515478d0645cd16d49412efac47ea9dd5ce18eff016->leave($__internal_e6b562b83e1e44feb981f515478d0645cd16d49412efac47ea9dd5ce18eff016_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Action:applyTransition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sm_can(data, options.transition, options.graph) %}
    <form action=\"{{ path(options.link.route, options.link.parameters) }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui loadable {{ options.class }} labeled icon button\" type=\"submit\"><i class=\"{{ action.icon }} icon\"></i> {{ action.label|trans }}</button>
    </form>
{% endif %}
", "SyliusUiBundle:Grid/Action:applyTransition.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Action/applyTransition.html.twig");
    }
}
