<?php

/* SyliusAdminBundle:Order/Show:_notes.html.twig */
class __TwigTemplate_7f5d23a0dcbad82ac2e927568b38a43c989c4a8a2491e43a6283d423068df54d extends Twig_Template
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
        $__internal_d6dbe0f4d9d8b9a2c96cef0bf1e9fd47e214dab067c5303a5b1acbab56e6dbd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6dbe0f4d9d8b9a2c96cef0bf1e9fd47e214dab067c5303a5b1acbab56e6dbd9->enter($__internal_d6dbe0f4d9d8b9a2c96cef0bf1e9fd47e214dab067c5303a5b1acbab56e6dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_notes.html.twig"));

        $__internal_dbd1883ecadf3b829f3f4f81edec274dd63c2d6e8e08a8cbca9ae9e71363cb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd1883ecadf3b829f3f4f81edec274dd63c2d6e8e08a8cbca9ae9e71363cb3c->enter($__internal_dbd1883ecadf3b829f3f4f81edec274dd63c2d6e8e08a8cbca9ae9e71363cb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_notes.html.twig"));

        // line 1
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->getSourceContext()); })()), "notes", array()))) {
            // line 2
            echo "    <h4 class=\"ui top attached styled header\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.notes"), "html", null, true);
            echo "
    </h4>
    <div class=\"ui attached segment\" id=\"sylius-order-notes\">
        ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "notes", array()), "html", null, true);
            echo "
    </div>
";
        }
        
        $__internal_d6dbe0f4d9d8b9a2c96cef0bf1e9fd47e214dab067c5303a5b1acbab56e6dbd9->leave($__internal_d6dbe0f4d9d8b9a2c96cef0bf1e9fd47e214dab067c5303a5b1acbab56e6dbd9_prof);

        
        $__internal_dbd1883ecadf3b829f3f4f81edec274dd63c2d6e8e08a8cbca9ae9e71363cb3c->leave($__internal_dbd1883ecadf3b829f3f4f81edec274dd63c2d6e8e08a8cbca9ae9e71363cb3c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if order.notes is not null %}
    <h4 class=\"ui top attached styled header\">
        {{ 'sylius.ui.notes'|trans }}
    </h4>
    <div class=\"ui attached segment\" id=\"sylius-order-notes\">
        {{ order.notes }}
    </div>
{% endif %}", "SyliusAdminBundle:Order/Show:_notes.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_notes.html.twig");
    }
}
