<?php

/* SyliusAdminBundle:Crud/Index:_content.html.twig */
class __TwigTemplate_14569021ff34dc59b10a9ea9f1fed24007ad1b973cb69512791180c863d10dc0 extends Twig_Template
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
        $__internal_8e7b6b73c847a2dada388e6335b42b4449520f8fa6accc9e595fc04bfd0ec708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7b6b73c847a2dada388e6335b42b4449520f8fa6accc9e595fc04bfd0ec708->enter($__internal_8e7b6b73c847a2dada388e6335b42b4449520f8fa6accc9e595fc04bfd0ec708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_content.html.twig"));

        $__internal_278bf4275e71f2c939d310c8cf6738865fda6ce32d31310d3c359604a8ac2b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278bf4275e71f2c939d310c8cf6738865fda6ce32d31310d3c359604a8ac2b5c->enter($__internal_278bf4275e71f2c939d310c8cf6738865fda6ce32d31310d3c359604a8ac2b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_content.html.twig"));

        // line 1
        echo call_user_func_array($this->env->getFunction('sylius_grid_render')->getCallable(), array((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 1, $this->getSourceContext()); })()), "@SyliusUi/Grid/_default.html.twig"));
        echo "
";
        
        $__internal_8e7b6b73c847a2dada388e6335b42b4449520f8fa6accc9e595fc04bfd0ec708->leave($__internal_8e7b6b73c847a2dada388e6335b42b4449520f8fa6accc9e595fc04bfd0ec708_prof);

        
        $__internal_278bf4275e71f2c939d310c8cf6738865fda6ce32d31310d3c359604a8ac2b5c->leave($__internal_278bf4275e71f2c939d310c8cf6738865fda6ce32d31310d3c359604a8ac2b5c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_content.html.twig";
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
", "SyliusAdminBundle:Crud/Index:_content.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Index/_content.html.twig");
    }
}
