<?php

/* SyliusAdminBundle:ProductAttribute:_form.html.twig */
class __TwigTemplate_bbaf063e722179b2a653fea6335c02cb4ecb20d6f1614c48ce6bf1b30d32c543 extends Twig_Template
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
        $__internal_11b33ee5b9d5b084218ab24293ec53110a00129b43bb5cd618a7e89e54ba7c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b33ee5b9d5b084218ab24293ec53110a00129b43bb5cd618a7e89e54ba7c73->enter($__internal_11b33ee5b9d5b084218ab24293ec53110a00129b43bb5cd618a7e89e54ba7c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute:_form.html.twig"));

        $__internal_3ec1bdf802b845770522117213bb6665d5001ff0b05567b54d6ce1b35982cef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec1bdf802b845770522117213bb6665d5001ff0b05567b54d6ce1b35982cef9->enter($__internal_3ec1bdf802b845770522117213bb6665d5001ff0b05567b54d6ce1b35982cef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAttribute:_form.html.twig"));

        // line 1
        $context["__internal_75f327c3f83dadc10b31a6c3de09b00e84183422de39f84dce783b62e88e9231"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductAttribute:_form.html.twig", 1);
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
        echo $context["__internal_75f327c3f83dadc10b31a6c3de09b00e84183422de39f84dce783b62e88e9231"]->macro_translationForm(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "translations", array()));
        echo "
";
        
        $__internal_11b33ee5b9d5b084218ab24293ec53110a00129b43bb5cd618a7e89e54ba7c73->leave($__internal_11b33ee5b9d5b084218ab24293ec53110a00129b43bb5cd618a7e89e54ba7c73_prof);

        
        $__internal_3ec1bdf802b845770522117213bb6665d5001ff0b05567b54d6ce1b35982cef9->leave($__internal_3ec1bdf802b845770522117213bb6665d5001ff0b05567b54d6ce1b35982cef9_prof);

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
", "SyliusAdminBundle:ProductAttribute:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductAttribute/_form.html.twig");
    }
}
