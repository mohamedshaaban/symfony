<?php

/* SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig */
class __TwigTemplate_d55513c7c08d5ce355db848fb7c7cb493695a8e494579cea256fdf6cfd465810 extends Twig_Template
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
        $__internal_bf017062c33c6d684c6ca8be43e2a9c0a0be756bbd406ba98ac29420c4ccf014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf017062c33c6d684c6ca8be43e2a9c0a0be756bbd406ba98ac29420c4ccf014->enter($__internal_bf017062c33c6d684c6ca8be43e2a9c0a0be756bbd406ba98ac29420c4ccf014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig"));

        $__internal_e46d6bd602d3fd7c33516a3e37c0c9e8110c36b3bc586c79e9bd058d5c4d8b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46d6bd602d3fd7c33516a3e37c0c9e8110c36b3bc586c79e9bd058d5c4d8b69->enter($__internal_e46d6bd602d3fd7c33516a3e37c0c9e8110c36b3bc586c79e9bd058d5c4d8b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig"));

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
        
        $__internal_bf017062c33c6d684c6ca8be43e2a9c0a0be756bbd406ba98ac29420c4ccf014->leave($__internal_bf017062c33c6d684c6ca8be43e2a9c0a0be756bbd406ba98ac29420c4ccf014_prof);

        
        $__internal_e46d6bd602d3fd7c33516a3e37c0c9e8110c36b3bc586c79e9bd058d5c4d8b69->leave($__internal_e46d6bd602d3fd7c33516a3e37c0c9e8110c36b3bc586c79e9bd058d5c4d8b69_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig";
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
", "SyliusAdminBundle:Order/Label/PaymentState:partially_paid.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/PaymentState/partially_paid.html.twig");
    }
}
