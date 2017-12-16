<?php

/* @SyliusAdmin/Product/Tab/_attributes.html.twig */
class __TwigTemplate_8e55c745fd8ff8e5f0c63c788b90fb5b7c618b5538e14eecf7cd202eecb3859d extends Twig_Template
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
        $__internal_7c54a73faef797e60079cbdd03e8a2453dd9c9007d64528dbfc8f300834827b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c54a73faef797e60079cbdd03e8a2453dd9c9007d64528dbfc8f300834827b7->enter($__internal_7c54a73faef797e60079cbdd03e8a2453dd9c9007d64528dbfc8f300834827b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_attributes.html.twig"));

        $__internal_ade9b9d97b3dca8b4dfe09d0759b75346ad95a953386a70cb638ca8a5b5fc06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade9b9d97b3dca8b4dfe09d0759b75346ad95a953386a70cb638ca8a5b5fc06a->enter($__internal_ade9b9d97b3dca8b4dfe09d0759b75346ad95a953386a70cb638ca8a5b5fc06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Tab/_attributes.html.twig"));

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
        
        $__internal_7c54a73faef797e60079cbdd03e8a2453dd9c9007d64528dbfc8f300834827b7->leave($__internal_7c54a73faef797e60079cbdd03e8a2453dd9c9007d64528dbfc8f300834827b7_prof);

        
        $__internal_ade9b9d97b3dca8b4dfe09d0759b75346ad95a953386a70cb638ca8a5b5fc06a->leave($__internal_ade9b9d97b3dca8b4dfe09d0759b75346ad95a953386a70cb638ca8a5b5fc06a_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Tab/_attributes.html.twig";
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
", "@SyliusAdmin/Product/Tab/_attributes.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Tab\\_attributes.html.twig");
    }
}
