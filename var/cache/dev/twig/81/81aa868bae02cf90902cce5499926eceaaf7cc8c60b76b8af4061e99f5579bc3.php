<?php

/* SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig */
class __TwigTemplate_9873739cfdd1ca33f08a8d0b546a24053983679fcdcd1d86d000fa4bbf146816 extends Twig_Template
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
        $__internal_3a8654268a1e827db0b3378fffe22df72449faa60fa52dd80e30627227ab9b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8654268a1e827db0b3378fffe22df72449faa60fa52dd80e30627227ab9b5d->enter($__internal_3a8654268a1e827db0b3378fffe22df72449faa60fa52dd80e30627227ab9b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig"));

        $__internal_9e90f2205d9a3f40fd7390718ab71c445d90028633cb1069640c0ec505d9e15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e90f2205d9a3f40fd7390718ab71c445d90028633cb1069640c0ec505d9e15a->enter($__internal_9e90f2205d9a3f40fd7390718ab71c445d90028633cb1069640c0ec505d9e15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig"));

        // line 1
        echo "<span class=\"ui purple";
        if ((array_key_exists("attached", $context) && ((isset($context["attached"]) || array_key_exists("attached", $context) ? $context["attached"] : (function () { throw new Twig_Error_Runtime('Variable "attached" does not exist.', 1, $this->getSourceContext()); })()) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"reply all icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_3a8654268a1e827db0b3378fffe22df72449faa60fa52dd80e30627227ab9b5d->leave($__internal_3a8654268a1e827db0b3378fffe22df72449faa60fa52dd80e30627227ab9b5d_prof);

        
        $__internal_9e90f2205d9a3f40fd7390718ab71c445d90028633cb1069640c0ec505d9e15a->leave($__internal_9e90f2205d9a3f40fd7390718ab71c445d90028633cb1069640c0ec505d9e15a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig";
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
        return new Twig_Source("<span class=\"ui purple{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"reply all icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:refunded.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/PaymentState/refunded.html.twig");
    }
}
