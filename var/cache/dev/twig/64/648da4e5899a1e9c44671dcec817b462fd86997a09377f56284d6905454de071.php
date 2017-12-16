<?php

/* @SyliusAdmin/Crud/Create/_content.html.twig */
class __TwigTemplate_62a6a2a53f66306c96130202c8f9eb6b18c72936edec2eb89b0b62472874f2de extends Twig_Template
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
        $__internal_e9360066d703b01a3a391eee34391a8b94beef4adda06c064229ef6c1ff415ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9360066d703b01a3a391eee34391a8b94beef4adda06c064229ef6c1ff415ff->enter($__internal_e9360066d703b01a3a391eee34391a8b94beef4adda06c064229ef6c1ff415ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Create/_content.html.twig"));

        $__internal_ae4560d7bfb6749a73ff78ca56205e01ff9bed7d1202134137de155f9dfd5210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4560d7bfb6749a73ff78ca56205e01ff9bed7d1202134137de155f9dfd5210->enter($__internal_ae4560d7bfb6749a73ff78ca56205e01ff9bed7d1202134137de155f9dfd5210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Create/_content.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 2, $this->getSourceContext()); })()), "getRouteName", array(0 => "create"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 2, $this->getSourceContext()); })()), "getRouteName", array(0 => "create"), "method"))), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "form", array(), "any", true, true)) {
            // line 4
            echo "        ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 4, $this->getSourceContext()); })()), "vars", array()), "templates", array()), "form", array()), "@SyliusAdmin/Crud/Create/_content.html.twig", 4)->display($context);
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'widget');
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 9, $this->getSourceContext()); })()) . ".form"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 9, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 11
        $this->loadTemplate("@SyliusUi/Form/Buttons/_create.html.twig", "@SyliusAdmin/Crud/Create/_content.html.twig", 11)->display(array_merge($context, array("paths" => array("cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 11, $this->getSourceContext()); })()), "getRouteName", array(0 => "index"), "method"), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array())))))));
        // line 12
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_e9360066d703b01a3a391eee34391a8b94beef4adda06c064229ef6c1ff415ff->leave($__internal_e9360066d703b01a3a391eee34391a8b94beef4adda06c064229ef6c1ff415ff_prof);

        
        $__internal_ae4560d7bfb6749a73ff78ca56205e01ff9bed7d1202134137de155f9dfd5210->leave($__internal_ae4560d7bfb6749a73ff78ca56205e01ff9bed7d1202134137de155f9dfd5210_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Create/_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  59 => 13,  56 => 12,  54 => 11,  49 => 9,  46 => 8,  40 => 6,  37 => 5,  34 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_start(form, {'action': path(configuration.vars.route.name|default(configuration.getRouteName('create')), configuration.vars.route.parameters|default({})), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    {% if configuration.vars.templates.form is defined %}
        {% include configuration.vars.templates.form %}
    {% else %}
        {{ form_widget(form) }}
    {% endif %}

    {{ sonata_block_render_event(event_prefix ~ '.form', {'resource': resource}) }}

    {% include '@SyliusUi/Form/Buttons/_create.html.twig' with {'paths': {'cancel': path(configuration.getRouteName('index'), configuration.vars.route.parameters|default({}))}} %}

    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "@SyliusAdmin/Crud/Create/_content.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Create\\_content.html.twig");
    }
}
