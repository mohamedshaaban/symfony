<?php

/* @SyliusUi/Grid/Field/position.html.twig */
class __TwigTemplate_57d08365bfd3500cdd0ade8a7a1a9fb61485e2d0ce013e136a7aae0629ab5483 extends Twig_Template
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
        $__internal_04ca2629b714e0c2b15b8fcaa2176083661dcf296059f76926ea21eb7794c730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ca2629b714e0c2b15b8fcaa2176083661dcf296059f76926ea21eb7794c730->enter($__internal_04ca2629b714e0c2b15b8fcaa2176083661dcf296059f76926ea21eb7794c730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Field/position.html.twig"));

        $__internal_8e2e39c97b528128a93bfc1990db24afa32b9edf0a7a164b56553186cc71ea6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2e39c97b528128a93bfc1990db24afa32b9edf0a7a164b56553186cc71ea6a->enter($__internal_8e2e39c97b528128a93bfc1990db24afa32b9edf0a7a164b56553186cc71ea6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Field/position.html.twig"));

        // line 1
        echo "<div style=\"text-align: center;\"><span class=\"ui circular label\">";
        echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</span></div>
";
        
        $__internal_04ca2629b714e0c2b15b8fcaa2176083661dcf296059f76926ea21eb7794c730->leave($__internal_04ca2629b714e0c2b15b8fcaa2176083661dcf296059f76926ea21eb7794c730_prof);

        
        $__internal_8e2e39c97b528128a93bfc1990db24afa32b9edf0a7a164b56553186cc71ea6a->leave($__internal_8e2e39c97b528128a93bfc1990db24afa32b9edf0a7a164b56553186cc71ea6a_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Field/position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"text-align: center;\"><span class=\"ui circular label\">{{ data }}</span></div>
", "@SyliusUi/Grid/Field/position.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\Field\\position.html.twig");
    }
}
