<?php

/* SyliusShopBundle:Email:contactRequest.html.twig */
class __TwigTemplate_1d5c3e23d95539ef5bbdabe267f9fd500411d7f4e327e2edf248a96889947716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6952087d751ec64b269230f0529aac8bf02bc1f40e8152cc14b2bf7e7afcddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6952087d751ec64b269230f0529aac8bf02bc1f40e8152cc14b2bf7e7afcddc->enter($__internal_f6952087d751ec64b269230f0529aac8bf02bc1f40e8152cc14b2bf7e7afcddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:contactRequest.html.twig"));

        $__internal_77edf480303e4f413e990e191d262338e8f878ab40d65d9858983c3b9e89b60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77edf480303e4f413e990e191d262338e8f878ab40d65d9858983c3b9e89b60c->enter($__internal_77edf480303e4f413e990e191d262338e8f878ab40d65d9858983c3b9e89b60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Email:contactRequest.html.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f6952087d751ec64b269230f0529aac8bf02bc1f40e8152cc14b2bf7e7afcddc->leave($__internal_f6952087d751ec64b269230f0529aac8bf02bc1f40e8152cc14b2bf7e7afcddc_prof);

        
        $__internal_77edf480303e4f413e990e191d262338e8f878ab40d65d9858983c3b9e89b60c->leave($__internal_77edf480303e4f413e990e191d262338e8f878ab40d65d9858983c3b9e89b60c_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0739a4d5428557581b406ab70e70a3f572009595c497c8e7e42d7180b477660e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0739a4d5428557581b406ab70e70a3f572009595c497c8e7e42d7180b477660e->enter($__internal_0739a4d5428557581b406ab70e70a3f572009595c497c8e7e42d7180b477660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_305d3c0fd0b23a4e46d3009d061ffb04b5720b8f04b9b8af234e84e8be75d8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305d3c0fd0b23a4e46d3009d061ffb04b5720b8f04b9b8af234e84e8be75d8ec->enter($__internal_305d3c0fd0b23a4e46d3009d061ffb04b5720b8f04b9b8af234e84e8be75d8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 2
        echo "    Contact request
";
        
        $__internal_305d3c0fd0b23a4e46d3009d061ffb04b5720b8f04b9b8af234e84e8be75d8ec->leave($__internal_305d3c0fd0b23a4e46d3009d061ffb04b5720b8f04b9b8af234e84e8be75d8ec_prof);

        
        $__internal_0739a4d5428557581b406ab70e70a3f572009595c497c8e7e42d7180b477660e->leave($__internal_0739a4d5428557581b406ab70e70a3f572009595c497c8e7e42d7180b477660e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a9056a7138873925a12c8f821016e50fba591e741c48c77a18e482bfdc0de61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9056a7138873925a12c8f821016e50fba591e741c48c77a18e482bfdc0de61->enter($__internal_7a9056a7138873925a12c8f821016e50fba591e741c48c77a18e482bfdc0de61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7368db7a5d4bf1396ef46d647ed2b070e780714ac25bd70ebad99bfc50e6d0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7368db7a5d4bf1396ef46d647ed2b070e780714ac25bd70ebad99bfc50e6d0aa->enter($__internal_7368db7a5d4bf1396ef46d647ed2b070e780714ac25bd70ebad99bfc50e6d0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "        Message from: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "
        <br/>
        Content:
        <br/>
        \"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 11, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo "\"
    ";
        
        $__internal_7368db7a5d4bf1396ef46d647ed2b070e780714ac25bd70ebad99bfc50e6d0aa->leave($__internal_7368db7a5d4bf1396ef46d647ed2b070e780714ac25bd70ebad99bfc50e6d0aa_prof);

        
        $__internal_7a9056a7138873925a12c8f821016e50fba591e741c48c77a18e482bfdc0de61->leave($__internal_7a9056a7138873925a12c8f821016e50fba591e741c48c77a18e482bfdc0de61_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Email:contactRequest.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  73 => 7,  71 => 6,  62 => 5,  51 => 2,  42 => 1,  32 => 5,  29 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
    Contact request
{% endblock %}

{% block body %}
    {% autoescape %}
        Message from: {{ data.email }}
        <br/>
        Content:
        <br/>
        \"{{ data.message }}\"
    {% endautoescape %}
{% endblock %}
", "SyliusShopBundle:Email:contactRequest.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Email/contactRequest.html.twig");
    }
}
