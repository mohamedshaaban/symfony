<?php

/* @SyliusAdmin/Crud/Update/_header.html.twig */
class __TwigTemplate_274357193fe5bf3261b91fdea0e1139143da2ad7910c7da8f52d26b9c92fc04c extends Twig_Template
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
        $__internal_b2b5f426331a74f948fa8b8d1963b819634cba4469055c1c47272e97f36b93aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b5f426331a74f948fa8b8d1963b819634cba4469055c1c47272e97f36b93aa->enter($__internal_b2b5f426331a74f948fa8b8d1963b819634cba4469055c1c47272e97f36b93aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Update/_header.html.twig"));

        $__internal_d0a52b96d4ad8ce5e4a27fb8eac5bc86c1d4a2ba9dc183ded47f342e1106e501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a52b96d4ad8ce5e4a27fb8eac5bc86c1d4a2ba9dc183ded47f342e1106e501->enter($__internal_d0a52b96d4ad8ce5e4a27fb8eac5bc86c1d4a2ba9dc183ded47f342e1106e501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Update/_header.html.twig"));

        // line 1
        echo "<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        ";
        // line 3
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "header_title", array()), "@SyliusAdmin/Crud/Update/_headerTitle.html.twig")) : ("@SyliusAdmin/Crud/Update/_headerTitle.html.twig")), "@SyliusAdmin/Crud/Update/_header.html.twig", 3)->display($context);
        // line 4
        echo "        ";
        $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "breadcrumb", array()), "@SyliusAdmin/Crud/Update/_breadcrumb.html.twig")) : ("@SyliusAdmin/Crud/Update/_breadcrumb.html.twig")), "@SyliusAdmin/Crud/Update/_header.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 6, $this->getSourceContext()); })()) . ".header"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "
    </div>
    <div class=\"middle aligned column\">
        ";
        // line 9
        try {
            $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "toolbar", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "templates", array(), "any", false, true), "toolbar", array()), "@SyliusAdmin/Crud/_toolbar.html.twig")) : ("@SyliusAdmin/Crud/_toolbar.html.twig")), "@SyliusAdmin/Crud/Update/_header.html.twig", 9)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 10
        echo "    </div>
</div>
";
        
        $__internal_b2b5f426331a74f948fa8b8d1963b819634cba4469055c1c47272e97f36b93aa->leave($__internal_b2b5f426331a74f948fa8b8d1963b819634cba4469055c1c47272e97f36b93aa_prof);

        
        $__internal_d0a52b96d4ad8ce5e4a27fb8eac5bc86c1d4a2ba9dc183ded47f342e1106e501->leave($__internal_d0a52b96d4ad8ce5e4a27fb8eac5bc86c1d4a2ba9dc183ded47f342e1106e501_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Update/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui stackable two column grid\">
    <div class=\"column\">
        {% include configuration.vars.templates.header_title|default('@SyliusAdmin/Crud/Update/_headerTitle.html.twig') %}
        {% include configuration.vars.templates.breadcrumb|default('@SyliusAdmin/Crud/Update/_breadcrumb.html.twig') %}

        {{ sonata_block_render_event(event_prefix ~ '.header', {'resource': resource}) }}
    </div>
    <div class=\"middle aligned column\">
        {% include configuration.vars.templates.toolbar|default('@SyliusAdmin/Crud/_toolbar.html.twig') ignore missing %}
    </div>
</div>
", "@SyliusAdmin/Crud/Update/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Update\\_header.html.twig");
    }
}
