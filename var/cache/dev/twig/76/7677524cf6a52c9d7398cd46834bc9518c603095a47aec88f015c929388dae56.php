<?php

/* SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig */
class __TwigTemplate_c47b137ed91e81b1c78bb714341711f19104f9871779b8a93b0491e43953d0d2 extends Twig_Template
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
        $__internal_e03511a973304527686bfc06f25824d9d8a3dfa65e776d3149fde369c2dfdedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03511a973304527686bfc06f25824d9d8a3dfa65e776d3149fde369c2dfdedb->enter($__internal_e03511a973304527686bfc06f25824d9d8a3dfa65e776d3149fde369c2dfdedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig"));

        $__internal_1f56bf32ba1c71b4ad6fa2daacf9077ba99a8d0c75ce9de16cdd2cc08382d899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f56bf32ba1c71b4ad6fa2daacf9077ba99a8d0c75ce9de16cdd2cc08382d899->enter($__internal_1f56bf32ba1c71b4ad6fa2daacf9077ba99a8d0c75ce9de16cdd2cc08382d899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig"));

        // line 1
        echo "<span class=\"ui icon label\">
    <i class=\"paint brush icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.default"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.default"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_e03511a973304527686bfc06f25824d9d8a3dfa65e776d3149fde369c2dfdedb->leave($__internal_e03511a973304527686bfc06f25824d9d8a3dfa65e776d3149fde369c2dfdedb_prof);

        
        $__internal_1f56bf32ba1c71b4ad6fa2daacf9077ba99a8d0c75ce9de16cdd2cc08382d899->leave($__internal_1f56bf32ba1c71b4ad6fa2daacf9077ba99a8d0c75ce9de16cdd2cc08382d899_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig";
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
        return new Twig_Source("<span class=\"ui icon label\">
    <i class=\"paint brush icon\"></i>
    {{ data|default('sylius.ui.default'|trans) }}
</span>
", "SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Channel/Grid/Field/themeName.html.twig");
    }
}
