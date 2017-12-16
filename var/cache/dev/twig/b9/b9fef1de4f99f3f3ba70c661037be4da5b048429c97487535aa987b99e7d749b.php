<?php

/* SyliusAdminBundle:Currency:_form.html.twig */
class __TwigTemplate_4206a4e8e62240fc2c05da3bd7c218f553d345d46358864c8fd044d0197d3254 extends Twig_Template
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
        $__internal_f7dd164554753544c893a5180ca614e8aa5ec6df2ed5732bea54c21b1675b338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7dd164554753544c893a5180ca614e8aa5ec6df2ed5732bea54c21b1675b338->enter($__internal_f7dd164554753544c893a5180ca614e8aa5ec6df2ed5732bea54c21b1675b338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Currency:_form.html.twig"));

        $__internal_cc62a6d4892c163cf0ba4251f86ca0cdc183f121894ef0668aa6f9da280cfd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc62a6d4892c163cf0ba4251f86ca0cdc183f121894ef0668aa6f9da280cfd7c->enter($__internal_cc62a6d4892c163cf0ba4251f86ca0cdc183f121894ef0668aa6f9da280cfd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Currency:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'errors');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
";
        
        $__internal_f7dd164554753544c893a5180ca614e8aa5ec6df2ed5732bea54c21b1675b338->leave($__internal_f7dd164554753544c893a5180ca614e8aa5ec6df2ed5732bea54c21b1675b338_prof);

        
        $__internal_cc62a6d4892c163cf0ba4251f86ca0cdc183f121894ef0668aa6f9da280cfd7c->leave($__internal_cc62a6d4892c163cf0ba4251f86ca0cdc183f121894ef0668aa6f9da280cfd7c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Currency:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
{{ form_row(form.code) }}
", "SyliusAdminBundle:Currency:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Currency/_form.html.twig");
    }
}
