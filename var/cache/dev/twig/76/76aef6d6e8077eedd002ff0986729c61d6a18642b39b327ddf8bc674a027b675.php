<?php

/* SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig */
class __TwigTemplate_38bd94b8a047a8dd8e29960a18303a58cf4476e7e2bd45f79c70455fc53061c0 extends Twig_Template
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
        $__internal_6f3db0d6d742e0a527adc4d604ddda295c7bf34a4335ba53dfb7916e498ef6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3db0d6d742e0a527adc4d604ddda295c7bf34a4335ba53dfb7916e498ef6f4->enter($__internal_6f3db0d6d742e0a527adc4d604ddda295c7bf34a4335ba53dfb7916e498ef6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig"));

        $__internal_d6121b2571a7b168457d88840d710f9b5f22e7f80586d077d0c29c315421bdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6121b2571a7b168457d88840d710f9b5f22e7f80586d077d0c29c315421bdd2->enter($__internal_d6121b2571a7b168457d88840d710f9b5f22e7f80586d077d0c29c315421bdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig"));

        // line 1
        echo "<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_6f3db0d6d742e0a527adc4d604ddda295c7bf34a4335ba53dfb7916e498ef6f4->leave($__internal_6f3db0d6d742e0a527adc4d604ddda295c7bf34a4335ba53dfb7916e498ef6f4_prof);

        
        $__internal_d6121b2571a7b168457d88840d710f9b5f22e7f80586d077d0c29c315421bdd2->leave($__internal_d6121b2571a7b168457d88840d710f9b5f22e7f80586d077d0c29c315421bdd2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    {{ value|trans }}
</span>
", "SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/Order/Label/State/cancelled.html.twig");
    }
}
