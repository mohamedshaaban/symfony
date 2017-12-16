<?php

/* SyliusAdminBundle:Order/Label/PaymentState:partially_refunded.html.twig */
class __TwigTemplate_84ba009ff28459bb30dd57fe3821541ed56a65bc7a643b0997b316764a135ff5 extends Twig_Template
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
        $__internal_6e93bfd64c7e739b6c29d392d426d7ccbdd2e712e634425ae7ebcca961535698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e93bfd64c7e739b6c29d392d426d7ccbdd2e712e634425ae7ebcca961535698->enter($__internal_6e93bfd64c7e739b6c29d392d426d7ccbdd2e712e634425ae7ebcca961535698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:partially_refunded.html.twig"));

        $__internal_0c9ec3c95e4bb7de77564ab698fdf37619347b13840a3aff08ef582d266c4700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9ec3c95e4bb7de77564ab698fdf37619347b13840a3aff08ef582d266c4700->enter($__internal_0c9ec3c95e4bb7de77564ab698fdf37619347b13840a3aff08ef582d266c4700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:partially_refunded.html.twig"));

        // line 1
        echo "<span class=\"ui yellow";
        if ((array_key_exists("attached", $context) && ((isset($context["attached"]) || array_key_exists("attached", $context) ? $context["attached"] : (function () { throw new Twig_Error_Runtime('Variable "attached" does not exist.', 1, $this->getSourceContext()); })()) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"reply icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_6e93bfd64c7e739b6c29d392d426d7ccbdd2e712e634425ae7ebcca961535698->leave($__internal_6e93bfd64c7e739b6c29d392d426d7ccbdd2e712e634425ae7ebcca961535698_prof);

        
        $__internal_0c9ec3c95e4bb7de77564ab698fdf37619347b13840a3aff08ef582d266c4700->leave($__internal_0c9ec3c95e4bb7de77564ab698fdf37619347b13840a3aff08ef582d266c4700_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:partially_refunded.html.twig";
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
    <i class=\"reply icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:partially_refunded.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/PaymentState/partially_refunded.html.twig");
    }
}
