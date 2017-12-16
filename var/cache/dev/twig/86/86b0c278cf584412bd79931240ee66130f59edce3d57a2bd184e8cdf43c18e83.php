<?php

/* @SyliusAdmin/Form/theme.html.twig */
class __TwigTemplate_a0313ac74d4c1eb23562c3789fd266e27ef3a1496ce289bc5b86551ba6485de3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "@SyliusAdmin/Form/theme.html.twig", 1);
        $this->blocks = array(
            'sylius_taxon_autocomplete_choice_row' => array($this, 'block_sylius_taxon_autocomplete_choice_row'),
            'sylius_product_autocomplete_choice_row' => array($this, 'block_sylius_product_autocomplete_choice_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f79dc8a4e5e816088139030c9c11c7ccb0c1d098353b65a70b7b082a5ce9837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f79dc8a4e5e816088139030c9c11c7ccb0c1d098353b65a70b7b082a5ce9837->enter($__internal_0f79dc8a4e5e816088139030c9c11c7ccb0c1d098353b65a70b7b082a5ce9837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Form/theme.html.twig"));

        $__internal_597ca8e01cc32a7ea6d2a00feac90c828013d1e1e46830d092d4ae828729861e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597ca8e01cc32a7ea6d2a00feac90c828013d1e1e46830d092d4ae828729861e->enter($__internal_597ca8e01cc32a7ea6d2a00feac90c828013d1e1e46830d092d4ae828729861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Form/theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f79dc8a4e5e816088139030c9c11c7ccb0c1d098353b65a70b7b082a5ce9837->leave($__internal_0f79dc8a4e5e816088139030c9c11c7ccb0c1d098353b65a70b7b082a5ce9837_prof);

        
        $__internal_597ca8e01cc32a7ea6d2a00feac90c828013d1e1e46830d092d4ae828729861e->leave($__internal_597ca8e01cc32a7ea6d2a00feac90c828013d1e1e46830d092d4ae828729861e_prof);

    }

    // line 3
    public function block_sylius_taxon_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_55173c3763a427b43f6b974f70517b8345c7fead6742072d62b3bf2045b28643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55173c3763a427b43f6b974f70517b8345c7fead6742072d62b3bf2045b28643->enter($__internal_55173c3763a427b43f6b974f70517b8345c7fead6742072d62b3bf2045b28643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_autocomplete_choice_row"));

        $__internal_90a2a343b390550feb65f4b0a9b000c65cf4bcf2ed6311a8579399edc108c68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a2a343b390550feb65f4b0a9b000c65cf4bcf2ed6311a8579399edc108c68d->enter($__internal_90a2a343b390550feb65f4b0a9b000c65cf4bcf2ed6311a8579399edc108c68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_autocomplete_choice_row"));

        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'row', array("remote_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_by_name_phrase"), "load_edit_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_by_code")));
        echo "
";
        
        $__internal_90a2a343b390550feb65f4b0a9b000c65cf4bcf2ed6311a8579399edc108c68d->leave($__internal_90a2a343b390550feb65f4b0a9b000c65cf4bcf2ed6311a8579399edc108c68d_prof);

        
        $__internal_55173c3763a427b43f6b974f70517b8345c7fead6742072d62b3bf2045b28643->leave($__internal_55173c3763a427b43f6b974f70517b8345c7fead6742072d62b3bf2045b28643_prof);

    }

    // line 7
    public function block_sylius_product_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_e43a21ebb52b97697d6f741a222609e53f29a971668c833f0ef916c40bd24992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43a21ebb52b97697d6f741a222609e53f29a971668c833f0ef916c40bd24992->enter($__internal_e43a21ebb52b97697d6f741a222609e53f29a971668c833f0ef916c40bd24992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        $__internal_114b5e6ac3a3e9043ba0fbf5cf189bb9f805424894f0f6fa1cf32c75b9bef6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114b5e6ac3a3e9043ba0fbf5cf189bb9f805424894f0f6fa1cf32c75b9bef6a1->enter($__internal_114b5e6ac3a3e9043ba0fbf5cf189bb9f805424894f0f6fa1cf32c75b9bef6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'row', array("remote_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_by_name_phrase"), "load_edit_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_by_code")));
        echo "
";
        
        $__internal_114b5e6ac3a3e9043ba0fbf5cf189bb9f805424894f0f6fa1cf32c75b9bef6a1->leave($__internal_114b5e6ac3a3e9043ba0fbf5cf189bb9f805424894f0f6fa1cf32c75b9bef6a1_prof);

        
        $__internal_e43a21ebb52b97697d6f741a222609e53f29a971668c833f0ef916c40bd24992->leave($__internal_e43a21ebb52b97697d6f741a222609e53f29a971668c833f0ef916c40bd24992_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Form/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/theme.html.twig' %}

{% block sylius_taxon_autocomplete_choice_row %}
    {{ form_row(form, {'remote_url': path('sylius_admin_ajax_taxon_by_name_phrase'), 'load_edit_url': path('sylius_admin_ajax_taxon_by_code')}) }}
{% endblock %}

{% block sylius_product_autocomplete_choice_row %}
    {{ form_row(form, {'remote_url': path('sylius_admin_ajax_product_by_name_phrase'), 'load_edit_url': path('sylius_admin_ajax_product_by_code')}) }}
{% endblock %}
", "@SyliusAdmin/Form/theme.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Form\\theme.html.twig");
    }
}
