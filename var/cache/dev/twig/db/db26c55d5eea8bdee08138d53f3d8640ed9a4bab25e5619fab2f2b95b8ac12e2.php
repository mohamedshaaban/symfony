<?php

/* SyliusUiBundle:Grid/Field:humanized.html.twig */
class __TwigTemplate_ed947325f7d957662b3197e372d163008a00a6c14e0461448378b58118646cdc extends Twig_Template
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
        $__internal_7d4dd5ba89c037901f1d3a3d371cf2c1b9c5bebd1576a1d2a379a9c772fa63d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4dd5ba89c037901f1d3a3d371cf2c1b9c5bebd1576a1d2a379a9c772fa63d8->enter($__internal_7d4dd5ba89c037901f1d3a3d371cf2c1b9c5bebd1576a1d2a379a9c772fa63d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:humanized.html.twig"));

        $__internal_496b6a8bbd40e33ea8a6847bbbc09191c4cb8d2357980ab6253dc5e2886a6dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496b6a8bbd40e33ea8a6847bbbc09191c4cb8d2357980ab6253dc5e2886a6dd8->enter($__internal_496b6a8bbd40e33ea8a6847bbbc09191c4cb8d2357980ab6253dc5e2886a6dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:humanized.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })())), "html", null, true);
        echo "
";
        
        $__internal_7d4dd5ba89c037901f1d3a3d371cf2c1b9c5bebd1576a1d2a379a9c772fa63d8->leave($__internal_7d4dd5ba89c037901f1d3a3d371cf2c1b9c5bebd1576a1d2a379a9c772fa63d8_prof);

        
        $__internal_496b6a8bbd40e33ea8a6847bbbc09191c4cb8d2357980ab6253dc5e2886a6dd8->leave($__internal_496b6a8bbd40e33ea8a6847bbbc09191c4cb8d2357980ab6253dc5e2886a6dd8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:humanized.html.twig";
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
        return new Twig_Source("{{ data|humanize }}
", "SyliusUiBundle:Grid/Field:humanized.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/humanized.html.twig");
    }
}
