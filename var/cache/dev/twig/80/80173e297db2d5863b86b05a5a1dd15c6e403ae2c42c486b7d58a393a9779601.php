<?php

/* SyliusAdminBundle:Order/Label/State:fulfilled.html.twig */
class __TwigTemplate_37ad38a7df313fc4753c82f47bb81d76e5e57adc77e6f334d3bc676cd16f4d69 extends Twig_Template
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
        $__internal_28b98cb2e3a4e3d0a0d83ba306bdc603076cf9c08836d6e29c42e2d912b6bcb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b98cb2e3a4e3d0a0d83ba306bdc603076cf9c08836d6e29c42e2d912b6bcb9->enter($__internal_28b98cb2e3a4e3d0a0d83ba306bdc603076cf9c08836d6e29c42e2d912b6bcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:fulfilled.html.twig"));

        $__internal_a5fcc01c1a20bb79701201758d9e10670ff352cfeddf4b246dd194513c873c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fcc01c1a20bb79701201758d9e10670ff352cfeddf4b246dd194513c873c54->enter($__internal_a5fcc01c1a20bb79701201758d9e10670ff352cfeddf4b246dd194513c873c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:fulfilled.html.twig"));

        // line 1
        echo "<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_28b98cb2e3a4e3d0a0d83ba306bdc603076cf9c08836d6e29c42e2d912b6bcb9->leave($__internal_28b98cb2e3a4e3d0a0d83ba306bdc603076cf9c08836d6e29c42e2d912b6bcb9_prof);

        
        $__internal_a5fcc01c1a20bb79701201758d9e10670ff352cfeddf4b246dd194513c873c54->leave($__internal_a5fcc01c1a20bb79701201758d9e10670ff352cfeddf4b246dd194513c873c54_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/State:fulfilled.html.twig";
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
        return new Twig_Source("<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/State:fulfilled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/State/fulfilled.html.twig");
    }
}
