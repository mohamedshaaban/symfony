<?php

/* SyliusAdminBundle:Zone:_form.html.twig */
class __TwigTemplate_7090809d048851bf84334d42a467110b21e47902a530f9ab9900098fb772ae75 extends Twig_Template
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
        $__internal_e6780e6199f551e95488a25cfff2b0b7a316f5f166d2cf11188b850e065deb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6780e6199f551e95488a25cfff2b0b7a316f5f166d2cf11188b850e065deb2b->enter($__internal_e6780e6199f551e95488a25cfff2b0b7a316f5f166d2cf11188b850e065deb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Zone:_form.html.twig"));

        $__internal_407e29f83a9d315ed307a07efcb94866faa9a0b716f70eaa3ec8c790910cb054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407e29f83a9d315ed307a07efcb94866faa9a0b716f70eaa3ec8c790910cb054->enter($__internal_407e29f83a9d315ed307a07efcb94866faa9a0b716f70eaa3ec8c790910cb054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Zone:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'errors');
        echo "
<div class=\"ui segment\">
    <div class=\"two fields\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "type", array()), 'row');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
    </div>
    <div class=\"two fields\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "scope", array()), 'row');
        echo "
    </div>
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.members"), "html", null, true);
        echo "</h4>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "members", array()), 'row', array("label" => false));
        echo "
</div>
";
        
        $__internal_e6780e6199f551e95488a25cfff2b0b7a316f5f166d2cf11188b850e065deb2b->leave($__internal_e6780e6199f551e95488a25cfff2b0b7a316f5f166d2cf11188b850e065deb2b_prof);

        
        $__internal_407e29f83a9d315ed307a07efcb94866faa9a0b716f70eaa3ec8c790910cb054->leave($__internal_407e29f83a9d315ed307a07efcb94866faa9a0b716f70eaa3ec8c790910cb054_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Zone:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  52 => 13,  45 => 9,  41 => 8,  35 => 5,  31 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
<div class=\"ui segment\">
    <div class=\"two fields\">
        {{ form_row(form.type) }}
        {{ form_row(form.code) }}
    </div>
    <div class=\"two fields\">
        {{ form_row(form.name) }}
        {{ form_row(form.scope) }}
    </div>
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.members'|trans }}</h4>
    {{ form_row(form.members, {'label': false}) }}
</div>
", "SyliusAdminBundle:Zone:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Zone/_form.html.twig");
    }
}
