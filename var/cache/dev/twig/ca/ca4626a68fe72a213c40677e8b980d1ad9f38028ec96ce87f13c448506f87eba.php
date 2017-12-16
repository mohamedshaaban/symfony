<?php

/* SyliusAdminBundle:Common/Form:_province.html.twig */
class __TwigTemplate_945ca6530a1b7688d71e29324698c971871b76b2b5e29df57b7024e07496b2f0 extends Twig_Template
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
        $__internal_3cadeb3f672a2f53cd2d36c8582948aa3157f5375fdca9488ada397bec5ffd39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cadeb3f672a2f53cd2d36c8582948aa3157f5375fdca9488ada397bec5ffd39->enter($__internal_3cadeb3f672a2f53cd2d36c8582948aa3157f5375fdca9488ada397bec5ffd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Form:_province.html.twig"));

        $__internal_998617a1d2ed5bf8540224859266f076e739d453cab6910347e1950fb7a6474f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998617a1d2ed5bf8540224859266f076e739d453cab6910347e1950fb7a6474f->enter($__internal_998617a1d2ed5bf8540224859266f076e739d453cab6910347e1950fb7a6474f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Form:_province.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'label');
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 3
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "ui dropdown")));
            echo "
";
        } else {
            // line 5
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
            echo "
";
        }
        
        $__internal_3cadeb3f672a2f53cd2d36c8582948aa3157f5375fdca9488ada397bec5ffd39->leave($__internal_3cadeb3f672a2f53cd2d36c8582948aa3157f5375fdca9488ada397bec5ffd39_prof);

        
        $__internal_998617a1d2ed5bf8540224859266f076e739d453cab6910347e1950fb7a6474f->leave($__internal_998617a1d2ed5bf8540224859266f076e739d453cab6910347e1950fb7a6474f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common/Form:_province.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  31 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_label(form) }}
{% if form.vars.choices is defined %}
    {{ form_widget(form, {'attr': {'class': 'ui dropdown'}}) }}
{% else %}
    {{ form_widget(form) }}
{% endif %}
", "SyliusAdminBundle:Common/Form:_province.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Common/Form/_province.html.twig");
    }
}
