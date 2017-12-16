<?php

/* SyliusAdminBundle:TaxCategory:_form.html.twig */
class __TwigTemplate_8049bd6f1bd706b488b752eaa0115fe132b1a384e9b5e297ee0cafe7025a304c extends Twig_Template
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
        $__internal_f9efb88bdc2c1e111df8d37b89ee66cbe1c22c74e16496afc1e340066ed7826e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9efb88bdc2c1e111df8d37b89ee66cbe1c22c74e16496afc1e340066ed7826e->enter($__internal_f9efb88bdc2c1e111df8d37b89ee66cbe1c22c74e16496afc1e340066ed7826e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:TaxCategory:_form.html.twig"));

        $__internal_6a5e31ce0bc733c11fbcd23955789bd2b5c4e4935f37c4042f1ec5eabcbe847e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5e31ce0bc733c11fbcd23955789bd2b5c4e4935f37c4042f1ec5eabcbe847e->enter($__internal_6a5e31ce0bc733c11fbcd23955789bd2b5c4e4935f37c4042f1ec5eabcbe847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:TaxCategory:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'errors');
        echo "
<div class=\"two fields\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
</div>
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "description", array()), 'row');
        echo "
";
        
        $__internal_f9efb88bdc2c1e111df8d37b89ee66cbe1c22c74e16496afc1e340066ed7826e->leave($__internal_f9efb88bdc2c1e111df8d37b89ee66cbe1c22c74e16496afc1e340066ed7826e_prof);

        
        $__internal_6a5e31ce0bc733c11fbcd23955789bd2b5c4e4935f37c4042f1ec5eabcbe847e->leave($__internal_6a5e31ce0bc733c11fbcd23955789bd2b5c4e4935f37c4042f1ec5eabcbe847e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:TaxCategory:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  34 => 4,  30 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
<div class=\"two fields\">
    {{ form_row(form.code) }}
    {{ form_row(form.name) }}
</div>
{{ form_row(form.description) }}
", "SyliusAdminBundle:TaxCategory:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/TaxCategory/_form.html.twig");
    }
}
