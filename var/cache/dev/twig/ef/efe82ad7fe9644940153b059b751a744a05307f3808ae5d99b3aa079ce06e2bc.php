<?php

/* SyliusShopBundle:Login:_header.html.twig */
class __TwigTemplate_f52e13c4d2f24aed096ba84a6963320df14dfb015db17a0dd324bd1c00d1de72 extends Twig_Template
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
        $__internal_34b97666c592c73c6f2ac4806ca555e596456495f53a0b94804a571ed1ab0045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b97666c592c73c6f2ac4806ca555e596456495f53a0b94804a571ed1ab0045->enter($__internal_34b97666c592c73c6f2ac4806ca555e596456495f53a0b94804a571ed1ab0045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_header.html.twig"));

        $__internal_9a130a3a2bab8ea8ea5913bb40c07f9bad72b3bad0d294581bf523944e7bec86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a130a3a2bab8ea8ea5913bb40c07f9bad72b3bad0d294581bf523944e7bec86->enter($__internal_9a130a3a2bab8ea8ea5913bb40c07f9bad72b3bad0d294581bf523944e7bec86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_header.html.twig"));

        // line 1
        echo "<h1 class=\"ui header\">
    <i class=\"circular user icon\"></i>
    <div class=\"content\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_login"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.access_your_store_account_or_create_a_new_one"), "html", null, true);
        echo "</div>
    </div>
</h1>

";
        
        $__internal_34b97666c592c73c6f2ac4806ca555e596456495f53a0b94804a571ed1ab0045->leave($__internal_34b97666c592c73c6f2ac4806ca555e596456495f53a0b94804a571ed1ab0045_prof);

        
        $__internal_9a130a3a2bab8ea8ea5913bb40c07f9bad72b3bad0d294581bf523944e7bec86->leave($__internal_9a130a3a2bab8ea8ea5913bb40c07f9bad72b3bad0d294581bf523944e7bec86_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Login:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"ui header\">
    <i class=\"circular user icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.customer_login'|trans }}
        <div class=\"sub header\">{{ 'sylius.ui.access_your_store_account_or_create_a_new_one'|trans }}</div>
    </div>
</h1>

", "SyliusShopBundle:Login:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Login/_header.html.twig");
    }
}
