<?php

/* SyliusAdminBundle:Taxon:_form.html.twig */
class __TwigTemplate_0d9239b9956c6d149864eac4b299d587abe3fa2d8542d56adbd52972220fac9c extends Twig_Template
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
        $__internal_d72659145a5823c1f9841139189d0f029736599ad6d0f470cced9ae39ec810ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72659145a5823c1f9841139189d0f029736599ad6d0f470cced9ae39ec810ca->enter($__internal_d72659145a5823c1f9841139189d0f029736599ad6d0f470cced9ae39ec810ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_form.html.twig"));

        $__internal_9d589089280937279e1d9e412631ea1d43cd9ddd5f903345fa522435a0e4e4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d589089280937279e1d9e412631ea1d43cd9ddd5f903345fa522435a0e4e4d2->enter($__internal_9d589089280937279e1d9e412631ea1d43cd9ddd5f903345fa522435a0e4e4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_form.html.twig"));

        // line 1
        $context["__internal_fba85a8b454a5b2371938b36e6cc12e4a543466ee2b995da88b52e62c20178d6"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:Taxon:_form.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "
    <div class=\"two fields\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
        ";
        // line 7
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 7, $this->getSourceContext()); })()), "id", array()) != null)) {
            // line 8
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "parent", array()), 'row');
            echo "
        ";
        } else {
            // line 10
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "parent", array()), 'widget', array("attr" => array("style" => "display: none;")));
            echo "
        ";
        }
        // line 12
        echo "    </div>
</div>
";
        // line 14
        echo $context["__internal_fba85a8b454a5b2371938b36e6cc12e4a543466ee2b995da88b52e62c20178d6"]->macro_translationFormWithSlug(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "translations", array()), "@SyliusAdmin/Taxon/_slugField.html.twig", (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 14, $this->getSourceContext()); })()));
        echo "

";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Taxon/_media.html.twig", "SyliusAdminBundle:Taxon:_form.html.twig", 16)->display($context);
        
        $__internal_d72659145a5823c1f9841139189d0f029736599ad6d0f470cced9ae39ec810ca->leave($__internal_d72659145a5823c1f9841139189d0f029736599ad6d0f470cced9ae39ec810ca_prof);

        
        $__internal_9d589089280937279e1d9e412631ea1d43cd9ddd5f903345fa522435a0e4e4d2->leave($__internal_9d589089280937279e1d9e412631ea1d43cd9ddd5f903345fa522435a0e4e4d2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  54 => 12,  48 => 10,  42 => 8,  40 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationFormWithSlug %}

<div class=\"ui segment\">
    {{ form_errors(form) }}
    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {% if taxon.id != null %}
            {{ form_row(form.parent) }}
        {% else %}
            {{ form_widget(form.parent, {'attr': {'style': 'display: none;'}}) }}
        {% endif %}
    </div>
</div>
{{ translationFormWithSlug(form.translations, '@SyliusAdmin/Taxon/_slugField.html.twig', taxon) }}

{% include '@SyliusAdmin/Taxon/_media.html.twig' %}
", "SyliusAdminBundle:Taxon:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Taxon/_form.html.twig");
    }
}
