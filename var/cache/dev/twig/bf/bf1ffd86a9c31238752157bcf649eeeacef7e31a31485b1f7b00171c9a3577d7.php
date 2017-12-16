<?php

/* SyliusAdminBundle:ProductVariant/Generate:_form.html.twig */
class __TwigTemplate_3554de2047ecdc3449ffc88ccecb7ca0aa688a62b8f6c17c3485238aaf791aee extends Twig_Template
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
        $__internal_67610bf28050b93d1fb3fcfffeda6dab32b00bd08b00de28917cd23445e24bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67610bf28050b93d1fb3fcfffeda6dab32b00bd08b00de28917cd23445e24bd5->enter($__internal_67610bf28050b93d1fb3fcfffeda6dab32b00bd08b00de28917cd23445e24bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Generate:_form.html.twig"));

        $__internal_818d636c2a894935a54db8bb9d91b6f303abe17878351eb989a697652c5686c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818d636c2a894935a54db8bb9d91b6f303abe17878351eb989a697652c5686c7->enter($__internal_818d636c2a894935a54db8bb9d91b6f303abe17878351eb989a697652c5686c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Generate:_form.html.twig"));

        // line 1
        echo "<h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variants"), "html", null, true);
        echo "</h4>
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "variants", array()), 'row');
        echo "
";
        
        $__internal_67610bf28050b93d1fb3fcfffeda6dab32b00bd08b00de28917cd23445e24bd5->leave($__internal_67610bf28050b93d1fb3fcfffeda6dab32b00bd08b00de28917cd23445e24bd5_prof);

        
        $__internal_818d636c2a894935a54db8bb9d91b6f303abe17878351eb989a697652c5686c7->leave($__internal_818d636c2a894935a54db8bb9d91b6f303abe17878351eb989a697652c5686c7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Generate:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui dividing header\">{{ 'sylius.ui.variants'|trans }}</h4>
{{ form_row(form.variants) }}
", "SyliusAdminBundle:ProductVariant/Generate:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Generate/_form.html.twig");
    }
}
