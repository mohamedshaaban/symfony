<?php

/* SyliusAdminBundle:ProductOption:_form.html.twig */
class __TwigTemplate_412f95be4a0f75335690c5fff4699e280e9f4080eec53f641caebe83ff309402 extends Twig_Template
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
        $__internal_29d322d6a0b88acbdbe5d1aa7596a68b6c225a6c8461b44a1cc81e76a64910f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d322d6a0b88acbdbe5d1aa7596a68b6c225a6c8461b44a1cc81e76a64910f7->enter($__internal_29d322d6a0b88acbdbe5d1aa7596a68b6c225a6c8461b44a1cc81e76a64910f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductOption:_form.html.twig"));

        $__internal_37eb550f112fc383287774bfc0a696a2d725f3dd7870b549b2fd89a0f0571d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37eb550f112fc383287774bfc0a696a2d725f3dd7870b549b2fd89a0f0571d42->enter($__internal_37eb550f112fc383287774bfc0a696a2d725f3dd7870b549b2fd89a0f0571d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductOption:_form.html.twig"));

        // line 1
        $context["__internal_adb195b6bc24d310aebe0ce17aa326ae665bee8c8003f9bb22a04ab94348a752"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductOption:_form.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "
    <div class=\"two fields\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "position", array()), 'row');
        echo "
    </div>
    ";
        // line 9
        echo $context["__internal_adb195b6bc24d310aebe0ce17aa326ae665bee8c8003f9bb22a04ab94348a752"]->macro_translationForm(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "translations", array()));
        echo "
</div>
<h4 class=\"ui dividing header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.values"), "html", null, true);
        echo "</h4>
";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "values", array()), 'row');
        echo "
";
        
        $__internal_29d322d6a0b88acbdbe5d1aa7596a68b6c225a6c8461b44a1cc81e76a64910f7->leave($__internal_29d322d6a0b88acbdbe5d1aa7596a68b6c225a6c8461b44a1cc81e76a64910f7_prof);

        
        $__internal_37eb550f112fc383287774bfc0a696a2d725f3dd7870b549b2fd89a0f0571d42->leave($__internal_37eb550f112fc383287774bfc0a696a2d725f3dd7870b549b2fd89a0f0571d42_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductOption:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  50 => 11,  45 => 9,  40 => 7,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui segment\">
    {{ form_errors(form) }}
    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.position) }}
    </div>
    {{ translationForm(form.translations) }}
</div>
<h4 class=\"ui dividing header\">{{ 'sylius.ui.values'|trans }}</h4>
{{ form_row(form.values) }}
", "SyliusAdminBundle:ProductOption:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\ProductOption\\_form.html.twig");
    }
}
