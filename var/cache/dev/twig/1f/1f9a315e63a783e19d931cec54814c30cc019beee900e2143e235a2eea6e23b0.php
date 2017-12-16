<?php

/* SyliusAdminBundle:ProductAttribute:_form.html.twig */
class __TwigTemplate_c9696f59ace947da0b86570d374494d8b169a958143a0032ade0f1b863fb20eb extends Twig_Template
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
        $__internal_3131a106366934855bfd98e558c3f62c8d7890e340f47cf2a45dc28a5e196b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3131a106366934855bfd98e558c3f62c8d7890e340f47cf2a45dc28a5e196b2b->enter($__internal_3131a106366934855bfd98e558c3f62c8d7890e340f47cf2a45dc28a5e196b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute:_form.html.twig"));

        $__internal_82b2010dd3bbf4894d2bc3179b3a1fbf1176ccaf6f75d36cda555852b9d960df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b2010dd3bbf4894d2bc3179b3a1fbf1176ccaf6f75d36cda555852b9d960df->enter($__internal_82b2010dd3bbf4894d2bc3179b3a1fbf1176ccaf6f75d36cda555852b9d960df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute:_form.html.twig"));

        // line 1
        $context["__internal_0f5649d455ae6ad40b7185c98acd152f5dfe34a6fb6f2d8408d2eccb25b3d775"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductAttribute:_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'errors');
        echo "

<div class=\"ui segment\">
    <div class=\"three fields\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "position", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "type", array()), 'row');
        echo "
    </div>
</div>
";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "configuration", array(), "any", true, true)) {
            // line 13
            echo "<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.configuration"), "html", null, true);
            echo "</h4>
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "configuration", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 16
                echo "        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "</div>
";
        }
        // line 20
        echo $context["__internal_0f5649d455ae6ad40b7185c98acd152f5dfe34a6fb6f2d8408d2eccb25b3d775"]->macro_translationForm(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "translations", array()));
        echo "
";
        
        $__internal_3131a106366934855bfd98e558c3f62c8d7890e340f47cf2a45dc28a5e196b2b->leave($__internal_3131a106366934855bfd98e558c3f62c8d7890e340f47cf2a45dc28a5e196b2b_prof);

        
        $__internal_82b2010dd3bbf4894d2bc3179b3a1fbf1176ccaf6f75d36cda555852b9d960df->leave($__internal_82b2010dd3bbf4894d2bc3179b3a1fbf1176ccaf6f75d36cda555852b9d960df_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAttribute:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  73 => 18,  64 => 16,  60 => 15,  56 => 14,  53 => 13,  51 => 12,  45 => 9,  41 => 8,  37 => 7,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

{{ form_errors(form) }}

<div class=\"ui segment\">
    <div class=\"three fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.position) }}
        {{ form_row(form.type) }}
    </div>
</div>
{% if form.configuration is defined %}
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.configuration'|trans }}</h4>
    {% for field in form.configuration %}
        {{ form_row(field) }}
    {% endfor %}
</div>
{% endif %}
{{ translationForm(form.translations) }}
", "SyliusAdminBundle:ProductAttribute:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\ProductAttribute\\_form.html.twig");
    }
}
