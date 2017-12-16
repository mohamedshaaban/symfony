<?php

/* SyliusAdminBundle:Order/Label/ShippingState:partially_shipped.html.twig */
class __TwigTemplate_ac8ae0f3989679f26665a4bb0ef86b5137ae20b129b2f4819960514b6cdbe813 extends Twig_Template
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
        $__internal_8d83bad0a45d9532ed2fa926467198d1a2a6891d413fc08f5dfa28412cf35a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d83bad0a45d9532ed2fa926467198d1a2a6891d413fc08f5dfa28412cf35a68->enter($__internal_8d83bad0a45d9532ed2fa926467198d1a2a6891d413fc08f5dfa28412cf35a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:partially_shipped.html.twig"));

        $__internal_22ed6e5b77a45e758e32d6d09d748715f681cb1569d35a258de95da01ddf51b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ed6e5b77a45e758e32d6d09d748715f681cb1569d35a258de95da01ddf51b5->enter($__internal_22ed6e5b77a45e758e32d6d09d748715f681cb1569d35a258de95da01ddf51b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:partially_shipped.html.twig"));

        // line 1
        echo "<span class=\"ui yellow";
        if ((array_key_exists("attached", $context) && ((isset($context["attached"]) || array_key_exists("attached", $context) ? $context["attached"] : (function () { throw new Twig_Error_Runtime('Variable "attached" does not exist.', 1, $this->getSourceContext()); })()) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"adjust icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_8d83bad0a45d9532ed2fa926467198d1a2a6891d413fc08f5dfa28412cf35a68->leave($__internal_8d83bad0a45d9532ed2fa926467198d1a2a6891d413fc08f5dfa28412cf35a68_prof);

        
        $__internal_22ed6e5b77a45e758e32d6d09d748715f681cb1569d35a258de95da01ddf51b5->leave($__internal_22ed6e5b77a45e758e32d6d09d748715f681cb1569d35a258de95da01ddf51b5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/ShippingState:partially_shipped.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui yellow{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"adjust icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/ShippingState:partially_shipped.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/ShippingState/partially_shipped.html.twig");
    }
}
