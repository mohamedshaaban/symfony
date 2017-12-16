<?php

/* @SyliusUi/_javascripts.html.twig */
class __TwigTemplate_937d1a5b525389dc55e40b2cca76b94afbeee18f485d10624e1f9e4a8298cc47 extends Twig_Template
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
        $__internal_bebea44c3db69a6214b0d69ce5ac72c78ec52b0586fecf7596f6a635460dc996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebea44c3db69a6214b0d69ce5ac72c78ec52b0586fecf7596f6a635460dc996->enter($__internal_bebea44c3db69a6214b0d69ce5ac72c78ec52b0586fecf7596f6a635460dc996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_javascripts.html.twig"));

        $__internal_8ce5e150027a4c0d52d7fae338a3320c2d3bfcf84595dcfc43090ae744066661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce5e150027a4c0d52d7fae338a3320c2d3bfcf84595dcfc43090ae744066661->enter($__internal_8ce5e150027a4c0d52d7fae338a3320c2d3bfcf84595dcfc43090ae744066661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_javascripts.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 1, $this->getSourceContext()); })())), "html", null, true);
        echo "\"></script>
";
        
        $__internal_bebea44c3db69a6214b0d69ce5ac72c78ec52b0586fecf7596f6a635460dc996->leave($__internal_bebea44c3db69a6214b0d69ce5ac72c78ec52b0586fecf7596f6a635460dc996_prof);

        
        $__internal_8ce5e150027a4c0d52d7fae338a3320c2d3bfcf84595dcfc43090ae744066661->leave($__internal_8ce5e150027a4c0d52d7fae338a3320c2d3bfcf84595dcfc43090ae744066661_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/_javascripts.html.twig";
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
        return new Twig_Source("<script src=\"{{ asset(path) }}\"></script>
", "@SyliusUi/_javascripts.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\_javascripts.html.twig");
    }
}
