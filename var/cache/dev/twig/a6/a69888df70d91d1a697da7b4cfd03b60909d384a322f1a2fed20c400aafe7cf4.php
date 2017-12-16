<?php

/* SyliusUiBundle:Grid/Filter:date.html.twig */
class __TwigTemplate_8de45ed433f6f74a9657e92eaccdef6f5ea29bbe47b6f7a0fd5c2e910fcfdd1b extends Twig_Template
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
        $__internal_c1c7450ebc0cb616c9d2245b9caa97be95cc3772b92b6ff130e386aeb3c36258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c7450ebc0cb616c9d2245b9caa97be95cc3772b92b6ff130e386aeb3c36258->enter($__internal_c1c7450ebc0cb616c9d2245b9caa97be95cc3772b92b6ff130e386aeb3c36258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:date.html.twig"));

        $__internal_74cc377193cb9d4df3ea234a50605524e3f80eac3e2f3fc391de0083117ad94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cc377193cb9d4df3ea234a50605524e3f80eac3e2f3fc391de0083117ad94b->enter($__internal_74cc377193cb9d4df3ea234a50605524e3f80eac3e2f3fc391de0083117ad94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:date.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "from", array()), 'row', array("label" => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 3, $this->getSourceContext()); })()), "label", array())) . " | ") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "from", array()), "vars", array()), "label", array())))));
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "to", array()), 'row');
        echo "
";
        
        $__internal_c1c7450ebc0cb616c9d2245b9caa97be95cc3772b92b6ff130e386aeb3c36258->leave($__internal_c1c7450ebc0cb616c9d2245b9caa97be95cc3772b92b6ff130e386aeb3c36258_prof);

        
        $__internal_74cc377193cb9d4df3ea234a50605524e3f80eac3e2f3fc391de0083117ad94b->leave($__internal_74cc377193cb9d4df3ea234a50605524e3f80eac3e2f3fc391de0083117ad94b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{{ form_row(form.from, {'label': filter.label|trans ~ ' | ' ~ form.from.vars.label|trans }) }}
{{ form_row(form.to) }}
", "SyliusUiBundle:Grid/Filter:date.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Filter/date.html.twig");
    }
}
