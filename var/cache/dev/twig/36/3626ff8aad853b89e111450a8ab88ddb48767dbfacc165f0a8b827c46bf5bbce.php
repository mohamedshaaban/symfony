<?php

/* SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig */
class __TwigTemplate_950284885cdbf59af09a11cc8c18313505dc9ee4c5fbfa2db1bdf2e8663e38e3 extends Twig_Template
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
        $__internal_4b48ebf85c48ae914d51c2d2576452b052fe9a675e498f03d40dc40c2edae75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b48ebf85c48ae914d51c2d2576452b052fe9a675e498f03d40dc40c2edae75e->enter($__internal_4b48ebf85c48ae914d51c2d2576452b052fe9a675e498f03d40dc40c2edae75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig"));

        $__internal_9afe65172f0b92696ed93bad8fb2a5c271041f1a39aa619b28174b55964a2d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afe65172f0b92696ed93bad8fb2a5c271041f1a39aa619b28174b55964a2d67->enter($__internal_9afe65172f0b92696ed93bad8fb2a5c271041f1a39aa619b28174b55964a2d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_get_payment_gateways"));
        echo "
    </div>
</div>
";
        
        $__internal_4b48ebf85c48ae914d51c2d2576452b052fe9a675e498f03d40dc40c2edae75e->leave($__internal_4b48ebf85c48ae914d51c2d2576452b052fe9a675e498f03d40dc40c2edae75e_prof);

        
        $__internal_9afe65172f0b92696ed93bad8fb2a5c271041f1a39aa619b28174b55964a2d67->leave($__internal_9afe65172f0b92696ed93bad8fb2a5c271041f1a39aa619b28174b55964a2d67_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig";
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
        {{ render(url('sylius_admin_get_payment_gateways')) }}
    </div>
</div>
", "SyliusAdminBundle:PaymentMethod/Grid/Action:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PaymentMethod/Grid/Action/create.html.twig");
    }
}
