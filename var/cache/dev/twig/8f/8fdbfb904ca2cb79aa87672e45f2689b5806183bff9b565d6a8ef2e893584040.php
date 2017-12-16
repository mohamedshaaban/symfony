<?php

/* SyliusAdminBundle:Order/Label/State:cancelled.html.twig */
class __TwigTemplate_73e2ca71c1cf0a8af25d643df0ff1701fc7b801836340f92d525f5900e967126 extends Twig_Template
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
        $__internal_76c89d33f28ea7cdf61842ad68e18858dbe6b2f6674eaea58fd173bcedf9554e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c89d33f28ea7cdf61842ad68e18858dbe6b2f6674eaea58fd173bcedf9554e->enter($__internal_76c89d33f28ea7cdf61842ad68e18858dbe6b2f6674eaea58fd173bcedf9554e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:cancelled.html.twig"));

        $__internal_2a291a7ca2edffcc8332e166dd8972b13dce7aca25363fc242044533bc640380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a291a7ca2edffcc8332e166dd8972b13dce7aca25363fc242044533bc640380->enter($__internal_2a291a7ca2edffcc8332e166dd8972b13dce7aca25363fc242044533bc640380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:cancelled.html.twig"));

        // line 1
        echo "<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_76c89d33f28ea7cdf61842ad68e18858dbe6b2f6674eaea58fd173bcedf9554e->leave($__internal_76c89d33f28ea7cdf61842ad68e18858dbe6b2f6674eaea58fd173bcedf9554e_prof);

        
        $__internal_2a291a7ca2edffcc8332e166dd8972b13dce7aca25363fc242044533bc640380->leave($__internal_2a291a7ca2edffcc8332e166dd8972b13dce7aca25363fc242044533bc640380_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/State:cancelled.html.twig";
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
", "SyliusAdminBundle:Order/Label/State:cancelled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/State/cancelled.html.twig");
    }
}
