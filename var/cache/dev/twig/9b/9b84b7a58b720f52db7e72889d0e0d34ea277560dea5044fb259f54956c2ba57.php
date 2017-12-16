<?php

/* SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig */
class __TwigTemplate_5be9257f1baabe55a0e85e0c6af6c3f2b134bd2bc8ca4ba1fe307ca48c04b8f9 extends Twig_Template
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
        $__internal_10306a2fbbde37ea7939e58d47f210db839d9acd4ce266b59a3411e993b7c7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10306a2fbbde37ea7939e58d47f210db839d9acd4ce266b59a3411e993b7c7b2->enter($__internal_10306a2fbbde37ea7939e58d47f210db839d9acd4ce266b59a3411e993b7c7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig"));

        $__internal_3f168f87dffd75baa26758dd9cd5293edd2f2859e8651285a0dd0fed678dad78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f168f87dffd75baa26758dd9cd5293edd2f2859e8651285a0dd0fed678dad78->enter($__internal_3f168f87dffd75baa26758dd9cd5293edd2f2859e8651285a0dd0fed678dad78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig"));

        // line 1
        echo "<span class=\"ui yellow";
        if ((array_key_exists("attached", $context) && ((isset($context["attached"]) || array_key_exists("attached", $context) ? $context["attached"] : (function () { throw new Twig_Error_Runtime('Variable "attached" does not exist.', 1, $this->getSourceContext()); })()) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_10306a2fbbde37ea7939e58d47f210db839d9acd4ce266b59a3411e993b7c7b2->leave($__internal_10306a2fbbde37ea7939e58d47f210db839d9acd4ce266b59a3411e993b7c7b2_prof);

        
        $__internal_3f168f87dffd75baa26758dd9cd5293edd2f2859e8651285a0dd0fed678dad78->leave($__internal_3f168f87dffd75baa26758dd9cd5293edd2f2859e8651285a0dd0fed678dad78_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig";
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
    <i class=\"ban icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/ShippingState/cancelled.html.twig");
    }
}
