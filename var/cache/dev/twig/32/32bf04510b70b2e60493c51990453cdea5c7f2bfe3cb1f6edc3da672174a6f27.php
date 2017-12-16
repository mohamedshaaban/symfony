<?php

/* SyliusAdminBundle:Customer/Grid/Field:verified.html.twig */
class __TwigTemplate_68883918d5e2a792d36d2fd1928018800e9d70b09daf4056e051d7139286fd0f extends Twig_Template
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
        $__internal_084d9b6a311446cfe21c929d8e992252a4b1b662b9b0b77e042f87bf5aa775aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084d9b6a311446cfe21c929d8e992252a4b1b662b9b0b77e042f87bf5aa775aa->enter($__internal_084d9b6a311446cfe21c929d8e992252a4b1b662b9b0b77e042f87bf5aa775aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig"));

        $__internal_b4d9799f4b02a75881e0ab60473428e899f61a2fdc1b57e768506964c7987741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d9799f4b02a75881e0ab60473428e899f61a2fdc1b57e768506964c7987741->enter($__internal_b4d9799f4b02a75881e0ab60473428e899f61a2fdc1b57e768506964c7987741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig", 1);
        // line 2
        echo $context["label"]->macro_yesNo(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "user", array(), "any", false, true), "verified", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "user", array(), "any", false, true), "verified", array()), false)) : (false)));
        echo "
";
        
        $__internal_084d9b6a311446cfe21c929d8e992252a4b1b662b9b0b77e042f87bf5aa775aa->leave($__internal_084d9b6a311446cfe21c929d8e992252a4b1b662b9b0b77e042f87bf5aa775aa_prof);

        
        $__internal_b4d9799f4b02a75881e0ab60473428e899f61a2fdc1b57e768506964c7987741->leave($__internal_b4d9799f4b02a75881e0ab60473428e899f61a2fdc1b57e768506964c7987741_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}
{{ label.yesNo(data.user.verified|default(false)) }}
", "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Grid/Field/verified.html.twig");
    }
}
