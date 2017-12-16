<?php

/* SyliusAdminBundle:Taxon:_media.html.twig */
class __TwigTemplate_c073799fcf8cdf1e94ac73d31ea6df8d2b9ba598fbf74990f142471b6a0f7a13 extends Twig_Template
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
        $__internal_a197f5bcc02f3af2b0c4d71c9a3568421371e2cf57b0e491250525046755502b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a197f5bcc02f3af2b0c4d71c9a3568421371e2cf57b0e491250525046755502b->enter($__internal_a197f5bcc02f3af2b0c4d71c9a3568421371e2cf57b0e491250525046755502b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_media.html.twig"));

        $__internal_1108c164f48d808fda8cb262efee2387daa1a9fd2779addafb0dedf7a6cd9952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1108c164f48d808fda8cb262efee2387daa1a9fd2779addafb0dedf7a6cd9952->enter($__internal_1108c164f48d808fda8cb262efee2387daa1a9fd2779addafb0dedf7a6cd9952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_media.html.twig"));

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
        
        $__internal_a197f5bcc02f3af2b0c4d71c9a3568421371e2cf57b0e491250525046755502b->leave($__internal_a197f5bcc02f3af2b0c4d71c9a3568421371e2cf57b0e491250525046755502b_prof);

        
        $__internal_1108c164f48d808fda8cb262efee2387daa1a9fd2779addafb0dedf7a6cd9952->leave($__internal_1108c164f48d808fda8cb262efee2387daa1a9fd2779addafb0dedf7a6cd9952_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_media.html.twig";
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
", "SyliusAdminBundle:Taxon:_media.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Taxon/_media.html.twig");
    }
}
