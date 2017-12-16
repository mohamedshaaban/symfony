<?php

/* SyliusAdminBundle:Crud:index.html.twig */
class __TwigTemplate_2ba4867dac7b9f5f33033598e5ad02fd9e2620f32f503f083b1859771376755e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37a4f72b85b6158a9bc7ffe4443044cd11d2ba410324856c8b06695a4df27ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a4f72b85b6158a9bc7ffe4443044cd11d2ba410324856c8b06695a4df27ac6->enter($__internal_37a4f72b85b6158a9bc7ffe4443044cd11d2ba410324856c8b06695a4df27ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:index.html.twig"));

        $__internal_3838283ccfc96951491abcceba10ea39c3042bf1a9c4ac330a04724ad9262bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3838283ccfc96951491abcceba10ea39c3042bf1a9c4ac330a04724ad9262bac->enter($__internal_3838283ccfc96951491abcceba10ea39c3042bf1a9c4ac330a04724ad9262bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:index.html.twig"));

        // line 3
        $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 3, $this->getSourceContext()); })()), "definition", array());
        // line 4
        $context["data"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->getSourceContext()); })()), "data", array());
        // line 5
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 5, $this->getSourceContext()); })()), "applicationName", array()) . ".admin.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 5, $this->getSourceContext()); })()), "name", array())) . ".index");
        // line 7
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37a4f72b85b6158a9bc7ffe4443044cd11d2ba410324856c8b06695a4df27ac6->leave($__internal_37a4f72b85b6158a9bc7ffe4443044cd11d2ba410324856c8b06695a4df27ac6_prof);

        
        $__internal_3838283ccfc96951491abcceba10ea39c3042bf1a9c4ac330a04724ad9262bac->leave($__internal_3838283ccfc96951491abcceba10ea39c3042bf1a9c4ac330a04724ad9262bac_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7723cb6c5b24c488a3a3410a830d1d5c23e1bab3defc33346748f86b052e68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7723cb6c5b24c488a3a3410a830d1d5c23e1bab3defc33346748f86b052e68a->enter($__internal_d7723cb6c5b24c488a3a3410a830d1d5c23e1bab3defc33346748f86b052e68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33466d19b8339af7e9739666a021f21ffa44b3c4f7c58f5abb53b714efed1ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33466d19b8339af7e9739666a021f21ffa44b3c4f7c58f5abb53b714efed1ea6->enter($__internal_33466d19b8339af7e9739666a021f21ffa44b3c4f7c58f5abb53b714efed1ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_33466d19b8339af7e9739666a021f21ffa44b3c4f7c58f5abb53b714efed1ea6->leave($__internal_33466d19b8339af7e9739666a021f21ffa44b3c4f7c58f5abb53b714efed1ea6_prof);

        
        $__internal_d7723cb6c5b24c488a3a3410a830d1d5c23e1bab3defc33346748f86b052e68a->leave($__internal_d7723cb6c5b24c488a3a3410a830d1d5c23e1bab3defc33346748f86b052e68a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_063ecb40c4567763388e4d87c174de475ad6ad28dfed309853eab5bdd03be3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063ecb40c4567763388e4d87c174de475ad6ad28dfed309853eab5bdd03be3fc->enter($__internal_063ecb40c4567763388e4d87c174de475ad6ad28dfed309853eab5bdd03be3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_37277e5129c8247e0100ce69872cf9a1a959f1a231a8132d3843c8d1bb3e4a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37277e5129c8247e0100ce69872cf9a1a959f1a231a8132d3843c8d1bb3e4a51->enter($__internal_37277e5129c8247e0100ce69872cf9a1a959f1a231a8132d3843c8d1bb3e4a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 12, $this->getSourceContext()); })()) . ".before_header"), array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 12, $this->getSourceContext()); })()))));
        echo "

";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_header.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 14)->display($context);
        // line 15
        echo "
";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 16, $this->getSourceContext()); })()) . ".after_header"), array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "

";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 18)->display($context);
        // line 19
        echo "
";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 20, $this->getSourceContext()); })()) . ".after_content"), array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_37277e5129c8247e0100ce69872cf9a1a959f1a231a8132d3843c8d1bb3e4a51->leave($__internal_37277e5129c8247e0100ce69872cf9a1a959f1a231a8132d3843c8d1bb3e4a51_prof);

        
        $__internal_063ecb40c4567763388e4d87c174de475ad6ad28dfed309853eab5bdd03be3fc->leave($__internal_063ecb40c4567763388e4d87c174de475ad6ad28dfed309853eab5bdd03be3fc_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec7fafffd89e804474902ddb20efc345f8b15430c0f4d2f254ba23db5f6dfd43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7fafffd89e804474902ddb20efc345f8b15430c0f4d2f254ba23db5f6dfd43->enter($__internal_ec7fafffd89e804474902ddb20efc345f8b15430c0f4d2f254ba23db5f6dfd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1fc071662df03581311e0b3f1587f7554eba4d7f78a56ff0cabba30014fb9aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc071662df03581311e0b3f1587f7554eba4d7f78a56ff0cabba30014fb9aef->enter($__internal_1fc071662df03581311e0b3f1587f7554eba4d7f78a56ff0cabba30014fb9aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 26, $this->getSourceContext()); })()) . ".stylesheets")));
        echo "
";
        
        $__internal_1fc071662df03581311e0b3f1587f7554eba4d7f78a56ff0cabba30014fb9aef->leave($__internal_1fc071662df03581311e0b3f1587f7554eba4d7f78a56ff0cabba30014fb9aef_prof);

        
        $__internal_ec7fafffd89e804474902ddb20efc345f8b15430c0f4d2f254ba23db5f6dfd43->leave($__internal_ec7fafffd89e804474902ddb20efc345f8b15430c0f4d2f254ba23db5f6dfd43_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aca300efdd017ff0a0fe8823d0c4818952825d0f11c76a5647f3ef04dfa89699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca300efdd017ff0a0fe8823d0c4818952825d0f11c76a5647f3ef04dfa89699->enter($__internal_aca300efdd017ff0a0fe8823d0c4818952825d0f11c76a5647f3ef04dfa89699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b63b553a110c2a0c457e74dea095386d2caef0a0b7a76dd846b86d9f58f96e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b63b553a110c2a0c457e74dea095386d2caef0a0b7a76dd846b86d9f58f96e6->enter($__internal_7b63b553a110c2a0c457e74dea095386d2caef0a0b7a76dd846b86d9f58f96e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 32
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 32, $this->getSourceContext()); })()) . ".javascripts")));
        echo "
";
        
        $__internal_7b63b553a110c2a0c457e74dea095386d2caef0a0b7a76dd846b86d9f58f96e6->leave($__internal_7b63b553a110c2a0c457e74dea095386d2caef0a0b7a76dd846b86d9f58f96e6_prof);

        
        $__internal_aca300efdd017ff0a0fe8823d0c4818952825d0f11c76a5647f3ef04dfa89699->leave($__internal_aca300efdd017ff0a0fe8823d0c4818952825d0f11c76a5647f3ef04dfa89699_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 32,  149 => 30,  140 => 29,  128 => 26,  122 => 24,  113 => 23,  101 => 20,  98 => 19,  96 => 18,  91 => 16,  88 => 15,  86 => 14,  81 => 12,  72 => 11,  52 => 9,  42 => 1,  40 => 7,  38 => 5,  36 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% set definition = resources.definition %}
{% set data = resources.data %}
{% set event_prefix = metadata.applicationName ~ '.admin.' ~ metadata.name ~ '.index' %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% block content %}
{{ sonata_block_render_event(event_prefix ~ '.before_header', {'resources': resources}) }}

{% include '@SyliusAdmin/Crud/Index/_header.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_header', {'resources': resources}) }}

{% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_content', {'resources': resources}) }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.stylesheets') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "SyliusAdminBundle:Crud:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/index.html.twig");
    }
}
