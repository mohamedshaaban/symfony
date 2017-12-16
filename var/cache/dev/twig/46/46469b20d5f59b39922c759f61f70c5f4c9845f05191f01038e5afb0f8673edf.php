<?php

/* SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig */
class __TwigTemplate_09b2c4b209d15b0cd513b836d69d7a850c5bcd7e870284935b2d20a7c36f2a03 extends Twig_Template
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
        $__internal_e9d77a9a142813861c6a7b3c7a081e53d5bdac826a6d3174810b2cf5efe51d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d77a9a142813861c6a7b3c7a081e53d5bdac826a6d3174810b2cf5efe51d9c->enter($__internal_e9d77a9a142813861c6a7b3c7a081e53d5bdac826a6d3174810b2cf5efe51d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig"));

        $__internal_ffcd9e5abbaae0c91ba16083f874f22d61ee275781697f2b89deed0448ccf49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcd9e5abbaae0c91ba16083f874f22d61ee275781697f2b89deed0448ccf49e->enter($__internal_ffcd9e5abbaae0c91ba16083f874f22d61ee275781697f2b89deed0448ccf49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 3, $this->getSourceContext()); })()), "promotion", array()), "name", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "plus")) : ("plus")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })()))) : ((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 3, $this->getSourceContext()); })())))));
        echo "
";
        
        $__internal_e9d77a9a142813861c6a7b3c7a081e53d5bdac826a6d3174810b2cf5efe51d9c->leave($__internal_e9d77a9a142813861c6a7b3c7a081e53d5bdac826a6d3174810b2cf5efe51d9c_prof);

        
        $__internal_ffcd9e5abbaae0c91ba16083f874f22d61ee275781697f2b89deed0448ccf49e->leave($__internal_ffcd9e5abbaae0c91ba16083f874f22d61ee275781697f2b89deed0448ccf49e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig";
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
        return new Twig_Source("{% import '@SyliusUi/Macro/headers.html.twig' as headers %}

{{ headers.default(resource.promotion.name, configuration.vars.icon|default('plus'), configuration.vars.subheader|default(header)|trans) }}
", "SyliusAdminBundle:PromotionCoupon/Create:_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/Create/_headerTitle.html.twig");
    }
}
