<?php

/* SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig */
class __TwigTemplate_b17c72ca13a8f27061f73c2bba548de4f09fd83e40ef445adeff5d006d43b305 extends Twig_Template
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
        $__internal_a5c8edd8ab245496ed747ca39624dbee1082300142cc30c937cab53fbcc12b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c8edd8ab245496ed747ca39624dbee1082300142cc30c937cab53fbcc12b25->enter($__internal_a5c8edd8ab245496ed747ca39624dbee1082300142cc30c937cab53fbcc12b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig"));

        $__internal_51ab5928c375cf32c196f6651e7b10e0729754835fa859497af9c70202d49372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ab5928c375cf32c196f6651e7b10e0729754835fa859497af9c70202d49372->enter($__internal_51ab5928c375cf32c196f6651e7b10e0729754835fa859497af9c70202d49372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig"));

        // line 1
        echo "<div class=\"ui labeled icon top right floating dropdown button primary link\">
    <i class=\"plus icon\"></i>
    <span class=\"text\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
        echo "</span>
    <div class=\"menu\">
        <div class=\"header\">
            <i class=\"cube icon\"></i>
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.type"), "html", null, true);
        echo "
        </div>
        <div class=\"divider\"></div>
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_get_attribute_types"));
        echo "
    </div>
</div>
";
        
        $__internal_a5c8edd8ab245496ed747ca39624dbee1082300142cc30c937cab53fbcc12b25->leave($__internal_a5c8edd8ab245496ed747ca39624dbee1082300142cc30c937cab53fbcc12b25_prof);

        
        $__internal_51ab5928c375cf32c196f6651e7b10e0729754835fa859497af9c70202d49372->leave($__internal_51ab5928c375cf32c196f6651e7b10e0729754835fa859497af9c70202d49372_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  36 => 7,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui labeled icon top right floating dropdown button primary link\">
    <i class=\"plus icon\"></i>
    <span class=\"text\">{{ 'sylius.ui.create'|trans }}</span>
    <div class=\"menu\">
        <div class=\"header\">
            <i class=\"cube icon\"></i>
            {{ 'sylius.ui.type'|trans }}
        </div>
        <div class=\"divider\"></div>
        {{ render(url('sylius_admin_get_attribute_types')) }}
    </div>
</div>
", "SyliusAdminBundle:ProductAttribute/Grid/Action:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductAttribute/Grid/Action/create.html.twig");
    }
}
