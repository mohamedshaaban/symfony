<?php

/* SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig */
class __TwigTemplate_5b2c0f2536a3d2e3c91c095bfd0667cef5410d722e5acd41fce2534a15dcf15d extends Twig_Template
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
        $__internal_190489b6d2bffc27c79b58cd29ae6231ff1dedff37d97a2a0b27aef859ca77aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190489b6d2bffc27c79b58cd29ae6231ff1dedff37d97a2a0b27aef859ca77aa->enter($__internal_190489b6d2bffc27c79b58cd29ae6231ff1dedff37d97a2a0b27aef859ca77aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig"));

        $__internal_a7c02b3c2180c3eeac3ede3c1835a44ba7bd3e9db1e1955b3955f73baf8573f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c02b3c2180c3eeac3ede3c1835a44ba7bd3e9db1e1955b3955f73baf8573f3->enter($__internal_a7c02b3c2180c3eeac3ede3c1835a44ba7bd3e9db1e1955b3955f73baf8573f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig"));

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
        
        $__internal_190489b6d2bffc27c79b58cd29ae6231ff1dedff37d97a2a0b27aef859ca77aa->leave($__internal_190489b6d2bffc27c79b58cd29ae6231ff1dedff37d97a2a0b27aef859ca77aa_prof);

        
        $__internal_a7c02b3c2180c3eeac3ede3c1835a44ba7bd3e9db1e1955b3955f73baf8573f3->leave($__internal_a7c02b3c2180c3eeac3ede3c1835a44ba7bd3e9db1e1955b3955f73baf8573f3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig";
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
", "SyliusAdminBundle:Order/Label/PaymentState:cancelled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/PaymentState/cancelled.html.twig");
    }
}
