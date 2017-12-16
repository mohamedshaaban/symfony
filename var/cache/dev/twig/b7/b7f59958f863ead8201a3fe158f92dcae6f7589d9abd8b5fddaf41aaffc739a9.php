<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_66ec65e17d8121694ed034af7ca1b61f6c1afe886bd5a87d55fba213a0d400f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64f5fa0e1eafc84a63bd6182ee4e107eea66a794582a486dd5fd64b96efb1b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f5fa0e1eafc84a63bd6182ee4e107eea66a794582a486dd5fd64b96efb1b0e->enter($__internal_64f5fa0e1eafc84a63bd6182ee4e107eea66a794582a486dd5fd64b96efb1b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6ee2f22c5960fe2f83816e6a75e1b24fde02fb477b151c20fb047496a68bd9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee2f22c5960fe2f83816e6a75e1b24fde02fb477b151c20fb047496a68bd9a0->enter($__internal_6ee2f22c5960fe2f83816e6a75e1b24fde02fb477b151c20fb047496a68bd9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f5fa0e1eafc84a63bd6182ee4e107eea66a794582a486dd5fd64b96efb1b0e->leave($__internal_64f5fa0e1eafc84a63bd6182ee4e107eea66a794582a486dd5fd64b96efb1b0e_prof);

        
        $__internal_6ee2f22c5960fe2f83816e6a75e1b24fde02fb477b151c20fb047496a68bd9a0->leave($__internal_6ee2f22c5960fe2f83816e6a75e1b24fde02fb477b151c20fb047496a68bd9a0_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d44486201244b934ef74b9a8f72de847f5fde196db868277454774735a814da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44486201244b934ef74b9a8f72de847f5fde196db868277454774735a814da5->enter($__internal_d44486201244b934ef74b9a8f72de847f5fde196db868277454774735a814da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_02e3b6b07396ac2188cf2cf33e4b1e9bdeb733d8cb7933d510eb02c8669864a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e3b6b07396ac2188cf2cf33e4b1e9bdeb733d8cb7933d510eb02c8669864a0->enter($__internal_02e3b6b07396ac2188cf2cf33e4b1e9bdeb733d8cb7933d510eb02c8669864a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_02e3b6b07396ac2188cf2cf33e4b1e9bdeb733d8cb7933d510eb02c8669864a0->leave($__internal_02e3b6b07396ac2188cf2cf33e4b1e9bdeb733d8cb7933d510eb02c8669864a0_prof);

        
        $__internal_d44486201244b934ef74b9a8f72de847f5fde196db868277454774735a814da5->leave($__internal_d44486201244b934ef74b9a8f72de847f5fde196db868277454774735a814da5_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f14cdcf230a21d1066e35b03aefbe01bf4e76c6419742a873f859dd1e8b40f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f14cdcf230a21d1066e35b03aefbe01bf4e76c6419742a873f859dd1e8b40f1->enter($__internal_8f14cdcf230a21d1066e35b03aefbe01bf4e76c6419742a873f859dd1e8b40f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ede657a8637d54fed774f8325f0399b882411aef497e02c9cb11fc75d0e76022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede657a8637d54fed774f8325f0399b882411aef497e02c9cb11fc75d0e76022->enter($__internal_ede657a8637d54fed774f8325f0399b882411aef497e02c9cb11fc75d0e76022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ede657a8637d54fed774f8325f0399b882411aef497e02c9cb11fc75d0e76022->leave($__internal_ede657a8637d54fed774f8325f0399b882411aef497e02c9cb11fc75d0e76022_prof);

        
        $__internal_8f14cdcf230a21d1066e35b03aefbe01bf4e76c6419742a873f859dd1e8b40f1->leave($__internal_8f14cdcf230a21d1066e35b03aefbe01bf4e76c6419742a873f859dd1e8b40f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
