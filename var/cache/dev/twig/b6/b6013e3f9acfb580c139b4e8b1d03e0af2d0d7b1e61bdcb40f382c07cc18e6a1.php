<?php

/* SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig */
class __TwigTemplate_458c98d2b2287c2a5d72c6da1b94ab1534491a8c38e5db2bcd646c6b5318bd76 extends Twig_Template
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
        $__internal_064b629c2a6914a49aa32eeb4df848b3520395b24d4faa9ad10e435ffccf6f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064b629c2a6914a49aa32eeb4df848b3520395b24d4faa9ad10e435ffccf6f0b->enter($__internal_064b629c2a6914a49aa32eeb4df848b3520395b24d4faa9ad10e435ffccf6f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig"));

        $__internal_a67e30ceae697ee0ab8ebfefa37f006b22b0554ffa83552e6e7d55a616ac4da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67e30ceae697ee0ab8ebfefa37f006b22b0554ffa83552e6e7d55a616ac4da8->enter($__internal_a67e30ceae697ee0ab8ebfefa37f006b22b0554ffa83552e6e7d55a616ac4da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig"));

        // line 1
        echo "<span class=\"ui blue";
        if ((array_key_exists("attached", $context) && ((isset($context["attached"]) || array_key_exists("attached", $context) ? $context["attached"] : (function () { throw new Twig_Error_Runtime('Variable "attached" does not exist.', 1, $this->getSourceContext()); })()) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"clock icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_064b629c2a6914a49aa32eeb4df848b3520395b24d4faa9ad10e435ffccf6f0b->leave($__internal_064b629c2a6914a49aa32eeb4df848b3520395b24d4faa9ad10e435ffccf6f0b_prof);

        
        $__internal_a67e30ceae697ee0ab8ebfefa37f006b22b0554ffa83552e6e7d55a616ac4da8->leave($__internal_a67e30ceae697ee0ab8ebfefa37f006b22b0554ffa83552e6e7d55a616ac4da8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig";
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
        return new Twig_Source("<span class=\"ui blue{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"clock icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/ShippingState:ready.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/ShippingState/ready.html.twig");
    }
}
