<?php

/* @SyliusAdmin/Crud/Update/_content.html.twig */
class __TwigTemplate_5a32f2d5b3e8bccd969ba47c3132a2947a3c3a86adb3034fcad162dbd58fad56 extends Twig_Template
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
        $__internal_bfa28fd27e85d4e089b8f994c1b139fb57922af390bbe4fa654818faff1cf573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa28fd27e85d4e089b8f994c1b139fb57922af390bbe4fa654818faff1cf573->enter($__internal_bfa28fd27e85d4e089b8f994c1b139fb57922af390bbe4fa654818faff1cf573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Update/_content.html.twig"));

        $__internal_e92f3eec56a4e8f6efbad0fc44d859ff8a0382c924c6d3e167501cdbe1476cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92f3eec56a4e8f6efbad0fc44d859ff8a0382c924c6d3e167501cdbe1476cb2->enter($__internal_e92f3eec56a4e8f6efbad0fc44d859ff8a0382c924c6d3e167501cdbe1476cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Update/_content.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 2, $this->getSourceContext()); })()), "getRouteName", array(0 => "update"), "method"), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 2, $this->getSourceContext()); })()), "id", array())))) : (array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 2, $this->getSourceContext()); })()), "id", array()))))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "form", array(), "any", true, true)) {
            // line 5
            echo "        ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 5, $this->getSourceContext()); })()), "vars", array()), "templates", array()), "form", array()), "@SyliusAdmin/Crud/Update/_content.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
            echo "
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 10, $this->getSourceContext()); })()) . ".form"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 10, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 12
        $this->loadTemplate("@SyliusUi/Form/Buttons/_update.html.twig", "@SyliusAdmin/Crud/Update/_content.html.twig", 12)->display(array_merge($context, array("paths" => array("cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 12, $this->getSourceContext()); })()), "getRouteName", array(0 => "index"), "method"), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))))));
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_bfa28fd27e85d4e089b8f994c1b139fb57922af390bbe4fa654818faff1cf573->leave($__internal_bfa28fd27e85d4e089b8f994c1b139fb57922af390bbe4fa654818faff1cf573_prof);

        
        $__internal_e92f3eec56a4e8f6efbad0fc44d859ff8a0382c924c6d3e167501cdbe1476cb2->leave($__internal_e92f3eec56a4e8f6efbad0fc44d859ff8a0382c924c6d3e167501cdbe1476cb2_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Update/_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  57 => 13,  55 => 12,  50 => 10,  47 => 9,  41 => 7,  38 => 6,  35 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path(configuration.getRouteName('update'), configuration.vars.route.parameters|default({ 'id': resource.id })), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
    {% if configuration.vars.templates.form is defined %}
        {% include configuration.vars.templates.form %}
    {% else %}
        {{ form_widget(form) }}
    {% endif %}

    {{ sonata_block_render_event(event_prefix ~ '.form', {'resource': resource}) }}

    {% include '@SyliusUi/Form/Buttons/_update.html.twig' with {'paths': {'cancel': path(configuration.getRouteName('index'), configuration.vars.route.parameters|default({}))}} %}
    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "@SyliusAdmin/Crud/Update/_content.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Update\\_content.html.twig");
    }
}
