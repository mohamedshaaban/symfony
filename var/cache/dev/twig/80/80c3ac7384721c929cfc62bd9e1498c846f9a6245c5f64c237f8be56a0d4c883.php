<?php

/* SyliusAdminBundle:Product/Tab:_attributes.html.twig */
class __TwigTemplate_114acd0393bae2352e312379be94a2896a75f2b45877c42779f0e2df590191b2 extends Twig_Template
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
        $__internal_41b359aaced99e7ef3c8e9951a5ab753e4600f10718e02fa8f218dec69d45380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b359aaced99e7ef3c8e9951a5ab753e4600f10718e02fa8f218dec69d45380->enter($__internal_41b359aaced99e7ef3c8e9951a5ab753e4600f10718e02fa8f218dec69d45380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_attributes.html.twig"));

        $__internal_32417877a57caa65c96aea58a414cf7230734985c9d17e1fc3335e0604335268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32417877a57caa65c96aea58a414cf7230734985c9d17e1fc3335e0604335268->enter($__internal_32417877a57caa65c96aea58a414cf7230734985c9d17e1fc3335e0604335268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_attributes.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig"));
        // line 2
        echo "
<div class=\"ui tab\" data-tab=\"attributes\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.attributes"), "html", null, true);
        echo "</h3>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_get_product_attributes"));
        echo "
    <div id=\"attributesContainer\" data-count=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "attributes", array())), "html", null, true);
        echo "\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "attributes", array()), 'widget', array("attr" => array("translations" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "translations", array()))));
        echo "
    </div>

    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 10, $this->getSourceContext()); })())) . ".tab_attributes"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_41b359aaced99e7ef3c8e9951a5ab753e4600f10718e02fa8f218dec69d45380->leave($__internal_41b359aaced99e7ef3c8e9951a5ab753e4600f10718e02fa8f218dec69d45380_prof);

        
        $__internal_32417877a57caa65c96aea58a414cf7230734985c9d17e1fc3335e0604335268->leave($__internal_32417877a57caa65c96aea58a414cf7230734985c9d17e1fc3335e0604335268_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'SyliusAdminBundle:Product/Attribute:attributesCollection.html.twig' %}

<div class=\"ui tab\" data-tab=\"attributes\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.attributes'|trans }}</h3>
    {{ render(url('sylius_admin_get_product_attributes')) }}
    <div id=\"attributesContainer\" data-count=\"{{ form.attributes|length }}\">
        {{ form_widget(form.attributes, {'attr': {'translations': form.translations} }) }}
    </div>

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_attributes', {'form': form}) }}
</div>
", "SyliusAdminBundle:Product/Tab:_attributes.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Tab/_attributes.html.twig");
    }
}
