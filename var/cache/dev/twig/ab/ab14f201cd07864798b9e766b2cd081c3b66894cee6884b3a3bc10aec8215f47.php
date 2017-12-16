<?php

/* SyliusAdminBundle:TaxRate:_form.html.twig */
class __TwigTemplate_7fcfa7ef4f38fbbc8be919eb86d9d0ac8908676016dfc7b03ecd65c4e659b74b extends Twig_Template
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
        $__internal_0e74e7d70e64e76f421181097745d2e16ef374f97b0522ffacceb2b551f53b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e74e7d70e64e76f421181097745d2e16ef374f97b0522ffacceb2b551f53b98->enter($__internal_0e74e7d70e64e76f421181097745d2e16ef374f97b0522ffacceb2b551f53b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:TaxRate:_form.html.twig"));

        $__internal_1f57f8bcfe0d40853957786c82e57a63095c9dc362b3ee944620bd910fd1cda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f57f8bcfe0d40853957786c82e57a63095c9dc362b3ee944620bd910fd1cda0->enter($__internal_1f57f8bcfe0d40853957786c82e57a63095c9dc362b3ee944620bd910fd1cda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:TaxRate:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.general_info"), "html", null, true);
        echo "</h4>
    <div class=\"two fields\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
    </div>
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.criteria"), "html", null, true);
        echo "</h4>
    <div class=\"two fields\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "category", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "zone", array()), 'row');
        echo "
    </div>
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxes"), "html", null, true);
        echo "</h4>
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "calculator", array()), 'row');
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "amount", array()), 'row');
        echo "
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "includedInPrice", array()), 'row');
        echo "
</div>
";
        
        $__internal_0e74e7d70e64e76f421181097745d2e16ef374f97b0522ffacceb2b551f53b98->leave($__internal_0e74e7d70e64e76f421181097745d2e16ef374f97b0522ffacceb2b551f53b98_prof);

        
        $__internal_1f57f8bcfe0d40853957786c82e57a63095c9dc362b3ee944620bd910fd1cda0->leave($__internal_1f57f8bcfe0d40853957786c82e57a63095c9dc362b3ee944620bd910fd1cda0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:TaxRate:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  73 => 22,  69 => 21,  65 => 20,  57 => 15,  53 => 14,  48 => 12,  40 => 7,  36 => 6,  31 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.general_info'|trans }}</h4>
    <div class=\"two fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.name) }}
    </div>
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.criteria'|trans }}</h4>
    <div class=\"two fields\">
        {{ form_row(form.category) }}
        {{ form_row(form.zone) }}
    </div>
</div>

<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h4>
    {{ form_row(form.calculator) }}
    {{ form_row(form.amount) }}
    {{ form_row(form.includedInPrice) }}
</div>
", "SyliusAdminBundle:TaxRate:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/TaxRate/_form.html.twig");
    }
}
