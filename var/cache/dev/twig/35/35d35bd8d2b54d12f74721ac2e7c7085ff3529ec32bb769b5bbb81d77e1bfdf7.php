<?php

/* SyliusAdminBundle:Form:theme.html.twig */
class __TwigTemplate_0152ffff6c80d418493b61be10319a551c50219d266b30e4412efea46bf38a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "SyliusAdminBundle:Form:theme.html.twig", 1);
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
        $__internal_59abbc8453a8af19e218c73892b2dcf42c05118977596593ee11f15bc1e1ad8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59abbc8453a8af19e218c73892b2dcf42c05118977596593ee11f15bc1e1ad8a->enter($__internal_59abbc8453a8af19e218c73892b2dcf42c05118977596593ee11f15bc1e1ad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Form:theme.html.twig"));

        $__internal_f6dd14a4f3416a3a80a0384138ebbc4fbb7af22780e63a303aa6c7ed28a6c90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6dd14a4f3416a3a80a0384138ebbc4fbb7af22780e63a303aa6c7ed28a6c90f->enter($__internal_f6dd14a4f3416a3a80a0384138ebbc4fbb7af22780e63a303aa6c7ed28a6c90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Form:theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59abbc8453a8af19e218c73892b2dcf42c05118977596593ee11f15bc1e1ad8a->leave($__internal_59abbc8453a8af19e218c73892b2dcf42c05118977596593ee11f15bc1e1ad8a_prof);

        
        $__internal_f6dd14a4f3416a3a80a0384138ebbc4fbb7af22780e63a303aa6c7ed28a6c90f->leave($__internal_f6dd14a4f3416a3a80a0384138ebbc4fbb7af22780e63a303aa6c7ed28a6c90f_prof);

    }

    // line 3
    public function block_sylius_taxon_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_a438b6ff52c245497a2b065b23918873354f7ea52bac25b7a75f22f36aec024a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a438b6ff52c245497a2b065b23918873354f7ea52bac25b7a75f22f36aec024a->enter($__internal_a438b6ff52c245497a2b065b23918873354f7ea52bac25b7a75f22f36aec024a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_autocomplete_choice_row"));

        $__internal_00de28980e47668f7686a638bf861fb55750a4259b621a5636608077091843b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00de28980e47668f7686a638bf861fb55750a4259b621a5636608077091843b1->enter($__internal_00de28980e47668f7686a638bf861fb55750a4259b621a5636608077091843b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_autocomplete_choice_row"));

        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'row', array("remote_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_by_name_phrase"), "load_edit_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_by_code")));
        echo "
";
        
        $__internal_00de28980e47668f7686a638bf861fb55750a4259b621a5636608077091843b1->leave($__internal_00de28980e47668f7686a638bf861fb55750a4259b621a5636608077091843b1_prof);

        
        $__internal_a438b6ff52c245497a2b065b23918873354f7ea52bac25b7a75f22f36aec024a->leave($__internal_a438b6ff52c245497a2b065b23918873354f7ea52bac25b7a75f22f36aec024a_prof);

    }

    // line 7
    public function block_sylius_product_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_f5b8bb458323276aba5cd95709fc8569b4d11a6ba503b3b75acb39ed206076e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b8bb458323276aba5cd95709fc8569b4d11a6ba503b3b75acb39ed206076e9->enter($__internal_f5b8bb458323276aba5cd95709fc8569b4d11a6ba503b3b75acb39ed206076e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        $__internal_e6ff38a8ecb637c9a640c9417fe6506df34da821b03bce319b1d108300f9b1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ff38a8ecb637c9a640c9417fe6506df34da821b03bce319b1d108300f9b1a8->enter($__internal_e6ff38a8ecb637c9a640c9417fe6506df34da821b03bce319b1d108300f9b1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_autocomplete_choice_row"));

        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'row', array("remote_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_by_name_phrase"), "load_edit_url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_product_by_code")));
        echo "
";
        
        $__internal_e6ff38a8ecb637c9a640c9417fe6506df34da821b03bce319b1d108300f9b1a8->leave($__internal_e6ff38a8ecb637c9a640c9417fe6506df34da821b03bce319b1d108300f9b1a8_prof);

        
        $__internal_f5b8bb458323276aba5cd95709fc8569b4d11a6ba503b3b75acb39ed206076e9->leave($__internal_f5b8bb458323276aba5cd95709fc8569b4d11a6ba503b3b75acb39ed206076e9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Form:theme.html.twig";
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
", "SyliusAdminBundle:Form:theme.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Form/theme.html.twig");
    }
}
