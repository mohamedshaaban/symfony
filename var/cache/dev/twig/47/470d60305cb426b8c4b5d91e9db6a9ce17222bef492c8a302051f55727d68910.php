<?php

/* SyliusAdminBundle:Country:_form.html.twig */
class __TwigTemplate_bd82baab441b308ec41c63087a133ee1ee660b59bbdc0259dc3c26d4f250a15b extends Twig_Template
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
        $__internal_ddb606b2888291e241b9fda16980732ee36734fcacf482a5708696c1b8c04217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb606b2888291e241b9fda16980732ee36734fcacf482a5708696c1b8c04217->enter($__internal_ddb606b2888291e241b9fda16980732ee36734fcacf482a5708696c1b8c04217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Country:_form.html.twig"));

        $__internal_02a03e12e8b7ba4f7b0e8fff5466947d445dfcce496d7e872f436d2c0002b83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a03e12e8b7ba4f7b0e8fff5466947d445dfcce496d7e872f436d2c0002b83f->enter($__internal_02a03e12e8b7ba4f7b0e8fff5466947d445dfcce496d7e872f436d2c0002b83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Country:_form.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "enabled", array()), 'row');
        echo "
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.provinces"), "html", null, true);
        echo "</h4>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "provinces", array()), 'row', array("label" => false));
        echo "
</div>
";
        
        $__internal_ddb606b2888291e241b9fda16980732ee36734fcacf482a5708696c1b8c04217->leave($__internal_ddb606b2888291e241b9fda16980732ee36734fcacf482a5708696c1b8c04217_prof);

        
        $__internal_02a03e12e8b7ba4f7b0e8fff5466947d445dfcce496d7e872f436d2c0002b83f->leave($__internal_02a03e12e8b7ba4f7b0e8fff5466947d445dfcce496d7e872f436d2c0002b83f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Country:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_errors(form) }}
    {{ form_row(form.code) }}
    {{ form_row(form.enabled) }}
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.provinces'|trans }}</h4>
    {{ form_row(form.provinces, {'label': false}) }}
</div>
", "SyliusAdminBundle:Country:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Country/_form.html.twig");
    }
}
