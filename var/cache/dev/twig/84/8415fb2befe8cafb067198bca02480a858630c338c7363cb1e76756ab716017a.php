<?php

/* FOSOAuthServerBundle:Authorize:authorize.html.twig */
class __TwigTemplate_d162fdf1c7d2b871cdb9479691279216c2d12bde01b1b50d242b504131f9724e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSOAuthServerBundle::layout.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 1);
        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d5ab2af61fc89a53c03d2ad981f6b537a92b7207b739661bbe86800c2147187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5ab2af61fc89a53c03d2ad981f6b537a92b7207b739661bbe86800c2147187->enter($__internal_4d5ab2af61fc89a53c03d2ad981f6b537a92b7207b739661bbe86800c2147187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize.html.twig"));

        $__internal_aae1af88a5fdb05cd5bd26d817ad2029645f16713e6365ae556d9ae4f4ea2f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae1af88a5fdb05cd5bd26d817ad2029645f16713e6365ae556d9ae4f4ea2f50->enter($__internal_aae1af88a5fdb05cd5bd26d817ad2029645f16713e6365ae556d9ae4f4ea2f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d5ab2af61fc89a53c03d2ad981f6b537a92b7207b739661bbe86800c2147187->leave($__internal_4d5ab2af61fc89a53c03d2ad981f6b537a92b7207b739661bbe86800c2147187_prof);

        
        $__internal_aae1af88a5fdb05cd5bd26d817ad2029645f16713e6365ae556d9ae4f4ea2f50->leave($__internal_aae1af88a5fdb05cd5bd26d817ad2029645f16713e6365ae556d9ae4f4ea2f50_prof);

    }

    // line 3
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_820a64bb0a57f3e3e407fbac18db3e937723be24b975ac558a14713d79a576c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820a64bb0a57f3e3e407fbac18db3e937723be24b975ac558a14713d79a576c1->enter($__internal_820a64bb0a57f3e3e407fbac18db3e937723be24b975ac558a14713d79a576c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        $__internal_c4b9d6d3f8da0d1cad486a5594dbaec244ab42930bfe249bb80a085269b31fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b9d6d3f8da0d1cad486a5594dbaec244ab42930bfe249bb80a085269b31fa0->enter($__internal_c4b9d6d3f8da0d1cad486a5594dbaec244ab42930bfe249bb80a085269b31fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 4
        $this->loadTemplate("FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 4)->display($context);
        
        $__internal_c4b9d6d3f8da0d1cad486a5594dbaec244ab42930bfe249bb80a085269b31fa0->leave($__internal_c4b9d6d3f8da0d1cad486a5594dbaec244ab42930bfe249bb80a085269b31fa0_prof);

        
        $__internal_820a64bb0a57f3e3e407fbac18db3e937723be24b975ac558a14713d79a576c1->leave($__internal_820a64bb0a57f3e3e407fbac18db3e937723be24b975ac558a14713d79a576c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSOAuthServerBundle::layout.html.twig\" %}

{% block fos_oauth_server_content %}
{% include \"FOSOAuthServerBundle:Authorize:authorize_content.html.twig\" %}
{% endblock fos_oauth_server_content %}
", "FOSOAuthServerBundle:Authorize:authorize.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/views/Authorize/authorize.html.twig");
    }
}
