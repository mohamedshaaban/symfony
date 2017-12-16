<?php

/* SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig */
class __TwigTemplate_73efa879cf2ab9589a7a6a29b99602a64bef2e7f4c1c0a2db4edee8dfb080ee0 extends Twig_Template
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
        $__internal_32fac26108ec268bef725111e6c48aadae64a21da0a1205c145d6b13f5b5efa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fac26108ec268bef725111e6c48aadae64a21da0a1205c145d6b13f5b5efa5->enter($__internal_32fac26108ec268bef725111e6c48aadae64a21da0a1205c145d6b13f5b5efa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig"));

        $__internal_40a3fadc6ad0b1cacb424c6200ff58344cb9cf89211148b93f5d584de62d24ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a3fadc6ad0b1cacb424c6200ff58344cb9cf89211148b93f5d584de62d24ea->enter($__internal_40a3fadc6ad0b1cacb424c6200ff58344cb9cf89211148b93f5d584de62d24ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig"));

        // line 1
        echo "<span class=\"ui green";
        if ((array_key_exists("attached", $context) && ((isset($context["attached"]) || array_key_exists("attached", $context) ? $context["attached"] : (function () { throw new Twig_Error_Runtime('Variable "attached" does not exist.', 1, $this->getSourceContext()); })()) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"plane icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_32fac26108ec268bef725111e6c48aadae64a21da0a1205c145d6b13f5b5efa5->leave($__internal_32fac26108ec268bef725111e6c48aadae64a21da0a1205c145d6b13f5b5efa5_prof);

        
        $__internal_40a3fadc6ad0b1cacb424c6200ff58344cb9cf89211148b93f5d584de62d24ea->leave($__internal_40a3fadc6ad0b1cacb424c6200ff58344cb9cf89211148b93f5d584de62d24ea_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig";
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
    <i class=\"plane icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/ShippingState:shipped.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/ShippingState/shipped.html.twig");
    }
}
