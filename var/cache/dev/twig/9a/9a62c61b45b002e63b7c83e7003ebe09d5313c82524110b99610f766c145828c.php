<?php

/* SyliusUiBundle:Grid/Field:position.html.twig */
class __TwigTemplate_25885ea3f999d0211f770bbf23c567b2b42db29eab35639c153778c3428830aa extends Twig_Template
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
        $__internal_2151afbc2d87ec80a28c0c3cf40ede524f0d5357d4ba4d7b523969ebe04bc2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2151afbc2d87ec80a28c0c3cf40ede524f0d5357d4ba4d7b523969ebe04bc2ec->enter($__internal_2151afbc2d87ec80a28c0c3cf40ede524f0d5357d4ba4d7b523969ebe04bc2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:position.html.twig"));

        $__internal_5483ef53780bef8f01be4c9f584b7e6423971edf4215532927cd613d043145d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5483ef53780bef8f01be4c9f584b7e6423971edf4215532927cd613d043145d9->enter($__internal_5483ef53780bef8f01be4c9f584b7e6423971edf4215532927cd613d043145d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:position.html.twig"));

        // line 1
        echo "<div style=\"text-align: center;\"><span class=\"ui circular label\">";
        echo twig_escape_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</span></div>
";
        
        $__internal_2151afbc2d87ec80a28c0c3cf40ede524f0d5357d4ba4d7b523969ebe04bc2ec->leave($__internal_2151afbc2d87ec80a28c0c3cf40ede524f0d5357d4ba4d7b523969ebe04bc2ec_prof);

        
        $__internal_5483ef53780bef8f01be4c9f584b7e6423971edf4215532927cd613d043145d9->leave($__internal_5483ef53780bef8f01be4c9f584b7e6423971edf4215532927cd613d043145d9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:position.html.twig";
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
", "SyliusUiBundle:Grid/Field:position.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/position.html.twig");
    }
}
