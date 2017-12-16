<?php

/* SyliusAdminBundle:Locale:_form.html.twig */
class __TwigTemplate_bf381d05855e2d215f13fc6fbe5a172bae59cbb5553ed5005cb8ec3f995cd672 extends Twig_Template
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
        $__internal_985738866d69b710d68ee2299eb3e34d04ffe466f66b057796baac6389ff87f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985738866d69b710d68ee2299eb3e34d04ffe466f66b057796baac6389ff87f0->enter($__internal_985738866d69b710d68ee2299eb3e34d04ffe466f66b057796baac6389ff87f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Locale:_form.html.twig"));

        $__internal_9d5b4f120f170b8a95232bde707a79320b94bd9cdc3f0cfbd9e850b391394157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5b4f120f170b8a95232bde707a79320b94bd9cdc3f0cfbd9e850b391394157->enter($__internal_9d5b4f120f170b8a95232bde707a79320b94bd9cdc3f0cfbd9e850b391394157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Locale:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'errors');
        echo "
<div class=\"one field\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
</div>
";
        
        $__internal_985738866d69b710d68ee2299eb3e34d04ffe466f66b057796baac6389ff87f0->leave($__internal_985738866d69b710d68ee2299eb3e34d04ffe466f66b057796baac6389ff87f0_prof);

        
        $__internal_9d5b4f120f170b8a95232bde707a79320b94bd9cdc3f0cfbd9e850b391394157->leave($__internal_9d5b4f120f170b8a95232bde707a79320b94bd9cdc3f0cfbd9e850b391394157_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Locale:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
<div class=\"one field\">
    {{ form_row(form.code) }}
</div>
", "SyliusAdminBundle:Locale:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Locale/_form.html.twig");
    }
}
