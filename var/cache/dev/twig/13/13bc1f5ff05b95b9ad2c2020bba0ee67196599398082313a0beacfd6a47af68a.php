<?php

/* SyliusUiBundle:Grid/Field:enabled.html.twig */
class __TwigTemplate_c3d4d93f813a167ea3eaa755fe9efd37fce665bb41d2032ba5541d5d700b5f9c extends Twig_Template
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
        $__internal_b233ef82b52e2687ce36b9ad629ee6c6b57df619c981fc10d3fc43b60db13cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b233ef82b52e2687ce36b9ad629ee6c6b57df619c981fc10d3fc43b60db13cb3->enter($__internal_b233ef82b52e2687ce36b9ad629ee6c6b57df619c981fc10d3fc43b60db13cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:enabled.html.twig"));

        $__internal_baf8586f3e38f428decb79ac82cafd95726065fd5ce0bd34e84f454586c63b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf8586f3e38f428decb79ac82cafd95726065fd5ce0bd34e84f454586c63b75->enter($__internal_baf8586f3e38f428decb79ac82cafd95726065fd5ce0bd34e84f454586c63b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:enabled.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusUiBundle:Grid/Field:enabled.html.twig", 1);
        // line 2
        echo $context["label"]->macro_status((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_b233ef82b52e2687ce36b9ad629ee6c6b57df619c981fc10d3fc43b60db13cb3->leave($__internal_b233ef82b52e2687ce36b9ad629ee6c6b57df619c981fc10d3fc43b60db13cb3_prof);

        
        $__internal_baf8586f3e38f428decb79ac82cafd95726065fd5ce0bd34e84f454586c63b75->leave($__internal_baf8586f3e38f428decb79ac82cafd95726065fd5ce0bd34e84f454586c63b75_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:enabled.html.twig";
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
{{ label.status(data) }}
", "SyliusUiBundle:Grid/Field:enabled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/enabled.html.twig");
    }
}
