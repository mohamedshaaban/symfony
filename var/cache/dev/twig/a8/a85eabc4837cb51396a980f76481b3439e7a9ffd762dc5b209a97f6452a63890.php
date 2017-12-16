<?php

/* SyliusAdminBundle:Country/Grid/Field:name.html.twig */
class __TwigTemplate_925d5ef0e3d0a9223354e413544ba59c750507e3f34d3f23f8aaf359d2d2a67a extends Twig_Template
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
        $__internal_114278dc88722336e32c6c18857b18ede263776f2a2e0e8b7f3b01a78863f3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114278dc88722336e32c6c18857b18ede263776f2a2e0e8b7f3b01a78863f3c4->enter($__internal_114278dc88722336e32c6c18857b18ede263776f2a2e0e8b7f3b01a78863f3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Country/Grid/Field:name.html.twig"));

        $__internal_122371b615eafce4ffd96ffa99c48c3f87adfbae26ec56372c49344ab191fbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122371b615eafce4ffd96ffa99c48c3f87adfbae26ec56372c49344ab191fbbe->enter($__internal_122371b615eafce4ffd96ffa99c48c3f87adfbae26ec56372c49344ab191fbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Country/Grid/Field:name.html.twig"));

        // line 1
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Country/Grid/Field:name.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["flags"]->macro_fromCountryCode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "code", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension')->translateCountryIsoCode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "code", array())), "html", null, true);
        echo "
";
        
        $__internal_114278dc88722336e32c6c18857b18ede263776f2a2e0e8b7f3b01a78863f3c4->leave($__internal_114278dc88722336e32c6c18857b18ede263776f2a2e0e8b7f3b01a78863f3c4_prof);

        
        $__internal_122371b615eafce4ffd96ffa99c48c3f87adfbae26ec56372c49344ab191fbbe->leave($__internal_122371b615eafce4ffd96ffa99c48c3f87adfbae26ec56372c49344ab191fbbe_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Country/Grid/Field:name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

{{ flags.fromCountryCode(data.code) }} {{ data.code|sylius_country_name }}
", "SyliusAdminBundle:Country/Grid/Field:name.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Country/Grid/Field/name.html.twig");
    }
}
