<?php

/* SyliusAdminBundle:Order/Label/State:new.html.twig */
class __TwigTemplate_d66cd0b3921900f683dd8d22a57ef3719336115f3e3dae97e28f7ede5c2d7835 extends Twig_Template
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
        $__internal_b8fb1094a2f4e58289542124e875d501cbd4ee95dab509d67f12074d08ec5118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fb1094a2f4e58289542124e875d501cbd4ee95dab509d67f12074d08ec5118->enter($__internal_b8fb1094a2f4e58289542124e875d501cbd4ee95dab509d67f12074d08ec5118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:new.html.twig"));

        $__internal_964d437ba4cfae221901507f900bb4507db9409a1b0d20d0c9715cf4c3567db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964d437ba4cfae221901507f900bb4507db9409a1b0d20d0c9715cf4c3567db4->enter($__internal_964d437ba4cfae221901507f900bb4507db9409a1b0d20d0c9715cf4c3567db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:new.html.twig"));

        // line 1
        echo "<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_b8fb1094a2f4e58289542124e875d501cbd4ee95dab509d67f12074d08ec5118->leave($__internal_b8fb1094a2f4e58289542124e875d501cbd4ee95dab509d67f12074d08ec5118_prof);

        
        $__internal_964d437ba4cfae221901507f900bb4507db9409a1b0d20d0c9715cf4c3567db4->leave($__internal_964d437ba4cfae221901507f900bb4507db9409a1b0d20d0c9715cf4c3567db4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/State:new.html.twig";
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
        return new Twig_Source("<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/State:new.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/State/new.html.twig");
    }
}
