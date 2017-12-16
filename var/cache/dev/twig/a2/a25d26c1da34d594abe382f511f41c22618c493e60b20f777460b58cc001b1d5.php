<?php

/* @SyliusAdmin/Taxon/_media.html.twig */
class __TwigTemplate_71ca77606f63a1bef9c378bc7fd2c981c4a5ad59ee3c0be5e18c0fe15511d58c extends Twig_Template
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
        $__internal_858397cf7bf9604510437545c68fa9ae3be799cf42174509e6e963bcd3cca449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858397cf7bf9604510437545c68fa9ae3be799cf42174509e6e963bcd3cca449->enter($__internal_858397cf7bf9604510437545c68fa9ae3be799cf42174509e6e963bcd3cca449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_media.html.twig"));

        $__internal_e50cfedcc25582ca53d2994dc0557f1717fe2b3fbb17ec5d8512dd14ed72b153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50cfedcc25582ca53d2994dc0557f1717fe2b3fbb17ec5d8512dd14ed72b153->enter($__internal_e50cfedcc25582ca53d2994dc0557f1717fe2b3fbb17ec5d8512dd14ed72b153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Taxon/_media.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "SyliusUiBundle:Form:imagesTheme.html.twig"));
        // line 2
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.media"), "html", null, true);
        echo "</h3>
    <br>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "images", array()), 'row', array("label" => false));
        echo "
</div>
";
        
        $__internal_858397cf7bf9604510437545c68fa9ae3be799cf42174509e6e963bcd3cca449->leave($__internal_858397cf7bf9604510437545c68fa9ae3be799cf42174509e6e963bcd3cca449_prof);

        
        $__internal_e50cfedcc25582ca53d2994dc0557f1717fe2b3fbb17ec5d8512dd14ed72b153->leave($__internal_e50cfedcc25582ca53d2994dc0557f1717fe2b3fbb17ec5d8512dd14ed72b153_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Taxon/_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'SyliusUiBundle:Form:imagesTheme.html.twig' %}

<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.media'|trans }}</h3>
    <br>
    {{ form_row(form.images, {'label': false}) }}
</div>
", "@SyliusAdmin/Taxon/_media.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Taxon\\_media.html.twig");
    }
}
