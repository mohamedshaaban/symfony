<?php

/* @SyliusAdmin/Crud/Index/_content.html.twig */
class __TwigTemplate_3a4d6a1908d73729d9b394f14116821dbaed7c4277615f25e3d0314369c1bd01 extends Twig_Template
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
        $__internal_021e04fdbccf1a1b3082310b9e16f0f8b4f0fcf7c61a7179c571b5c7a582409b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021e04fdbccf1a1b3082310b9e16f0f8b4f0fcf7c61a7179c571b5c7a582409b->enter($__internal_021e04fdbccf1a1b3082310b9e16f0f8b4f0fcf7c61a7179c571b5c7a582409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_content.html.twig"));

        $__internal_b8fec41918e1b32956465e94b3ddce079dc022bb41c324eadfe3ffa2accad534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fec41918e1b32956465e94b3ddce079dc022bb41c324eadfe3ffa2accad534->enter($__internal_b8fec41918e1b32956465e94b3ddce079dc022bb41c324eadfe3ffa2accad534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_content.html.twig"));

        // line 1
        echo call_user_func_array($this->env->getFunction('sylius_grid_render')->getCallable(), array((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 1, $this->getSourceContext()); })()), "@SyliusUi/Grid/_default.html.twig"));
        echo "
";
        
        $__internal_021e04fdbccf1a1b3082310b9e16f0f8b4f0fcf7c61a7179c571b5c7a582409b->leave($__internal_021e04fdbccf1a1b3082310b9e16f0f8b4f0fcf7c61a7179c571b5c7a582409b_prof);

        
        $__internal_b8fec41918e1b32956465e94b3ddce079dc022bb41c324eadfe3ffa2accad534->leave($__internal_b8fec41918e1b32956465e94b3ddce079dc022bb41c324eadfe3ffa2accad534_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Index/_content.html.twig";
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
        return new Twig_Source("{{ sylius_grid_render(resources, '@SyliusUi/Grid/_default.html.twig') }}
", "@SyliusAdmin/Crud/Index/_content.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Index\\_content.html.twig");
    }
}
