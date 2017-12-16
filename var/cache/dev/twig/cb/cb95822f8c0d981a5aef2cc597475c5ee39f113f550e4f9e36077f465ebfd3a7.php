<?php

/* SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig */
class __TwigTemplate_0c7303acc043220a26bf87fedb0379ceda7e4072b0860f720f37e635121c756a extends Twig_Template
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
        $__internal_dde7900e6cd5edf2d6d6af3f617ea1f0bfc820950e364a03e9330ca3e57cd7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde7900e6cd5edf2d6d6af3f617ea1f0bfc820950e364a03e9330ca3e57cd7d1->enter($__internal_dde7900e6cd5edf2d6d6af3f617ea1f0bfc820950e364a03e9330ca3e57cd7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig"));

        $__internal_057cab37c53463a17c58481475f6278f873658449c5f08cc5d38e2255939bab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057cab37c53463a17c58481475f6278f873658449c5f08cc5d38e2255939bab2->enter($__internal_057cab37c53463a17c58481475f6278f873658449c5f08cc5d38e2255939bab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig"));

        // line 1
        echo "<span class=\"ui green";
        if ((array_key_exists("attached", $context) && ((isset($context["attached"]) || array_key_exists("attached", $context) ? $context["attached"] : (function () { throw new Twig_Error_Runtime('Variable "attached" does not exist.', 1, $this->getSourceContext()); })()) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"check icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_dde7900e6cd5edf2d6d6af3f617ea1f0bfc820950e364a03e9330ca3e57cd7d1->leave($__internal_dde7900e6cd5edf2d6d6af3f617ea1f0bfc820950e364a03e9330ca3e57cd7d1_prof);

        
        $__internal_057cab37c53463a17c58481475f6278f873658449c5f08cc5d38e2255939bab2->leave($__internal_057cab37c53463a17c58481475f6278f873658449c5f08cc5d38e2255939bab2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig";
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
        return new Twig_Source("<span class=\"ui green{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"check icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:paid.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/PaymentState/paid.html.twig");
    }
}
