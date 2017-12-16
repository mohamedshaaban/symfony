<?php

/* SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig */
class __TwigTemplate_0b858871753405ebfb6e384c2e706ce856b07ec63b95343d877cfb1b5efff253 extends Twig_Template
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
        $__internal_eabf023fc81256eb5c71f58eb1af3fa82c61f2ac9f94776daff2b873eaf2a431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eabf023fc81256eb5c71f58eb1af3fa82c61f2ac9f94776daff2b873eaf2a431->enter($__internal_eabf023fc81256eb5c71f58eb1af3fa82c61f2ac9f94776daff2b873eaf2a431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig"));

        $__internal_2eadaac4b21c754ad8fa7a8c55d320f5e1eca126ff69b707a3c810cb10979419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eadaac4b21c754ad8fa7a8c55d320f5e1eca126ff69b707a3c810cb10979419->enter($__internal_2eadaac4b21c754ad8fa7a8c55d320f5e1eca126ff69b707a3c810cb10979419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "exclusive", array())) {
            // line 2
            echo "    <div class=\"ui ribbon orange label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.exclusive"), "html", null, true);
            echo "</div>
    <br />
";
        }
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 5, $this->getSourceContext()); })()), "couponBased", array())) {
            // line 6
            echo "    <div class=\"ui ribbon blue label\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.coupon_based"), "html", null, true);
            echo "</div>
    <br />
";
        }
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "
";
        
        $__internal_eabf023fc81256eb5c71f58eb1af3fa82c61f2ac9f94776daff2b873eaf2a431->leave($__internal_eabf023fc81256eb5c71f58eb1af3fa82c61f2ac9f94776daff2b873eaf2a431_prof);

        
        $__internal_2eadaac4b21c754ad8fa7a8c55d320f5e1eca126ff69b707a3c810cb10979419->leave($__internal_2eadaac4b21c754ad8fa7a8c55d320f5e1eca126ff69b707a3c810cb10979419_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  36 => 6,  34 => 5,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.exclusive %}
    <div class=\"ui ribbon orange label\">{{ 'sylius.ui.exclusive'|trans }}</div>
    <br />
{% endif %}
{% if data.couponBased %}
    <div class=\"ui ribbon blue label\">{{ 'sylius.ui.coupon_based'|trans }}</div>
    <br />
{% endif %}
{{ data.code }}
", "SyliusAdminBundle:Promotion/Grid/Field:codeExclusiveAndCouponBased.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig");
    }
}
