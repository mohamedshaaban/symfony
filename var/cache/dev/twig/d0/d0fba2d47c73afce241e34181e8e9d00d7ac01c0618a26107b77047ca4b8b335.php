<?php

/* SyliusUiBundle:Grid/Field:yesNo.html.twig */
class __TwigTemplate_0385c5cb225c598f782c6750dd6b48f8e8b6b2d56c0477b6beff741e9389a809 extends Twig_Template
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
        $__internal_fc1de6a519ea321e466b642ba576a05176a926098ca96579acb7194cc478d01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1de6a519ea321e466b642ba576a05176a926098ca96579acb7194cc478d01e->enter($__internal_fc1de6a519ea321e466b642ba576a05176a926098ca96579acb7194cc478d01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:yesNo.html.twig"));

        $__internal_9956b6f066c84bd70f7e36e1ed473c94361b6db6d90165716c8bc9befa11ea83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9956b6f066c84bd70f7e36e1ed473c94361b6db6d90165716c8bc9befa11ea83->enter($__internal_9956b6f066c84bd70f7e36e1ed473c94361b6db6d90165716c8bc9befa11ea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:yesNo.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusUiBundle:Grid/Field:yesNo.html.twig", 1);
        // line 2
        echo $context["label"]->macro_yesNo((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_fc1de6a519ea321e466b642ba576a05176a926098ca96579acb7194cc478d01e->leave($__internal_fc1de6a519ea321e466b642ba576a05176a926098ca96579acb7194cc478d01e_prof);

        
        $__internal_9956b6f066c84bd70f7e36e1ed473c94361b6db6d90165716c8bc9befa11ea83->leave($__internal_9956b6f066c84bd70f7e36e1ed473c94361b6db6d90165716c8bc9befa11ea83_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:yesNo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}
{{ label.yesNo(data) }}
", "SyliusUiBundle:Grid/Field:yesNo.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/yesNo.html.twig");
    }
}
